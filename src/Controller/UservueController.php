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
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use App\Repository\PanierRepository;
use App\Repository\PromoRepository;
use App\Form\ProductSearchType;
use App\Service\PromoFilter;
use App\Service\PanierUser;
use App\Service\ProductCategorie;
use App\Service\PromotionService;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;


class UservueController extends AbstractController
{
    private $entityManager;
    private $promoFilter;
    private $panierUserService;
    private $csrfTokenManager;
    private $productCategorie;
    private $promotionService;

    public function __construct(PromotionService $promotionService, ProductCategorie $productCategorie, CsrfTokenManagerInterface $csrfTokenManager, EntityManagerInterface $entityManager, PromoFilter $promoFilter, PanierUser $panierUserService,)
    {
        $this->entityManager = $entityManager;
        $this->promoFilter = $promoFilter;
        $this->panierUserService = $panierUserService;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->productCategorie = $productCategorie;
        $this->promotionService = $promotionService;
    }

    #[Route('/uservue', name: 'app_uservue')]
    public function index(
        Request $request,
        ProductsRepository $productsRepository,
        PanierUser $panierUserService,
        PanierRepository $panierRepository,

    ): Response {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $products = $productsRepository->findAll();

        $promotions = $this->promotionService->getPromotionsPourProducts($products);
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);


