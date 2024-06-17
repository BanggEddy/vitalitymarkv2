<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_StateProcessor_AddLinkHeaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.state_processor.add_link_header' shared service.
     *
     * @return \ApiPlatform\State\Processor\AddLinkHeaderProcessor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'Processor'.\DIRECTORY_SEPARATOR.'AddLinkHeaderProcessor.php';

        return $container->privates['api_platform.state_processor.add_link_header'] = new \ApiPlatform\State\Processor\AddLinkHeaderProcessor(($container->privates['api_platform.hydra.processor.link'] ?? $container->load('getApiPlatform_Hydra_Processor_LinkService')));
    }
}
