<?php

namespace ContainerDmneyma;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_Documentation_ProviderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.swagger_ui.documentation.provider' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.swagger_ui.documentation.provider'] = new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiProvider(($container->privates['api_platform.swagger_ui.documentation.provider.inner'] ?? $container->load('getApiPlatform_SwaggerUi_Documentation_Provider_InnerService')), ($container->privates['api_platform.openapi.factory'] ?? self::getApiPlatform_Openapi_FactoryService($container)));
    }
}
