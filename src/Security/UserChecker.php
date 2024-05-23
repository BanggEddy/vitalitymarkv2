<?php

namespace App\Security;


use App\Entity\User as AppUser;
use Symfony\Component\Security\Core\Exception\AccountExpiredException;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use DateTimeImmutable;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }

        if ($user->getDeletedAt() !== null) {
            throw new CustomUserMessageAccountStatusException('Le compte a était supprimé');
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        if (!$user instanceof AppUser) {
            return;
        }

        $now = new DateTimeImmutable();

        if ($user->getExpiredAt() && $user->getExpiredAt() <= $now) {
            throw new CustomUserMessageAccountStatusException('Le compte est expiré, demandez à un admin pour réouvrir votre compte');
        }
    }
}
