<?php

namespace ContainerGMAUi8G;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVictorPrdhRecaptchaBundle_RecaptchaValidatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'victor_prdh_recaptcha_bundle.recaptcha_validator' shared autowired service.
     *
     * @return \VictorPrdh\RecaptchaBundle\Validator\Constraints\IsValidCaptchaValidator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'validator'.\DIRECTORY_SEPARATOR.'ConstraintValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'victor-prdh'.\DIRECTORY_SEPARATOR.'recaptcha-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Constraints'.\DIRECTORY_SEPARATOR.'IsValidCaptchaValidator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'google'.\DIRECTORY_SEPARATOR.'recaptcha'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ReCaptcha'.\DIRECTORY_SEPARATOR.'ReCaptcha.php';

        return $container->services['victor_prdh_recaptcha_bundle.recaptcha_validator'] = new \VictorPrdh\RecaptchaBundle\Validator\Constraints\IsValidCaptchaValidator(($container->services['victor_prdh.recaptcha'] ??= new \ReCaptcha\ReCaptcha($container->getEnv('GOOGLE_RECAPTCHA_SECRET_KEY'))), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->services['translator'] ?? self::getTranslatorService($container)));
    }
}
