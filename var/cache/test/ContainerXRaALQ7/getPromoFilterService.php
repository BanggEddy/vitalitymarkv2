<?php

namespace ContainerXRaALQ7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromoFilterService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\PromoFilter' shared autowired service.
     *
     * @return \App\Service\PromoFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PromoFilter.php';

        return $container->privates['App\\Service\\PromoFilter'] = new \App\Service\PromoFilter();
    }
}