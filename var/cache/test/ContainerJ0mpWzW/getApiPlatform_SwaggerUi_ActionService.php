<?php

namespace ContainerJ0mpWzW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_ActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'api_platform.swagger_ui.action' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'SwaggerUi'.\DIRECTORY_SEPARATOR.'SwaggerUiAction.php';

        return $container->services['api_platform.swagger_ui.action'] = new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiAction(($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container)), ($container->privates['twig'] ?? self::getTwigService($container)), ($container->services['router'] ?? self::getRouterService($container)), ($container->privates['serializer'] ?? self::getSerializerService($container)), ($container->privates['lexik_jwt_authentication.api_platform.openapi.factory'] ?? self::getLexikJwtAuthentication_ApiPlatform_Openapi_FactoryService($container)), ($container->privates['api_platform.openapi.options'] ?? self::getApiPlatform_Openapi_OptionsService($container)), ($container->privates['api_platform.swagger_ui.context'] ?? $container->load('getApiPlatform_SwaggerUi_ContextService')), $container->parameters['api_platform.docs_formats'], '', '', false);
    }
}
