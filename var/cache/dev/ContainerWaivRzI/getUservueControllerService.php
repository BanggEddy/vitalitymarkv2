<?php

namespace ContainerWaivRzI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUservueControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\UservueController' shared autowired service.
     *
     * @return \App\Controller\UservueController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'UservueController.php';

        $container->services['App\\Controller\\UservueController'] = $instance = new \App\Controller\UservueController(($container->privates['App\\Service\\PromotionService'] ?? $container->load('getPromotionServiceService')), ($container->privates['App\\Service\\ProductCategorie'] ?? $container->load('getProductCategorieService')), ($container->privates['security.csrf.token_manager'] ?? $container->load('getSecurity_Csrf_TokenManagerService')), ($container->services['doctrine.orm.default_entity_manager'] ?? self::getDoctrine_Orm_DefaultEntityManagerService($container)), ($container->privates['App\\Service\\PanierUser'] ?? $container->load('getPanierUserService')));

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\UservueController', $container));

        return $instance;
    }
}
