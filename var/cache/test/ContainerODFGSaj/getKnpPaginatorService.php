<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpPaginatorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'knp_paginator' shared service.
     *
     * @return \Knp\Component\Pager\Paginator
     */
    public static function do($container, $lazyLoad = true)
    {
        if (true === $lazyLoad) {
            return $container->services['knp_paginator'] = $container->createProxy('PaginatorProxyC0436bd', static fn () => \PaginatorProxyC0436bd::createLazyProxy(static fn () => self::do($container, false)));
        }

        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'PaginatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knplabs'.\DIRECTORY_SEPARATOR.'knp-components'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Knp'.\DIRECTORY_SEPARATOR.'Component'.\DIRECTORY_SEPARATOR.'Pager'.\DIRECTORY_SEPARATOR.'Paginator.php';

        $instance = new \Knp\Component\Pager\Paginator(($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container)), ($container->privates['Knp\\Component\\Pager\\ArgumentAccess\\RequestArgumentAccess'] ?? $container->load('getRequestArgumentAccessService')));

        $instance->setDefaultPaginatorOptions(['pageParameterName' => 'page', 'sortFieldParameterName' => 'sort', 'sortDirectionParameterName' => 'direction', 'filterFieldParameterName' => 'filterField', 'filterValueParameterName' => 'filterValue', 'distinct' => true, 'pageOutOfRange' => 'ignore', 'defaultLimit' => 10]);

        return $instance;
    }
}
