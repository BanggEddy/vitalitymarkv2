<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ProductSearchType;
use App\Form\UserType;
use App\Repository\ProductsRepository;
use App\Repository\PromoRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/gestion/user')]
class GestionUserController extends AbstractController
{
    #[Route('/', name: 'app_gestion_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, ProductsRepository $productsRepository, PromoRepository $promoRepository, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $motrecherche = $request->query->get('motrecherche');

        $users = $userRepository->createQueryBuilder('u')
            ->where('u.email LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/gestion_user/index.html.twig', [
            'users' => $users,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_user_show', methods: ['GET'])]
    public function show(User $user, Request $request,): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        return $this->render('admin/gestion_user/show.html.twig', [
            'user' => $user,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_gestion_user_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_gestion_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/gestion_user/edit.html.twig', [
            'user' => $user,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_gestion_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $user->getId(), $request->getPayload()->get('_token'))) {
            $entityManager->remove($user);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_gestion_user_index', [], Response::HTTP_SEE_OTHER);
    }
}
