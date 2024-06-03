<?php

namespace App\Controller;

use App\Entity\LoyaltyCard;
use App\Form\LoyaltyCardType;
use App\Repository\LoyaltyCardRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\ProductSearchType;
use Symfony\Component\HttpFoundation\RedirectResponse;


#[Route('/loyalty/card')]
class LoyaltyCardController extends AbstractController
{
    #[Route('/', name: 'app_loyalty_card_index', methods: ['GET'])]
    public function index(LoyaltyCardRepository $loyaltyCardRepository, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $motrecherche = $request->query->get('motrecherche');

        $rechercheloyaltyCard = $loyaltyCardRepository->createQueryBuilder('c')
            ->where('c.card_number LIKE :motrecherche')
            ->setParameter('motrecherche', '%' . $motrecherche . '%')
            ->getQuery()
            ->getResult();

        return $this->render('admin/loyalty_card/index.html.twig', [
            'loyalty_cards' => $rechercheloyaltyCard,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_loyalty_card_show', methods: ['GET'])]
    public function show(LoyaltyCard $loyaltyCard, Request $request): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];

            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }
        return $this->render('admin/loyalty_card/show.html.twig', [
            'loyalty_card' => $loyaltyCard,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}/edit', name: 'app_loyalty_card_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, LoyaltyCard $loyaltyCard, EntityManagerInterface $entityManager): Response
    {
        $formRechercheCategory = $this->createForm(ProductSearchType::class);
        $formRechercheCategory->handleRequest($request);

        if ($formRechercheCategory->isSubmitted() && $formRechercheCategory->isValid()) {
            $category = $formRechercheCategory->getData()['category'];
            return new RedirectResponse($this->generateUrl('admin_category_products', ['category' => $category]));
        }

        $form = $this->createForm(LoyaltyCardType::class, $loyaltyCard);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_loyalty_card_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('admin/loyalty_card/edit.html.twig', [
            'loyalty_card' => $loyaltyCard,
            'form' => $form,
            'barreRechercheCategory' => $formRechercheCategory->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_loyalty_card_delete', methods: ['POST'])]
    public function delete(Request $request, LoyaltyCard $loyaltyCard, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $loyaltyCard->getId(), $request->request->get('_token'))) {
            $loyaltyCard->setIduser(null);

            $entityManager->remove($loyaltyCard);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_loyalty_card_index', [], Response::HTTP_SEE_OTHER);
    }
}
