<?php

namespace ContainerG3zvbTR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLoyaltyCardService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\LoyaltyCard' shared autowired service.
     *
     * @return \App\Entity\LoyaltyCard
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'LoyaltyCard.php';

        return $container->privates['App\\Entity\\LoyaltyCard'] = new \App\Entity\LoyaltyCard();
    }
}
