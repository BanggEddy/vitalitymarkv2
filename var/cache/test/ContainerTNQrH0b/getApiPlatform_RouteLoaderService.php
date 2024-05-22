<?php

namespace ContainerTNQrH0b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_RouteLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.route_loader' shared service.
     *
     * @return \ApiPlatform\Symfony\Routing\ApiLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'Loader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Routing'.\DIRECTORY_SEPARATOR.'ApiLoader.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->privates['api_platform.route_loader'])) {
            return $container->privates['api_platform.route_loader'];
        }

        return $container->privates['api_platform.route_loader'] = new \ApiPlatform\Symfony\Routing\ApiLoader(($container->services['kernel'] ?? $container->get('kernel', 1)), ($container->privates['api_platform.metadata.resource.name_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_NameCollectionFactory_CachedService($container)), $a, $container, $container->parameters['api_platform.formats'], $container->parameters['api_platform.resource_class_directories'], false, true, true, false, false, NULL);
    }
}
