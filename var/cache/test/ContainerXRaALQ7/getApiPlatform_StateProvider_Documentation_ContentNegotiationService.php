<?php

namespace ContainerXRaALQ7;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProvider_Documentation_ContentNegotiationService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_provider.documentation.content_negotiation' shared service.
     *
     * @return \ApiPlatform\State\Provider\ContentNegotiationProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['api_platform.state_provider.documentation.content_negotiation'] = new \ApiPlatform\State\Provider\ContentNegotiationProvider(($container->privates['api_platform.swagger_ui.documentation.provider'] ?? $container->load('getApiPlatform_SwaggerUi_Documentation_ProviderService')), ($container->privates['api_platform.negotiator'] ??= new \Negotiation\Negotiator()), $container->parameters['api_platform.formats'], $container->parameters['api_platform.error_formats']);
    }
}
