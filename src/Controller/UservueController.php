<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;
use App\Entity\Products;
use App\Entity\Panier;
use App\Entity\User;
use App\Entity\Promo;
use App\Entity\Contact;
use App\Entity\LoyaltyCard;
use App\Entity\PanierItems;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\PanierRepository;
use App\Repository\PromoRepository;
use App\Form\ProductSearchType;
use App\Repository\PanierItemsRepository;
use App\Service\PanierUser;
use App\Service\ProductCategorie;
use App\Service\PromotionService;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use Symfony\Component\Mime\Email;

class UservueController extends AbstractController
{
    private $entityManager;
    private $panierUserService;
    private $csrfTokenManager;
    private $productCategorie;
    private $promotionService;

    public function __construct(PromotionService $promotionService, ProductCategorie $productCategorie, CsrfTokenManagerInterface $csrfTokenManager, EntityManagerInterface $entityManager, PanierUser $panierUserService,)
    {
        $this->entityManager = $entityManager;
        $this->panierUserService = $panierUserService;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->productCategorie = $productCategorie;
        $this->promotionService = $promotionService;
    }

    #[Route('/uservue', name: 'uservue')]
    public function index(
        Request $request,
        ProductsRepository $productsRepository,
        PanierRepository $panierRepository,
        PanierUser $panierUserService,
    ): Response {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }
        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $userId = $user->getId();
        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $products = $productsRepository->findAll();
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $details = $panierUserService->creerDetailsPanier($panier);
            $panierDetails[] = $details;
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }

        return $this->render('user/uservue/index.html.twig', [
            'panierDetails' => $panierDetails,
            'prixTotalPanier' => $prixTotalPanier,
            'user_id' => $userId,
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'promotions' => $promotions,
        ]);
    }

    #[Route('/user/promo', name: 'app_user_promo')]
    public function promo(PanierRepository $panierRepository, PromoRepository $promoRepository, Request $request, PanierUser $panierUserService): Response
    {
        $user = $this->getUser();
        $userId = null;
        if ($user instanceof User) {
            $userId = $user->getId();
            $paniers = $panierRepository->findBy(['iduser' => $userId]);
        }

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }


        $promotions = $promoRepository->findAll();

        $productsInPromotion = [];

        foreach ($promotions as $promo) {
            $product = $promo->getIdproduct();
            if ($product !== null) {
                $productsInPromotion[] = $product;
            }
        }

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $details = $panierUserService->creerDetailsPanier($panier);
            $panierDetails[] = $details;
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }

        return $this->render('user/uservue/promo.html.twig', [
            'panierDetails' => $panierDetails,
            'products' => $productsInPromotion,
            'prixTotalPanier' => $prixTotalPanier,
            'promotions' => $promotions,
            'user_id' => $userId,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/add/dans/panier/{id}', name: 'add_dans_panier')]
    public function addDansPanier(
        PanierRepository $panierRepository,
        Request $request,
        ProductsRepository $productsRepository,
        EntityManagerInterface $entityManager,
        $id,
        UrlGeneratorInterface $urlGenerator
    ): Response {
        $quantityrecup = $request->request->get('quantity');

        if ($quantityrecup <= 0) {
            throw new \InvalidArgumentException('La quantité doit être supérieure à zéro.');
        }

        $user = $this->getUser();

        try {
            $entityManager->beginTransaction();

            $product = $productsRepository->find($id);
            if (!$product) {
                throw $this->createNotFoundException('Produit non trouvé.');
            }

            if ($product->getQuantity() < $quantityrecup) {
                throw new \Exception('Quantité insuffisante en stock.');
            }

            $panier = $panierRepository->findOneBy(['iduser' => $user]);
            if (!$panier) {
                $panier = new Panier();
                $panier->setIduser($user);
                $entityManager->persist($panier);
            }

            $panierItems = $panier->getPanierItems();
            $produitdiff = false;
            foreach ($panierItems as $panierItem) {
                if ($panierItem->getIdproduct() === $product) {
                    $panierItem->setQuantity($panierItem->getQuantity() + $quantityrecup);
                    $product->setQuantity($product->getQuantity() - $quantityrecup);
                    $produitdiff = true;
                    break;
                }
            }

            if (!$produitdiff) {
                $panierItem = new PanierItems();
                $panierItem->setIdproduct($product);
                $panierItem->setQuantity($quantityrecup);
                $product->setQuantity($product->getQuantity() - $quantityrecup);
                $panier->addPanierItem($panierItem);
                $entityManager->persist($panierItem);
            }

            $entityManager->flush();
            $entityManager->commit();

            $url = $urlGenerator->generate('uservue');
            return new RedirectResponse($url);
        } catch (\Exception $e) {
            $entityManager->rollback();
            throw $e;
        }
    }

    #[Route('/user/panier', name: 'user_panier')]
    public function getUserPanier(PanierRepository $panierRepository, Request $request, PanierUser $panierUserService): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }


        $user = $this->getUser();
        $paniers = $panierRepository->findBy(['iduser' => $user]);



        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $userId = $user->getId();

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $details = $panierUserService->creerDetailsPanier($panier);
            $panierDetails[] = $details;
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }



        return $this->render('user/uservue/indexpanier.html.twig', [
            'panierDetails' => $panierDetails,
            'prixTotalPanier' => $prixTotalPanier,
            'user_id' => $userId,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }


    #[Route('/search/user', name: 'search_user')]
    public function search(
        Request $request,
        PanierRepository $panierRepository,
        PanierUser $panierUserService,
        ProductsRepository $productsRepository,
    ) {
        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $userId = null;
        if ($user instanceof User) {
            $userId = $user->getId();
        }
        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $details = $panierUserService->creerDetailsPanier($panier);
            $panierDetails[] = $details;
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }



        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $motrecherche = $request->request->get('motrecherche');

        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        $prixTotalPanier = 0;

        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('user/uservue/search.html.twig', [
            'products' => $products,
            'promotions' => $promotions,
            'motrecherche' => $motrecherche,
            'prixTotalPanier' => $prixTotalPanier,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'user_id' => $userId,
            'panierDetails' => $panierDetails,

        ]);
    }

    #[Route('/user/loyalty-card/{id}', name: 'user_loyalty_card')]
    public function redirectToUserLoyaltyCard($id): RedirectResponse
    {
        $utiliserServiceRedirection = $this->generateUrl('user_loyalty_card_page', ['id' => $id]);

        return new RedirectResponse($utiliserServiceRedirection);
    }

    #[Route('/user/uservue/card/{id}', name: 'user_loyalty_card_page')]
    public function showUserLoyaltyCardPage(PanierRepository $panierRepository, PanierUser $panierUserService, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $panierDetails[] = $panierUserService->creerDetailsPanier($panier);
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }



        $loyaltyCard = $user->getLoyaltyCard();

        if (!$loyaltyCard) {
            $this->addFlash('warning', 'Vous n\'avez pas de carte de fidélité. Souhaitez-vous en obtenir une ?');
            return $this->render('user/uservue/card.html.twig', [
                'loyaltyCard' => null,
                'user_id' => $user->getId(),
                'prixTotalPanier' => $prixTotalPanier,
                'barreRechercheCategory' => $formRechercheCategory->createView(),
                'panierDetails' => $panierDetails,
            ]);
        }

        return $this->render('user/uservue/card.html.twig', [
            'loyaltyCard' => $loyaltyCard,
            'user_id' => $user->getId(),
            'prixTotalPanier' => $prixTotalPanier,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'panierDetails' => $panierDetails,
        ]);
    }

    #[Route('/user/uservue/creer/carte/loyalty', name: 'creer_carte_loyalty')]
    public function CreerCarteLoyalty(LoyaltyCard $loyaltyCard, PanierRepository $panierRepository, EntityManagerInterface $entityManager): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $loyaltyCardUser = $user->getLoyaltyCard();


        if ($loyaltyCardUser) {
            $this->addFlash('warning', 'Vous avez déjà une carte de fidélité.');
            return $this->redirectToRoute('user_loyalty_card_page', ['id' => $user->getId()]);
        }

        $loyaltyCard = new LoyaltyCard();
        $loyaltyCard->setCardNumber($this->generateRandomCardNumber());
        $loyaltyCard->setCardType('normal');
        $loyaltyCard->setPoints(10);
        $loyaltyCard->setIduser($user);
        $user->setloyaltycard($loyaltyCard);

        $entityManager->persist($loyaltyCard);
        $entityManager->flush();

        return $this->redirectToRoute('user_loyalty_card_page', ['id' => $user->getId()]);
    }

    private function generateRandomCardNumber(): string
    {
        return strtoupper(substr(md5(uniqid()), 0, 10));
    }

    #[Route('/user/profile', name: 'user_profile')]
    public function userProfile(PanierRepository $panierRepository, PanierUser $panierUserService, Request $request, $category = null): Response
    {

        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $userId = $user->getId();

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $panierDetails[] = $panierUserService->creerDetailsPanier($panier);
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }



        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $userId = null;
        if ($user instanceof User) {
            $userId = $user->getId();
        }
        return $this->render('user/uservue/user.html.twig', [
            'user' => $user,
            'user_id' => $userId,
            'prixTotalPanier' => $prixTotalPanier,
            'panierDetails' => $panierDetails,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'category' => $category,
        ]);
    }

    #[Route('edit/user/profile', name: 'edit_user_profile')]
    public function modifierProfilUser(Request $request, EntityManagerInterface $entityManager): Response
    {
        $user = $this->getUser();

        if (!$user instanceof User) {
            throw $this->createNotFoundException('Utilisateur non trouvé.');
        }

        $email = $request->request->get('email');
        $name = $request->request->get('name');
        $adresse = $request->request->get('adresse');
        $civilite = $request->request->get('civilite');

        $user->setEmail($email);
        $user->setName($name);
        $user->setAdresse($adresse);
        $user->setCivilite($civilite);

        $entityManager->flush();

        return new RedirectResponse($this->generateUrl('user_profile_view'));
    }

    #[Route('/user/uservue/categorie/{category}', name: 'user_category_products')]
    public function pageCategoriesUser(ProductsRepository $productsRepository, $category, Request $request, PanierUser $panierUserService, PanierRepository $panierRepository): Response
    {
        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData()['category'];
            return new RedirectResponse($this->generateUrl('user_category_products', ['category' => $category]));
        }

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $products = $productsRepository->findBy(['category' => $category]);
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $panierDetails[] = $panierUserService->creerDetailsPanier($panier);
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }


        return $this->render('user/uservue/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'barreRechercheCategory' => $form->createView(),
            'user_id' => $userId,
            'prixTotalPanier' => $prixTotalPanier,
            'panierDetails' => $panierDetails,
            'promotions' => $promotions,
        ]);
    }

    #[Route('/contact/user', name: 'app_contact_user')]
    public function indexcontact(
        Request $request,
        PanierRepository $panierRepository,
        PanierUser $panierUserService,
    ): Response {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $details = $panierUserService->creerDetailsPanier($panier);
            $panierDetails[] = $details;
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }



        return $this->render('user/uservue/contact.html.twig', [
            'controller_name' => 'AccueilController',
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'user_id' => $userId,
            'prixTotalPanier' => $prixTotalPanier,
            'panierDetails' => $panierDetails,
        ]);
    }

    #[Route('/contact/user/submit', name: 'app_contact_user_submit')]
    public function submitContact(Request $request, MailerInterface $mailer): Response
    {
        $token = $request->request->get('_csrf_token');
        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $contact = new Contact();
        $contact->setSubject($subject);
        $contact->setObject($message);

        $contact->setIduser($user);

        if (!$this->isCsrfTokenValid('contact', $token)) {
            $this->addFlash('error', 'Le Token CSRF est invalide.');
            return $this->redirectToRoute('app_contact_user');
        }

        $this->entityManager->persist($contact);
        $this->entityManager->flush();

        $email = (new Email())
            ->from($user->getEmail())
            ->to('vitalitymarket-contact@vttmt.com')
            ->subject($contact->getSubject())
            ->html($contact->getObject());

        $mailer->send($email);

        $this->addFlash('success', 'Votre message a été envoyé avec succès.');
        return $this->redirectToRoute('app_contact_user');
    }

    #[Route('/details/produit/user/{id}', name: 'details_produit_user')]
    public function detailsProduit($id, Request $request, PanierUser $panierUserService, PanierRepository $panierRepository, ProductsRepository $productsRepository,): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;
        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $userId = null;

        if ($user instanceof User) {
            $userId = $user->getId();
        }

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $product = $productsRepository->find($id);
        $category = $product->getCategory();
        $productsrecommande = $productsRepository->findBy(['category' => $category]);

        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $panierDetails[] = $panierUserService->creerDetailsPanier($panier);
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }

        $promotions = $this->promotionService->getPromotionsPourProducts($productsrecommande);

        return $this->render('user/uservue/details.html.twig', [
            'promotions' => $promotions,
            'productsrecommande' => $productsrecommande,
            'product' => $product,
            'user_id' => $userId,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'prixTotalPanier' => $prixTotalPanier,
            'panierDetails' => $panierDetails,

        ]);
    }

    #[Route('/update-quantity', name: 'update_quantity', methods: ['POST'])]
    public function updateQuantityProduit(Request $request, EntityManagerInterface $entityManager, PanierItemsRepository $panierItemsRepository): Response
    {
        $panierItemIdrecup = $request->request->get('panierItemId');
        $action = $request->request->get('action');

        $panierItem = $panierItemsRepository->find($panierItemIdrecup);

        $product = $panierItem->getIdproduct();

        if ($action === 'add') {
            $panierItem->setQuantity($panierItem->getQuantity() + 1);
            $product->setQuantity($product->getQuantity() - 1);
        } elseif ($action === 'subtract') {
            $panierItem->setQuantity($panierItem->getQuantity() - 1);
            $product->setQuantity($product->getQuantity() + 1);

            if ($panierItem->getQuantity() === 0) {
                $entityManager->remove($panierItem);
            }
        } else {
            return new RedirectResponse('/user/panier', 302);
        }

        $entityManager->flush();

        return new RedirectResponse('/user/panier', 302);
    }


    #[Route('/enleverproduit_fromcart', name: 'enleverproduit_fromcart', methods: ['POST'])]
    public function removeFromCartProduit(PanierItemsRepository $panierItemsRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $panierItemIdrecup = $request->request->get('panierItemId');
        $panierItem = $panierItemsRepository->find($panierItemIdrecup);

        $product = $panierItem->getIdproduct();

        if ($product) {
            $product->setQuantity($product->getQuantity() + $panierItem->getQuantity());
        }

        $entityManager->remove($panierItem);
        $entityManager->flush();

        return new RedirectResponse('/user/panier', 302);
    }


    #[Route('/delete_account', name: 'delete_user_account', methods: ['POST'])]
    public function suppressionCompte(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();

        if ($request->isMethod('POST') && $user instanceof User) {
            $paniers = $user->getPaniers();
            foreach ($paniers as $panier) {
                $panierItems = $panier->getPanierItems();
                foreach ($panierItems as $panierItem) {
                    $entityManager->remove($panierItem);
                }
                $entityManager->remove($panier);
            }

            foreach ($user->getContacts() as $contact) {
                $entityManager->remove($contact);
            }

            $loyaltyCard = $user->getLoyaltyCard();
            if ($loyaltyCard) {
                $entityManager->remove($loyaltyCard);
            }
            $this->container->get('security.token_storage')->setToken(null);

            $user->setDeletedAt(new \DateTimeImmutable());
            $entityManager->flush();

            return $this->redirectToRoute('app_logout');
        }

        return $this->render('confirmation_delete_account.html.twig');
    }

    #[Route('/legals/user', name: 'app_legals_user')]
    public function mentionsLegalsPage(
        Request $request,
        PanierUser $panierUserService,
        PanierRepository $panierRepository,
    ): Response {

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        if ($user instanceof User) {
            $userId = $user->getId();
        }

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = [];
        $prixTotalPanier = 0;

        foreach ($paniers as $panier) {
            $panierDetails[] = $panierUserService->creerDetailsPanier($panier);
            $prixTotalPanier += $panierUserService->PriceTotalPanier($panier);
        }

        return $this->render('user/uservue/legals.html.twig', [
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'user_id' => $userId,
            'prixTotalPanier' => $prixTotalPanier,
            'panierDetails' => $panierDetails,
        ]);
    }
}
