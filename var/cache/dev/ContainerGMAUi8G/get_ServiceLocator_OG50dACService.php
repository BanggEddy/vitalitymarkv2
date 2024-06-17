<?php

namespace ContainerGMAUi8G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OG50dACService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.oG50dAC' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.oG50dAC'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'product' => ['privates', '.errored..service_locator.oG50dAC.App\\Entity\\Products', NULL, 'Cannot autowire service ".service_locator.oG50dAC": it needs an instance of "App\\Entity\\Products" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'product' => 'App\\Entity\\Products',
        ]);
    }
}