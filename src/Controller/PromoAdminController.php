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
    #[Route('/', name: 'app_promo_admin_index')]
    public function index(PromoRepository $promoRepository, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        $motrecherche = $request->query->get('motrecherche');

        $recherchepromo = $promoRepository->createQueryBuilder('u')
            ->where('u.id LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/promo_admin/index.html.twig', [
            'promos' => $recherchepromo,
            'barreRechercheCategory' => $formRechercheCategory,
        ]);
    }

    #[Route('/new', name: 'app_promo_admin_new')]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);
        if ($formRechercheCategory->isSubmitted() && $$formRechercheCategory->isValid()) {
            $category = $formRechercheCategorym->getData()['category'];

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
            'barreRechercheCategory' => $formRechercheCategory,
        ]);
    }


    #[Route('/{id}', name: 'app_promo_admin_show', methods: ['GET'])]
    public function show(Promo $promo, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);
        if ($formRechercheCategory->isSubmitted() && $$formRechercheCategory->isValid()) {
            $category = $formRechercheCategorym->getData()['category'];

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
            'barreRechercheCategory' => $formRechercheCategory,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_promo_admin_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Promo $promo, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);
        if ($formRechercheCategory->isSubmitted() && $$formRechercheCategory->isValid()) {
            $category = $formRechercheCategorym->getData()['category'];

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
            'barreRechercheCategory' => $formRechercheCategory->createView(),
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
