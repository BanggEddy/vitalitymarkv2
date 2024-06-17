<?php

namespace ContainerGMAUi8G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Validator_State_ErrorProviderService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'api_platform.validator.state.error_provider' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\State\ErrorProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'State'.\DIRECTORY_SEPARATOR.'ErrorProvider.php';

        return $container->privates['api_platform.validator.state.error_provider'] = new \ApiPlatform\Symfony\Validator\State\ErrorProvider();
    }
}
