<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_ExceptionListener_ApiService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.exception_listener.api' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\ExceptionListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Util'.\DIRECTORY_SEPARATOR.'TargetPathTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'ExceptionListener.php';

        $a = ($container->privates['security.authenticator.jwt.api'] ?? $container->load('getSecurity_Authenticator_Jwt_ApiService'));

        if (isset($container->privates['security.exception_listener.api'])) {
            return $container->privates['security.exception_listener.api'];
        }

        return $container->privates['security.exception_listener.api'] = new \Symfony\Component\Security\Http\Firewall\ExceptionListener(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['security.authentication.trust_resolver'] ??= new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver()), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), 'api', $a, NULL, NULL, ($container->privates['logger'] ?? self::getLoggerService($container)), true);
    }
}
