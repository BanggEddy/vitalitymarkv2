<?php

namespace ContainerTNQrH0b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Firewall_Authenticator_Login_InnerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'debug.security.firewall.authenticator.login.inner' shared service.
     *
     * @return \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Firewall'.\DIRECTORY_SEPARATOR.'AuthenticatorManagerListener.php';

        $a = ($container->privates['security.authenticator.manager.login'] ?? $container->load('getSecurity_Authenticator_Manager_LoginService'));

        if (isset($container->privates['debug.security.firewall.authenticator.login.inner'])) {
            return $container->privates['debug.security.firewall.authenticator.login.inner'];
        }

        return $container->privates['debug.security.firewall.authenticator.login.inner'] = new \Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener($a);
    }
}
