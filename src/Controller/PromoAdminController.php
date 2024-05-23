<?php

namespace App\Controller;

use App\Entity\Promo;
use App\Form\Promo1Type;
use App\Repository\PromoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ProductSearchType;
use App\Form\PromoEditType;
use Symfony\Component\HttpFoundation\RedirectResponse;

#[Route('/promo/admin')]
class PromoAdminController extends AbstractController
{
    #[Route('/', name: 'app_promo_admin_index', methods: ['GET'])]
    public function index(PromoRepository $promoRepository, Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/promo_admin/index.html.twig', [
            'promos' => $promoRepository->findAll(),
            'barreRechercheCategory' => $barreDeRechercheCategorie,
        ]);
    }

    #[Route('/new', name: 'app_promo_admin_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);
        if ($barreDeRechercheCategorie->isSubmitted() && $$barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategoriem->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $promo = new Promo();
        $form = $this->createForm(Promo1Type::class, $promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($promo);
            $entityManager->flush();

            $product = $promo->getIdproduct();

            if ($product !== null) {
                $reduction = $promo->getReduction();
                $originalPrice = $product->getPrice();
                if ($reduction !== null && $originalPrice !== null) {
                    $reductionPercentage = floatval($reduction) / 100;
                    $newPrice = $originalPrice * (1 - $reductionPercentage);

                    $promo->setPriceafterpromo($newPrice);
                    $entityManager->persist($product);
                    $entityManager->flush();
                }
            }

            return $this->redirectToRoute('app_promo_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/promo_admin/new.html.twig', [
            'promo' => $promo,
            'form' => $form,
            'barreRechercheCategory' => $barreDeRechercheCategorie,
        ]);
    }


    #[Route('/{id}', name: 'app_promo_admin_show', methods: ['GET'])]
    public function show(Promo $promo, Request $request): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);
        if ($barreDeRechercheCategorie->isSubmitted() && $$barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategoriem->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $form = $this->createForm(ProductSearchType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        return $this->render('admin/promo_admin/show.html.twig', [
            'promo' => $promo,
            'form' => $form->createView(),
            'barreRechercheCategory' => $barreDeRechercheCategorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_promo_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promo $promo, EntityManagerInterface $entityManager): Response
    {
        $barreDeRechercheCategorie = $this->createForm(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);
        if ($barreDeRechercheCategorie->isSubmitted() && $$barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategoriem->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $form = $this->createForm(PromoEditType::class, $promo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($promo);
            $entityManager->flush();

            $product = $promo->getIdproduct();

            if ($product !== null) {
                $reduction = $promo->getReduction();
                $originalPrice = $product->getPrice();
                if ($reduction !== null && $originalPrice !== null) {
                    $reductionPercentage = floatval($reduction) / 100;
                    $newPrice = $originalPrice * (1 - $reductionPercentage);

                    $promo->setPriceafterpromo($newPrice);
                    $entityManager->persist($product);
                    $entityManager->flush();
                }
            }

            return $this->redirectToRoute('app_promo_admin_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/promo_admin/edit.html.twig', [
            'promo' => $promo,
            'barreRechercheCategory' => $barreDeRechercheCategorie->createView(),
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_promo_admin_delete', methods: ['POST'])]
    public function delete(Request $request, Promo $promo, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $promo->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($promo);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_promo_admin_index', [], Response::HTTP_SEE_OTHER);
    }
}
