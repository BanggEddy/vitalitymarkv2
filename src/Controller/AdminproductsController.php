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
use App\Entity\User;
use App\Form\ProductSearchType;
use App\Form\ProductAdminType;
use App\Repository\PromoRepository;
use Psr\Log\LoggerInterface;
use App\Service\ProductCategorie;
use App\Service\PromotionService;
use App\Service\UpdatePriceApresPromo;

class AdminproductsController extends AbstractController
{
    private $entityManager;
    private $filesystem;
    private $productCategorie;
    private $promotionService;
    private $updatePriceApresPromo;

    public function __construct(UpdatePriceApresPromo $updatePriceApresPromo, PromotionService $promotionService, ProductCategorie $productCategorie, EntityManagerInterface $entityManager, Filesystem $filesystem)
    {
        $this->entityManager = $entityManager;
        $this->filesystem = $filesystem;
        $this->productCategorie = $productCategorie;
        $this->promotionService = $promotionService;
        $this->updatePriceApresPromo = $updatePriceApresPromo;
    }

    #[Route('/adminproducts', name: 'adminproducts')]
    public function index(ProductsRepository $productsRepository, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $products = $productsRepository->findAll();
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        return $this->render('admin/adminproducts/index.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'promotions' => $promotions,
        ]);
    }

    #[Route('/adminajouterproducts', name: 'app_admin_add_products')]
    public function ajoutProductPage(Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $productForm = $this->createForm(ProductAdminType::class);
        $productForm->handleRequest($request);

        return $this->render('admin/adminproducts/new.html.twig', [
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'productForm' => $productForm->createView(),
        ]);
    }

    #[Route('/product/create', name: 'app_create_product')]
    public function createProduit(Request $request, LoggerInterface $logger, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
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

                return $this->redirectToRoute('adminproducts');
            }
        }

        return $this->render('admin/adminproducts/new.html.twig', [
            'productForm' => $productForm->createView(),
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #supp page produit
    #[Route('/admindeleteproducts', name: 'app_admin_delete_products')]
    public function deleteProducts(ProductsRepository $productsRepository, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $products = $productsRepository->findAll();
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        $products = $productsRepository->findAll();

        return $this->render('admin/adminproducts/delete.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'promotions' => $promotions,
        ]);
    }

    #supp request produit
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

        $panierItems = $product->getPanierItems();
        foreach ($panierItems as $panierItem) {
            $entityManager->remove($panierItem);
        }

        $entityManager->remove($product);
        $entityManager->flush();

        return $this->redirectToRoute('app_admin_delete_products');
    }

    #utilisation d'un service "updatepricearpespromo" pour update le prix avec la réduction
    #[Route('/adminupdateproducts', name: 'app_admin_update_products')]
    public function updateProducts(PromoRepository $promoRepository, ProductsRepository $productsRepository, Request $request, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $products = $productsRepository->findAll();
        $promotions = [];

        foreach ($products as $product) {
            $this->updatePriceApresPromo->updatePriceAfterPromo($product);

            $promo = $promoRepository->findOneBy(['idproduct' => $product->getId()]);
            if ($promo) {
                $promotions[] = $promo;
                $entityManager->persist($promo);
            }
        }

        $entityManager->flush();

        return $this->render('admin/adminproducts/edit.html.twig', [
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'promotions' => $promotions
        ]);
    }

    #[Route('/adminformedit/{id}', name: 'admin_form_edit')]
    public function editProductFormFront(Products $product, Request $request, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

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
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/compte/admin', name: 'app_admin_compte')]
    public function adminCompte(Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $user = $this->getUser();

        if ($user instanceof User) {
            $userId = $user->getId();
        } else {
            return $this->redirectToRoute('app_login');
        }

        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'userId' => $userId,
            'user' => $user,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('edit/admin/profile', name: 'edit_admin_profile')]
    public function modifierProfilAdminFlush(Request $request, EntityManagerInterface $entityManager): Response
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

    #[Route('/admin/add_quantity/{productId}', name: 'add_quantity')]
    public function ajoutQuantiteProduitAdmin(ProductsRepository $productsRepository, Request $request, $productId): Response
    {

        $product = $productsRepository->find($productId);

        $quantityToAdd = $request->request->get('quantity');

        $newQuantity = $product->getQuantity() + $quantityToAdd;
        $product->setQuantity($newQuantity);

        $this->entityManager->flush();

        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/admin/remove_quantity/{productId}', name: 'remove_quantity')]
    public function enleverQuantiteProduitAdmin(ProductsRepository $productsRepository,  Request $request, $productId): Response
    {
        $product = $productsRepository->find($productId);

        $quantityToRemove = $request->request->get('quantity');

        if ($quantityToRemove <= $product->getQuantity()) {
            $newQuantity = $product->getQuantity() - $quantityToRemove;
            $product->setQuantity($newQuantity);

            $this->entityManager->flush();
        }

        return $this->redirectToRoute('admin_products_list');
    }

    #[Route('/compte/admin', name: 'compte_admin')]
    public function modifierProfilAdmin(Request $request)
    {

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        return $this->render('admin/adminproducts/compteadmin.html.twig', [
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/search/admin', name: 'search_admin')]
    public function rechercherUnProduitAdmin(Request $request, ProductsRepository $productsRepository)
    {
        $products = $productsRepository->findAll();
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

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

        return $this->render('admin/adminproducts/search.html.twig', [
            'products' => $products,
            'promotions' => $promotions,
            'motrecherche' => $motrecherche,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/admin/adminproducts/categorie/{category}', name: 'admin_category_products')]
    public function showCategoryProductsAdmin($category, Request $request, ProductsRepository $productsRepository): Response
    {
        $products = $productsRepository->findAll();
        $promotions = $this->promotionService->getPromotionsPourProducts($products);

        $user = $this->getUser();
        $userId = $user instanceof User ? $user->getId() : null;

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $utiliserServiceRedirection = $this->productCategorie->barreCategoryChercher($formRechercheCategory, $request);

        if ($utiliserServiceRedirection) {
            return $this->redirect($utiliserServiceRedirection);
        }

        $products = $productsRepository->findBy(['category' => $category]);

        return $this->render('admin/adminproducts/categorie.html.twig', [
            'category' => $category,
            'products' => $products,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'user_id' => $userId,
            'promotions' => $promotions,
        ]);
    }
}
