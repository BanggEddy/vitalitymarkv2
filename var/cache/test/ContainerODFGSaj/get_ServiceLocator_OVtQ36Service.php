<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OVtQ36Service extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.oVtQ36_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oVtQ36_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'panierUserService' => ['privates', 'App\\Service\\PanierUser', 'getPanierUserService', true],
            'promoRepository' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'panierUserService' => 'App\\Service\\PanierUser',
            'promoRepository' => 'App\\Repository\\PromoRepository',
        ]);
    }
}
