<?php

namespace ContainerRtaFk1m;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DxJGkEService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.DxJ_gkE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.DxJ_gkE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'loyaltyCard' => ['privates', 'App\\Entity\\LoyaltyCard', 'getLoyaltyCardService', true],
        ], [
            'entityManager' => '?',
            'loyaltyCard' => 'App\\Entity\\LoyaltyCard',
        ]);
    }
}
