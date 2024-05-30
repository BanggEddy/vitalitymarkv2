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
use App\Service\PromoFilter;
use Symfony\Component\Security\Csrf\CsrfTokenManagerInterface;

class AccueilController extends AbstractController
{
    private $entityManager;
    private $promoFilter;
    private $csrfTokenManager;

    public function __construct(CsrfTokenManagerInterface $csrfTokenManager, EntityManagerInterface $entityManager, PromoFilter $promoFilter)
    {
        $this->entityManager = $entityManager;
        $this->promoFilter = $promoFilter;
        $this->csrfTokenManager = $csrfTokenManager;
    }

    #[Route('/', name: 'app_accueil')]
    public function index(
        ProductsRepository $productsRepository,
        PromoRepository $promoRepository,
        Request $request,
    ): Response {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        $products = $productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->get('category')->getData();
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        return $this->render('accueil/index.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'promotions' => $promotions,
        ]);
    }

    #[Route('/legals', name: 'app_legals')]
    public function mentionsLegalsPage(
        Request $request,
    ): Response {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->get('category')->getData();
            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        return $this->render('accueil/legals.html.twig', [
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/promo', name: 'app_promo')]
    public function afficherLesPromos(PromoRepository $promoRepository, Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

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
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/details-produit/{id}', name: 'details_produit')]
    public function detailsDunProduit(
        $id,
        Request $request,
        ProductsRepository $productsRepository,
        PromoRepository $promoRepository,
    ): Response {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);
        $category = null;

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }
        $product = $productsRepository->find($id);

        $category = $product->getCategory();

        $products = $productsRepository->findBy(['category' => $category]);

        $promotions = [];
        foreach ($products as $prod) {
            $promo = $promoRepository->findOneBy(['idproduct' => $prod->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        return $this->render('accueil/indexproduit.html.twig', [
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'promotions' => $promotions,
            'products' => $products,
            'product' => $product,
        ]);
    }


    #[Route('/search', name: 'search')]
    public function rechercherUnProduitVisiteur(ProductsRepository $productsRepository, Request $request, EntityManagerInterface $entityManager, PromoRepository $promoRepository,)
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);
        $category = null;

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        $motrecherche = $request->request->get('motrecherche');

        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        $promotions = [];

        foreach ($products as $product) {
            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        return $this->render('accueil/search.html.twig', [
            'products' => $products,
            'promotions' => $promotions,
            'motrecherche' => $motrecherche,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/', name: 'app_contact')]
    public function indexcontact(Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);
        $category = null;

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return $this->redirectToRoute('accueil_category_products', ['category' => $category]);
        }

        return $this->render('accueil/contact.html.twig', [
            'controller_name' => 'AccueilController',
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/contact/submit', name: 'app_contact_submit', methods: ['POST'])]
    public function submitContact(Request $request): Response
    {
        $token = $request->request->get('_csrf_token');

        if (!$this->isCsrfTokenValid('contact', $token)) {
            $this->addFlash('error', 'Token CSRF invalide.');
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
    public function categorieAccueil(Request $request, string $category, PromoRepository $promoRepository, EntityManagerInterface $entityManager, ProductsRepository $productsRepository,): Response
    {
        $products = $productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];
            return new RedirectResponse($this->generateUrl('accueil_category_products', ['category' => $category]));
        }

        $products = $productsRepository->findBy(['category' => $category]);

        return $this->render('accueil/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'promotions' => $promotions,
        ]);
    }
}
