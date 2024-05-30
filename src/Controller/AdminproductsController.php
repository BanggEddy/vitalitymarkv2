<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\ProductsRepository;
use App\Entity\Products;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\User;
use App\Entity\Promo;
use App\Form\ProductSearchType;
use App\Form\ProductAdminType;
use App\Repository\PromoRepository;
use App\Repository\PanierRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\File\File;

class AdminproductsController extends AbstractController
{
    private $entityManager;
    private $filesystem;

    public function __construct(EntityManagerInterface $entityManager, Filesystem $filesystem)
    {
        $this->entityManager = $entityManager;
        $this->filesystem = $filesystem;
    }

    #[Route('/adminproducts', name: 'app_adminproducts')]
    public function index(ProductsRepository $productsRepository, PromoRepository $promoRepository, Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $products = $productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        return $this->render('admin/adminproducts/index.html.twig', [
            'controller_name' => 'AdminproductsController',
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'promotions' => $promotions,
        ]);
    }

    #[Route('/adminajouterproducts', name: 'app_admin_add_products')]
    public function ajoutProductPage(Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $productForm = $this->createForm(ProductAdminType::class);
        $productForm->handleRequest($request);

        return $this->render('admin/adminproducts/new.html.twig', [
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'productForm' => $productForm->createView(),
        ]);
    }

    #[Route('/product/create', name: 'app_create_product')]
    public function createProduit(Request $request, LoggerInterface $logger, EntityManagerInterface $entityManager): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $productForm = $this->createForm(ProductAdminType::class);
        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {
            $imageFichier = $productForm->get('images')->getData();

            if ($imageFichier) {
                $nouveauFichiername = uniqid() . '.' . $imageFichier->guessExtension();

                try {
                    $imageFichier->move(
                        $this->getParameter('images_directory'),
                        $nouveauFichiername
                    );
                } catch (FileException $e) {
                    $logger->error($e->getMessage());
                    return $this->redirectToRoute('app_create_product');
                }

                $product = $productForm->getData();
                $product->setImages($nouveauFichiername);

                $entityManager->persist($product);
                $entityManager->flush();

                return $this->redirectToRoute('app_adminproducts');
            }
        }

        return $this->render('admin/adminproducts/new.html.twig', [
            'productForm' => $productForm->createView(),
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/admindeleteproducts', name: 'app_admin_delete_products')]
    public function deleteProducts(PromoRepository $promoRepository, ProductsRepository $productsRepository, Request $request): Response
    {
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
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        $products = $productsRepository->findAll();

        return $this->render('admin/adminproducts/delete.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'promotions' => $promotions,
        ]);
    }
    #[Route('/deleteproduct/{id}', name: 'app_delete_product')]
    public function deleteProduct(Products $product, EntityManagerInterface $entityManager): RedirectResponse
    {
        $imagePath = $this->getParameter('kernel.project_dir') . '/public/images/' . $product->getImages();
        if ($this->filesystem->exists($imagePath)) {
            $this->filesystem->remove($imagePath);
        }

        $promos = $product->getPromos();
        foreach ($promos as $promo) {
            $entityManager->remove($promo);
        }

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin_delete_products');
    }

    #[Route('/adminupdateproducts', name: 'app_admin_update_products')]
    public function updateProducts(PromoRepository $promoRepository, ProductsRepository $productsRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $products = $productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $reduction = floatval($promo->getReduction());
                $originalPrice = floatval($product->getPrice());
                $priceAfterPromo = $originalPrice * (1 - $reduction / 100);

                $promo->setPriceafterpromo($priceAfterPromo);

                $entityManager->persist($promo);

                $promotions[] = $promo;
            }
        }

        $entityManager->flush();

        return $this->render('admin/adminproducts/edit.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'promotions' => $promotions
        ]);
    }

    #[Route('/adminformedit/{id}', name: 'app_admin_form_edit')]
    public function editProductFormFront(Products $product, Request $request, EntityManagerInterface $entityManager): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        $productForm = $this->createForm(ProductAdminType::class, $product);

        $productForm->handleRequest($request);

        if ($productForm->isSubmitted() && $productForm->isValid()) {
            $product = $productForm->getData();

            $imageFile = $productForm['images']->getData();
            if ($imageFile) {
                $newFilename = uniqid() . '.' . $imageFile->guessExtension();
                try {
                    $imageFile->move(
                        $this->getParameter('images_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }
                $product->setImages($newFilename);
            }

            $entityManager->flush();

            return $this->redirectToRoute('admin_products_list');
        }

        return $this->render('admin/adminproducts/formedit.html.twig', [
            'product' => $product,
            'productForm' => $productForm->createView(),
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }


    #[Route('/compte/admin', name: 'app_admin_compte')]
    public function adminCompte(Request $request): Response
    {
        $user = $this->getUser();
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        if ($user instanceof User) {
            $userId = $user->getId();
        } else {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'userId' => $userId,
            'user' => $user,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('edit/admin/profile', name: 'edit_admin_profile')]
    public function modifierProfilAdminFlush(Request $request, EntityManagerInterface $entityManager, PanierRepository $panierRepository): Response
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

        return new RedirectResponse($this->generateUrl('compte_admin'));
    }

    #[Route('/admin/add_quantity/{productId}', name: 'admin_add_quantity')]
    public function ajoutQuantiteProduitAdmin(ProductsRepository $productsRepository, Request $request, $productId): Response
    {

        $product = $productsRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $productId . ' n\'existe pas.');
        }

        $quantityToAdd = $request->request->get('quantity');

        $newQuantity = $product->getQuantity() + $quantityToAdd;
        $product->setQuantity($newQuantity);

        $this->entityManager->flush();

        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/admin/remove_quantity/{productId}', name: 'admin_remove_quantity')]
    public function enleverQuantiteProduitAdmin(ProductsRepository $productsRepository,  Request $request, $productId): Response
    {
        $product = $productsRepository->find($productId);

        if (!$product) {
            throw $this->createNotFoundException('Le produit avec l\'ID ' . $productId . ' n\'existe pas.');
        }

        $quantityToRemove = $request->request->get('quantity');

        if ($quantityToRemove <= $product->getQuantity()) {
            $newQuantity = $product->getQuantity() - $quantityToRemove;
            $product->setQuantity($newQuantity);

            $this->entityManager->flush();
        } else {
            throw new \Exception('La quantité à retirer est supérieure à la quantité disponible.');
        }

        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/compte/admin', name: 'compte_admin')]
    public function modifierProfilAdmin(Request $request)
    {

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/search/admin', name: 'search_admin')]
    public function rechercherUnProduitAdmin(Request $request, EntityManagerInterface $entityManager, ProductsRepository $productsRepository, PromoRepository $promoRepository)
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

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $motrecherche = $request->request->get('motrecherche');

        $products = $productsRepository->createQueryBuilder('p')
            ->where('p.name LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/adminproducts/search.html.twig', [
            'products' => $products,
            'promotions' => $promotions,
            'motrecherche' => $motrecherche,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
        ]);
    }

    #[Route('/admin/adminproducts/categorie/{category}', name: 'admin_category_products')]
    public function showCategoryProductsAdmin($category, Request $request, EntityManagerInterface $entityManager, ProductsRepository $productsRepository, PromoRepository $promoRepository): Response
    {
        $products = $productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
            }
        }

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $products = $productsRepository->findBy(['category' => $category]);

        return $this->render('admin/adminproducts/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'user_id' => $userId,
            'promotions' => $promotions,
        ]);
    }
}
