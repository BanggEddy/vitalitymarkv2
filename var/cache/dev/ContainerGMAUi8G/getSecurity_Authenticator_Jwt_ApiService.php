<?php

namespace ContainerGMAUi8G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_Jwt_ApiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'security.authenticator.jwt.api' shared service.
     *
     * @return \Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AuthenticatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'AbstractAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-http'.\DIRECTORY_SEPARATOR.'EntryPoint'.\DIRECTORY_SEPARATOR.'AuthenticationEntryPointInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'Security'.\DIRECTORY_SEPARATOR.'Authenticator'.\DIRECTORY_SEPARATOR.'JWTAuthenticator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'TokenExtractor'.\DIRECTORY_SEPARATOR.'TokenExtractorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'TokenExtractor'.\DIRECTORY_SEPARATOR.'ChainTokenExtractor.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'lexik'.\DIRECTORY_SEPARATOR.'jwt-authentication-bundle'.\DIRECTORY_SEPARATOR.'TokenExtractor'.\DIRECTORY_SEPARATOR.'AuthorizationHeaderTokenExtractor.php';

        $a = ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'));

        if (isset($container->privates['security.authenticator.jwt.api'])) {
            return $container->privates['security.authenticator.jwt.api'];
        }
        $b = ($container->services['event_dispatcher'] ?? self::getEventDispatcherService($container));

        if (isset($container->privates['security.authenticator.jwt.api'])) {
            return $container->privates['security.authenticator.jwt.api'];
        }

        return $container->privates['security.authenticator.jwt.api'] = new \Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator($a, $b, new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor([new \Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor('Bearer', 'Authorization')]), ($container->privates['security.user.provider.concrete.app_user_provider'] ?? $container->load('getSecurity_User_Provider_Concrete_AppUserProviderService')), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
