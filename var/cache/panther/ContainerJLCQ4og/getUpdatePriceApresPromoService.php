<?php

namespace ContainerJLCQ4og;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUpdatePriceApresPromoService extends App_KernelPantherDebugContainer
{
    /**
     * Gets the private 'App\Service\UpdatePriceApresPromo' shared autowired service.
     *
     * @return \App\Service\UpdatePriceApresPromo
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'UpdatePriceApresPromo.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PromoRecupDate.php';

        return $container->privates['App\\Service\\UpdatePriceApresPromo'] = new \App\Service\UpdatePriceApresPromo(($container->privates['App\\Service\\PromoRecupDate'] ??= new \App\Service\PromoRecupDate()));
    }
}
