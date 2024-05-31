<?php

namespace App\Service;

use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use App\Form\ProductSearchType;

class BarreRechercheCategory
{
    private $formFactory;
    private $router;

    public function __construct(FormFactoryInterface $formFactory, RouterInterface $router)
    {
        $this->formFactory = $formFactory;
        $this->router = $router;
    }

    public function handleSearchForm(Request $request)
    {
        $barreDeRechercheCategorie = $this->formFactory->create(ProductSearchType::class);
        $barreDeRechercheCategorie->handleRequest($request);

        if ($barreDeRechercheCategorie->isSubmitted() && $barreDeRechercheCategorie->isValid()) {
            $category = $barreDeRechercheCategorie->get('category')->getData();
            return $this->router->generate('accueil_category_products', ['category' => $category]);
        }

        return $barreDeRechercheCategorie->createView();
    }
}
