<?php

namespace ContainerX2yE7NU;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Serializer_FilterParameterProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.serializer.filter_parameter_provider' shared service.
     *
     * @return \ApiPlatform\Serializer\Parameter\SerializerFilterParameterProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'ParameterProviderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Serializer'.\DIRECTORY_SEPARATOR.'Parameter'.\DIRECTORY_SEPARATOR.'SerializerFilterParameterProvider.php';

        return $container->privates['api_platform.serializer.filter_parameter_provider'] = new \ApiPlatform\Serializer\Parameter\SerializerFilterParameterProvider(($container->privates['api_platform.filter_locator'] ?? self::getApiPlatform_FilterLocatorService($container)));
    }
}
