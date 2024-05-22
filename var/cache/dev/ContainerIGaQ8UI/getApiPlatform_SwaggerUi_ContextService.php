<?php

namespace ContainerIGaQ8UI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_SwaggerUi_ContextService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.swagger_ui.context' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Bundle'.\DIRECTORY_SEPARATOR.'SwaggerUi'.\DIRECTORY_SEPARATOR.'SwaggerUiContext.php';

        return $container->privates['api_platform.swagger_ui.context'] = new \ApiPlatform\Symfony\Bundle\SwaggerUi\SwaggerUiContext(true, true, true, false, false, false, NULL, []);
    }
}