        return $this->render('user/uservue/index.html.twig', [
            'panierDetails' => $panierDetails,
            'controller_name' => 'UservueController',
            'totalPrice' => $totalPrice,
            'user_id' => $userId,
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
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


        $panierDetails = [];
        $panierDetails = $panierUserService->createPanierDetails($paniers);

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
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
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        return $this->render('user/uservue/promo.html.twig', [
            'panierDetails' => $panierDetails,
            'products' => $productsInPromotion,
            'controller_name' => 'UservueController',
            'totalPrice' => $totalPrice,
            'promotions' => $promotions,
            'user_id' => $userId,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/add-dans-panier/{id}', name: 'add_dans_panier')]
    public function addDansPanier(PanierRepository $panierRepository, Request $request, ProductsRepository $productsRepository, $id, UrlGeneratorInterface $urlGenerator): Response
    {
        $quantity = $request->request->get('quantity');

        $user = $this->getUser();

        try {
            $this->entityManager->beginTransaction();

            $product = $productsRepository->find($id);


            if ($product) {
                $product->setQuantity($product->getQuantity() - $quantity);
            }

            $panierItem = $panierRepository->findOneBy(['idproducts' => $product, 'iduser' => $user]);

            if ($panierItem) {
                $panierItem->setQuantity($panierItem->getQuantity() + $quantity);
            } else {
                $panierItem = new Panier();
                $panierItem->setQuantity($quantity);
                $panierItem->setIduser($user);

                if ($product) {
                    $panierItem->setIdproducts($product);
                }

                $this->entityManager->persist($panierItem);
            }

            $this->entityManager->flush();
            $this->entityManager->commit();

            $url = $urlGenerator->generate('uservue');
            return new RedirectResponse($url);
        } catch (\Exception $e) {
            $this->entityManager->rollback();
        }
    }


    #[Route('/user/panier', name: 'user_panier')]
    public function getUserPanier(PanierRepository $panierRepository, Request $request, PanierUser $panierUserService): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }


        $user = $this->getUser();
        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);



        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $userId = $user->getId();

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        return $this->render('user/uservue/indexpanier.html.twig', [
            'panierDetails' => $panierDetails,
            'totalPrice' => $totalPrice,
            'user_id' => $userId,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }


    #[Route('/search/user', name: 'search_user')]
    public function search(
        Request $request,
        PanierRepository $panierRepository,
        PromoRepository $promoRepository,
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
        $panierDetails = $panierUserService->createPanierDetails($paniers);

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        $motrecherche = $request->request->get('motrecherche');

        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        $totalPrice = 0;

        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('user/uservue/search.html.twig', [
            'products' => $products,
            'promotions' => $promotions,
            'motrecherche' => $motrecherche,
            'totalPrice' => $totalPrice,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'user_id' => $userId,
            'panierDetails' => $panierDetails,

        ]);
    }

    #[Route('/user/loyalty-card/{id}', name: 'user_loyalty_card')]
    public function redirectToUserLoyaltyCard($id): RedirectResponse
    {
        $redirectUrl = $this->generateUrl('user_loyalty_card_page', ['id' => $id]);

        return new RedirectResponse($redirectUrl);
    }

    #[Route('/user/uservue/card/{id}', name: 'user_loyalty_card_page')]
    public function showUserLoyaltyCardPage($id, PanierRepository $panierRepository, PanierUser $panierUserService, Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        /** @var UserInterface|null $user */
        $user = $this->getUser();

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        $loyaltyCard = $user->getIdloyaltycard();

        if (!$loyaltyCard) {
            $this->addFlash('warning', 'Vous n\'avez pas de carte de fidélité. Souhaitez-vous en obtenir une ?');
            return $this->render('user/uservue/card.html.twig', [
                'loyaltyCard' => null,
                'user_id' => $user->getId(),
                'totalPrice' => $totalPrice,
                'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
                'panierDetails' => $panierDetails,
            ]);
        }

        return $this->render('user/uservue/card.html.twig', [
            'loyaltyCard' => $loyaltyCard,
            'user_id' => $user->getId(),
            'totalPrice' => $totalPrice,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'panierDetails' => $panierDetails,
        ]);
    }

    #[Route('/user/uservue/creer/carte/loyalty', name: 'creer_carte_loyalty')]
    public function CreerCarteLoyalty(LoyaltyCard $loyaltyCard, PanierRepository $panierRepository, EntityManagerInterface $entityManager): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $loyaltyCardUser = $user->getIdloyaltycard();

        if ($loyaltyCardUser) {
            $this->addFlash('warning', 'Vous avez déjà une carte de fidélité.');
            return $this->redirectToRoute('user_loyalty_card_page', ['id' => $user->getId()]);
        }

        $loyaltyCard = new LoyaltyCard();
        $loyaltyCard->setCardNumber($this->generateRandomCardNumber());
        $loyaltyCard->setCardType('normal');
        $loyaltyCard->setPoints(10);
        $loyaltyCard->setIduser($user);
        $user->setIdloyaltycard($loyaltyCard);

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
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        $userId = null;
        if ($user instanceof User) {
            $userId = $user->getId();
        }
        return $this->render('user/uservue/user.html.twig', [
            'user' => $user,
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
            'panierDetails' => $panierDetails,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
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
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        $products = $productsRepository->findBy(['category' => $category]);

        $promotions = $this->promotionService->getPromotionsPourProducts($products);
        $panierDetails = $panierUserService->createPanierDetails($paniers);

        return $this->render('user/uservue/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'barreRechercheCategory' => $form->createView(),
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
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
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $paniers = $panierRepository->findBy(['iduser' => $user]);

        $panierDetails = [];
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        return $this->render('user/uservue/contact.html.twig', [
            'controller_name' => 'AccueilController',
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
            'panierDetails' => $panierDetails,
        ]);
    }

    #[Route('/contact/user/submit', name: 'app_contact_user_submit')]
    public function submitContact(Request $request): Response
    {
        $token = $request->request->get('_csrf_token');

        $user = $this->getUser();

        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $contact = new Contact();
        $contact->setSubject($subject);
        $contact->setObject($message);

        if ($user instanceof User) {
            $contact->setIduser($user);
        }

        if (!$this->isCsrfTokenValid('contact', $token)) {
            $this->addFlash('error', 'le Token CSRF est invalide.');
            return $this->redirectToRoute('app_contact_user');
        }

        $this->entityManager->persist($contact);
        $this->entityManager->flush();

        return $this->redirectToRoute('app_contact_user');
    }

    #[Route('/details/produit/user/{id}', name: 'details_produit_user')]
    public function detailsProduit($id, Request $request, PanierUser $panierUserService, PanierRepository $panierRepository, ProductsRepository $productsRepository,): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;
        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = [];
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $userId = null;

        if ($user instanceof User) {
            $userId = $user->getId();
        }

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        $product = $productsRepository->find($id);
        $category = $product->getCategory();
        $products = $productsRepository->findBy(['category' => $category]);

        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('user/uservue/details.html.twig', [
            'promotions' => $promotions,
            'products' => $products,
            'product' => $product,
            'user_id' => $userId,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'totalPrice' => $totalPrice,
            'panierDetails' => $panierDetails,

        ]);
    }

    #Soustraire/Ajout quantité d'un "produits" depuis le panier
    #[Route('/update-quantity', name: 'update_quantity', methods: ['POST'])]
    public function updateQuantityProduit(Request $request, EntityManagerInterface $entityManager, PanierRepository $panierRepository): Response
    {
        $panierId = $request->request->get('panierId');
        $action = $request->request->get('action');

        $panier = $panierRepository->find($panierId);

        if ($action === 'add') {
            $panier->setQuantity($panier->getQuantity() + 1);

            if ($panier->getIdproducts()) {
                $product = $panier->getIdproducts();
                $product->setQuantity($product->getQuantity() - 1);
            }
        } elseif ($action === 'subtract') {

            $panier->setQuantity($panier->getQuantity() - 1);

            if ($panier->getIdproducts()) {
                $product = $panier->getIdproducts();
                $product->setQuantity($product->getQuantity() + 1);
                if ($product->getQuantity() === 0) {
                    $panier->getIduser()->removePanier($panier, $entityManager);
                }
            }

            if ($panier->getQuantity() === 0) {
                $panier->getIduser()->removePanier($panier, $entityManager);
            }
        } else {
            return new RedirectResponse('/user/panier', 302, ['danger' => 'Action non valide.']);
        }

        $entityManager->flush();

        return new RedirectResponse('/user/panier', 302, ['success' => 'La quantité du panier a été mise à jour avec succès.']);
    }

    #[Route('/remove_from_cart', name: 'remove_from_cart', methods: ['POST'])]
    public function removeFromCartProduit(PanierRepository $panierRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $panierId = $request->request->get('panierId');
        $panier = $panierRepository->find($panierId);
        $product = $panier->getIdproducts();

        if ($product instanceof Products) {
            $product->setQuantity($product->getQuantity() + $panier->getQuantity());
        }

        $user = $panier->getIduser();
        if ($user) {
            $user->removePanier($panier, $entityManager);
        }

        $entityManager->remove($panier);
        $entityManager->flush();

        return new RedirectResponse('/user/panier');
    }

    #[Route('/delete_account', name: 'delete_user_account', methods: ['POST'])]
    public function suppressionCompte(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User|null $user */
        $user = $this->getUser();

        if ($request->isMethod('POST')) {
            foreach ($user->getPaniers() as $panier) {
                $entityManager->remove($panier);
            }

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

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $redirectUrl = $this->productCategorie->barreCategoryChercher($barreDeRechercheCategorie, $request);

        if ($redirectUrl) {
            return $this->redirect($redirectUrl);
        }

        $paniers = $panierRepository->findBy(['iduser' => $user]);
        $panierDetails = $panierUserService->createPanierDetails($paniers);
        $totalPrice = $panierUserService->calculateTotalPrice($paniers);

        return $this->render('user/uservue/legals.html.twig', [
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'user_id' => $userId,
            'totalPrice' => $totalPrice,
            'panierDetails' => $panierDetails,
        ]);
    }
}
