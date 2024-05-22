<?php

namespace ContainerNYC9Uaq;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Authenticator_RememberMeSignatureHasher_MainService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.authenticator.remember_me_signature_hasher.main' shared service.
     *
     * @return \Symfony\Component\Security\Core\Signature\SignatureHasher
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Signature'.\DIRECTORY_SEPARATOR.'SignatureHasher.php';

        return $container->privates['security.authenticator.remember_me_signature_hasher.main'] = new \Symfony\Component\Security\Core\Signature\SignatureHasher(($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ['password'], $container->getEnv('APP_SECRET'), NULL, NULL);
    }
}
