<?php

namespace App\Controller;

use App\Entity\Coupon;
use App\Form\CouponType;
use App\Repository\CouponRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\CouponAllType;
use App\Form\ProductSearchType;
use Symfony\Component\HttpFoundation\RedirectResponse;

#[Route('/coupon')]
class CouponController extends AbstractController
{
    #[Route('/', name: 'app_coupon_index', methods: ['GET'])]
    public function index(CouponRepository $couponRepository, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $motrecherche = $request->query->get('motrecherche');

        $coupons = $couponRepository->createQueryBuilder('c')
            ->where('c.id LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();


        return $this->render('admin/coupon/index.html.twig', [
            'coupons' => $coupons,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/new', name: 'app_coupon_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coupon = new Coupon();
        $form = $this->createForm(CouponType::class, $coupon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coupon);
            $entityManager->flush();

            return $this->redirectToRoute('app_coupon_index', [], Response::HTTP_SEE_OTHER);
        }

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/coupon/new.html.twig', [
            'coupon' => $coupon,
            'form' => $form,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_coupon_show', methods: ['GET'])]
    public function show(Coupon $coupon, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/coupon/show.html.twig', [
            'coupon' => $coupon,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_coupon_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Coupon $coupon, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(CouponType::class, $coupon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_coupon_index', [], Response::HTTP_SEE_OTHER);
        }

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/coupon/edit.html.twig', [
            'coupon' => $coupon,
            'form' => $form,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_coupon_delete', methods: ['POST'])]
    public function delete(Request $request, Coupon $coupon, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $coupon->getId(), $request->request->get('_token'))) {
            $entityManager->remove($coupon);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_coupon_index', [], Response::HTTP_SEE_OTHER);
    }

    #[Route("/admin/loyalty_card/new", name: "loyalty_card_new")]
    public function newCoupon(Request $request, EntityManagerInterface $entityManager): Response
    {
        $coupon = new Coupon();
        $form = $this->createForm(CouponAllType::class, $coupon);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($coupon);
            $entityManager->flush();

            return $this->redirectToRoute('app_coupon_index');
        }

        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/coupon/newtype.html.twig', [
            'form' => $form->createView(),
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }
}
