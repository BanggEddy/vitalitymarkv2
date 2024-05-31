<?php

namespace Container2nQdbOr;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mcb6ZOoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.mcb6ZOo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.mcb6ZOo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'promo' => ['privates', '.errored..service_locator.mcb6ZOo.App\\Entity\\Promo', NULL, 'Cannot autowire service ".service_locator.mcb6ZOo": it needs an instance of "App\\Entity\\Promo" but this type has been excluded in "config/services.yaml".'],
        ], [
            'promo' => 'App\\Entity\\Promo',
        ]);
    }
}
