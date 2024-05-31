<?php

namespace App\Service;

use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Security;

class ProductCategorie
{
    private $urlGenerator;
    private $security;

    public function __construct(UrlGeneratorInterface $urlGenerator)
    {
        $this->urlGenerator = $urlGenerator;
    }

    public function barreCategoryChercher(FormInterface $form, Request $request)
    {
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->get('category')->getData();
            $user = $this->security->getUser();

            if ($user) {
                $roles = $user->getRoles();

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
