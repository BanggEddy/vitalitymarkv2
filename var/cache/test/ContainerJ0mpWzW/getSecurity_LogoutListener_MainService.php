<?php

namespace ContainerJ0mpWzW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_LogoutListener_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.logout_listener.main' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\LogoutListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'LogoutListener.php';

        return $container->privates['security.logout_listener.main'] = new \Symfony\Component\Security\Http\Firewall\LogoutListener(($container->privates['security.token_storage'] ?? self::getSecurity_TokenStorageService($container)), ($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['debug.security.event_dispatcher.main'] ?? self::getDebug_Security_EventDispatcher_MainService($container)), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'app_logout']);
    }
}
