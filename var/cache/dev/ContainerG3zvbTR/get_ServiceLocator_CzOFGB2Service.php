<?php

namespace ContainerG3zvbTR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CzOFGB2Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.czOFGB2' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.czOFGB2'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'productsRepository' => ['privates', 'App\\Repository\\ProductsRepository', 'getProductsRepositoryService', true],
        ], [
            'productsRepository' => 'App\\Repository\\ProductsRepository',
        ]);
    }
}
