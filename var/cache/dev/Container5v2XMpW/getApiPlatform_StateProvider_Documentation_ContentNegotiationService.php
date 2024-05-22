<?php

namespace Container5v2XMpW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_Documentation_ContentNegotiationService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.documentation.content_negotiation' shared service.
     *
     * @return \ApiPlatform\State\Provider\ContentNegotiationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.state_provider.documentation.content_negotiation'] = new \ApiPlatform\State\Provider\ContentNegotiationProvider(new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiProvider(new \ApiPlatform\State\Provider\ReadProvider(($container->privates['api_platform.state_provider.locator'] ?? self::getApiPlatform_StateProvider_LocatorService($container)), ($container->privates['api_platform.serializer.context_builder.filter'] ?? self::getApiPlatform_Serializer_ContextBuilder_FilterService($container))), ($container->privates['lexik_jwt_authentication.api_platform.openapi.factory'] ?? self::getLexikJwtAuthentication_ApiPlatform_Openapi_FactoryService($container))), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.formats'], $container->parameters['api_platform.error_formats']);
    }
}
