<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_JsonLogin_LoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.json_login.login' shared service.
     *
     * @return \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'InteractiveAuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'JsonLoginAuthenticator.php';

        $a = ($container->privates['security.authentication.success_handler.login.json_login'] ?? $container->load('getSecurity_Authentication_SuccessHandler_Login_JsonLoginService'));

        if (isset($container->privates['security.authenticator.json_login.login'])) {
            return $container->privates['security.authenticator.json_login.login'];
        }
        $b = ($container->privates['security.authentication.failure_handler.login.json_login'] ?? $container->load('getSecurity_Authentication_FailureHandler_Login_JsonLoginService'));

        if (isset($container->privates['security.authenticator.json_login.login'])) {
            return $container->privates['security.authenticator.json_login.login'];
        }

        $container->privates['security.authenticator.json_login.login'] = $instance = new \Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator(($container->privates['security.http_utils'] ?? $container->load('getSecurity_HttpUtilsService')), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), $a, $b, ['check_path' => '/api/login_check', 'use_forward' => false, 'require_previous_session' => false, 'login_path' => '/login', 'username_path' => 'username', 'password_path' => 'password'], ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)));

        if ($container->has('translator')) {
            $instance->setTranslator(($container->services['translator'] ?? self::getTranslatorService($container)));
        }

        return $instance;
    }
}
