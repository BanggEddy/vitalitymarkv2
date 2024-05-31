<?php

namespace App\Service;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class ProductCategorie
{
    private $urlGenerator;
    private $tokenStorage;

    public function __construct(UrlGeneratorInterface $urlGenerator, TokenStorageInterface $tokenStorage)
    {
        $this->urlGenerator = $urlGenerator;
        $this->tokenStorage = $tokenStorage;
    }

    public function barreCategoryChercher(FormInterface $form, Request $request)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->get('category')->getData();
            $token = $this->tokenStorage->getToken();

            if ($token && $token->getUser()) {
                $roles = $token->getUser()->getRoles();

                if (in_array('ROLE_ADMIN', $roles, true)) {
                    return $this->urlGenerator->generate('admin_category_products', ['category' => $category]);
                } elseif (in_array('ROLE_USER', $roles, true)) {
                    return $this->urlGenerator->generate('user_category_products', ['category' => $category]);
                }
            }

            return $this->urlGenerator->generate('accueil_category_products', ['category' => $category]);
        }

        return null;
    }
}
