<?php

namespace ContainerG9Zgb7e;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductCategorieService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\ProductCategorie' shared autowired service.
     *
     * @return \App\Service\ProductCategorie
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'ProductCategorie.php';

        return $container->privates['App\\Service\\ProductCategorie'] = new \App\Service\ProductCategorie(($container->services['router'] ?? self::getRouterService($container)), ($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)));
    }
}
