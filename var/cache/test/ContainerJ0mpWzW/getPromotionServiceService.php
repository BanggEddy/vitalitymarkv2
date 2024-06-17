<?php

namespace ContainerJ0mpWzW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPromotionServiceService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Service\PromotionService' shared autowired service.
     *
     * @return \App\Service\PromotionService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Service'.\DIRECTORY_SEPARATOR.'PromotionService.php';

        return $container->privates['App\\Service\\PromotionService'] = new \App\Service\PromotionService(($container->privates['App\\Repository\\PromoRepository'] ?? $container->load('getPromoRepositoryService')));
    }
}