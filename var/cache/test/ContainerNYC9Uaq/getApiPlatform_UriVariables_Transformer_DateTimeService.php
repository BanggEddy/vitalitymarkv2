<?php

namespace ContainerNYC9Uaq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_UriVariables_Transformer_DateTimeService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.uri_variables.transformer.date_time' shared service.
     *
     * @return \ApiPlatform\Api\UriVariableTransformer\DateTimeUriVariableTransformer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'UriVariableTransformerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Api'.\DIRECTORY_SEPARATOR.'UriVariableTransformer'.\DIRECTORY_SEPARATOR.'DateTimeUriVariableTransformer.php';

        return $container->privates['api_platform.uri_variables.transformer.date_time'] = new \ApiPlatform\Api\UriVariableTransformer\DateTimeUriVariableTransformer();
    }
}
