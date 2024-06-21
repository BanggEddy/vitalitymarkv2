<?php

namespace App\Service;

use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\Routing\RouterInterface;

class VerifIfTokenExiste
{
    private $security;
    private $router;

    public function __construct(Security $security, RouterInterface $router)
    {
        $this->security = $security;
        $this->router = $router;
    }

    public function RedirectToAdminOuUser(): ?string
    {
        $user = $this->security->getUser();

        if ($user) {
            if ($this->security->isGranted('ROLE_ADMIN')) {
                return $this->router->generate('adminproducts');
            } elseif ($this->security->isGranted('ROLE_USER')) {
                return $this->router->generate('uservue');
            }
        }

        return null;
    }
}
