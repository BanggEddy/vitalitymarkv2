<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_Documentation_Provider_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.swagger_ui.documentation.provider.inner' shared service.
     *
     * @return \ApiPlatform\State\Provider\ReadProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.swagger_ui.documentation.provider.inner'] = new \ApiPlatform\State\Provider\ReadProvider(($container->privates['api_platform.state_provider.locator'] ?? self::getApiPlatform_StateProvider_LocatorService($container)), ($container->privates['api_platform.openapi.serializer_context_builder'] ?? self::getApiPlatform_Openapi_SerializerContextBuilderService($container)));
    }
}
