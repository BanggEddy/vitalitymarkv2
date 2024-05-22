<?php

namespace ContainerIGaQ8UI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PXnaH3BService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pXnaH3B' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pXnaH3B'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
            'promoRepository' => ['privates', 'App\\Repository\\PromoRepository', 'getPromoRepositoryService', true],
            'urlGenerator' => ['services', 'router', 'getRouterService', false],
        ], [
            'entityManager' => '?',
            'productsRepository' => 'App\\Repository\\ProductsRepository',
            'promoRepository' => 'App\\Repository\\PromoRepository',
            'urlGenerator' => '?',
        ]);
    }
}
