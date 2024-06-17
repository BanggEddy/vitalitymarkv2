<?php

namespace ContainerJ0mpWzW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProcessor_Documentation_WriteService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_processor.documentation.write' shared service.
     *
     * @return \ApiPlatform\State\Processor\WriteProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'WriteProcessor.php';

        return $container->privates['api_platform.state_processor.documentation.write'] = new \ApiPlatform\State\Processor\WriteProcessor(($container->privates['api_platform.state_processor.documentation.serialize'] ?? $container->load('getApiPlatform_StateProcessor_Documentation_SerializeService')), ($container->privates['api_platform.state_processor.locator'] ?? $container->load('getApiPlatform_StateProcessor_LocatorService')));
    }
}
