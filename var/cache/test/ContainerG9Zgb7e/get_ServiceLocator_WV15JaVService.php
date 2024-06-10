<?php

namespace ContainerG9Zgb7e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WV15JaVService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.service_locator.wV15JaV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wV15JaV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'panierRepository' => ['privates', 'App\\Repository\\PanierRepository', 'getPanierRepositoryService', true],
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'panierRepository' => 'App\\Repository\\PanierRepository',
            'productsRepository' => 'App\\Repository\\ProductsRepository',
            'urlGenerator' => '?',
        ]);
    }
}