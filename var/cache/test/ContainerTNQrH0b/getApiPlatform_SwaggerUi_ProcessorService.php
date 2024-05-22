<?php

namespace ContainerTNQrH0b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_ProcessorService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.swagger_ui.processor' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'SwaggerUi'.\DIRECTORY_SEPARATOR.'SwaggerUiProcessor.php';

        $a = ($container->privates['twig'] ?? self::getTwigService($container));

        if (isset($container->privates['api_platform.swagger_ui.processor'])) {
            return $container->privates['api_platform.swagger_ui.processor'];
        }

        return $container->privates['api_platform.swagger_ui.processor'] = new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiProcessor($a, ($container->services['router'] ?? self::getRouterService($container)), ($container->privates['serializer'] ?? self::getSerializerService($container)), ($container->privates['api_platform.openapi.options'] ?? self::getApiPlatform_Openapi_OptionsService($container)), ($container->privates['api_platform.swagger_ui.context'] ?? $container->load('getApiPlatform_SwaggerUi_ContextService')), $container->parameters['api_platform.docs_formats'], '', '', false);
    }
}
