<?php

namespace ContainerIGaQ8UI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Openapi_CommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.openapi.command' shared service.
     *
     * @return \ApiPlatform\Symfony\Bundle\Command\OpenApiCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'OpenApi'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'OpenApiCommand.php';

        $container->privates['api_platform.openapi.command'] = $instance = new \ApiPlatform\Symfony\Bundle\Command\OpenApiCommand(($container->privates['lexik_jwt_authentication.api_platform.openapi.factory'] ?? self::getLexikJwtAuthentication_ApiPlatform_Openapi_FactoryService($container)), ($container->privates['debug.serializer'] ?? self::getDebug_SerializerService($container)));

        $instance->setName('api:openapi:export');

        return $instance;
    }
}
