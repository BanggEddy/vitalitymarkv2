<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\ProductsRepository;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Products;
use App\Entity\Promo;
use App\Entity\Contact;
use App\Form\ProductSearchType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;
use App\Service\BarreRechercheCategory;
use App\Service\ProductCategorie;
use App\Service\PromotionService;

class AccueilController extends AbstractController
{
    private $entityManager;
    private $csrfTokenManager;
    private $promotionService;
    private $productCategorie;

    public function __construct(ProductCategorie $productCategorie, PromotionService $promotionService, CsrfTokenManagerInterface $csrfTokenManager, EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->csrfTokenManager = $csrfTokenManager;
        $this->promotionService = $promotionService;
        $this->productCategorie = $productCategorie;
    }


    #[Route('/', name: 'app_accueil')]
    public function index(
        ProductsRepository $productsRepository,
        Request $request
    ): Response {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $products = $productsRepository->findAll();
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('accueil/index.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory,
            'promotions' => $promotions,
        ]);
    }

    #[Route('/legals', name: 'app_legals')]
    public function mentionsLegalsPage(
        Request $request,
    ): Response {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        return $this->render('accueil/legals.html.twig', [
            'barreRechercheCategory' => $formRechercheCategory,
        ]);
    }

    #[Route('/promo', name: 'app_promo')]
    public function afficherLesPromos(PromoRepository $promoRepository, Request $request): Response
    {
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

        return $this->render('accueil/indexpromo.html.twig', [
            'controller_name' => 'AccueilController',
            'promotions' => $promotions,
            'products' => $productsInPromotion,
            'barreRechercheCategory' => $formRechercheCategory
        ]);
    }

    #[Route('/details-produit/{id}', name: 'details_produit')]
    public function detailsDunProduit(
        $id,
        Request $request,
        ProductsRepository $productsRepository,
    ): Response {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $product = $productsRepository->find($id);
        $category = $product->getCategory();

        $products = $productsRepository->findBy(['category' => $category]);
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('accueil/indexproduit.html.twig', [
            'barreRechercheCategory' => $formRechercheCategory,
            'promotions' => $promotions,
            'products' => $products,
            'product' => $product,
        ]);
    }


    #[Route('/search', name: 'search')]
    public function rechercherUnProduitVisiteur(ProductsRepository $productsRepository, Request $request,)
    {
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

        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('accueil/search.html.twig', [
            'products' => $products,
            'promotions' => $promotions,
            'motrecherche' => $motrecherche,
            'barreRechercheCategory' => $formRechercheCategory,
        ]);
    }

    #[Route('/', name: 'app_contact')]
    public function indexcontact(Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        return $this->render('accueil/contact.html.twig', [
            'controller_name' => 'AccueilController',
            'barreRechercheCategory' => $formRechercheCategory,
        ]);
    }

    #[Route('/contact/submit', name: 'app_contact_submit', methods: ['POST'])]
    public function submitContact(Request $request): Response
    {
        $token = $request->request->get('_csrf_token');

        if (!$this->isCsrfTokenValid('contact', $token)) {
            return $this->redirectToRoute('app_contact');
        }

        $subject = $request->request->get('subject');
        $message = $request->request->get('message');

        $contact = new Contact();
        $contact->setSubject($subject);
        $contact->setObject($message);

        $this->entityManager->persist($contact);
        $this->entityManager->flush();

        $this->addFlash('success', 'Votre message a été envoyé avec succès.');

        return $this->redirectToRoute('app_contact');
    }


    #[Route('/accueil/categorie/{category}', name: 'accueil_category_products')]
    public function categorieAccueil(Request $request, string $category, ProductsRepository $productsRepository,): Response
    {
        $products = $productsRepository->findAll();

        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $products = $productsRepository->findBy(['category' => $category]);

        return $this->render('accueil/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory,
            'promotions' => $promotions,
        ]);
    }
}
