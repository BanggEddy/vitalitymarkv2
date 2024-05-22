<?php

namespace ContainerTNQrH0b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Migrations_ConfigurationLoaderService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'doctrine.migrations.configuration_loader' shared service.
     *
     * @return \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'Migration'.\DIRECTORY_SEPARATOR.'ConfigurationLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'migrations'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Migrations'.\DIRECTORY_SEPARATOR.'Configuration'.\DIRECTORY_SEPARATOR.'Migration'.\DIRECTORY_SEPARATOR.'ExistingConfiguration.php';

        return $container->privates['doctrine.migrations.configuration_loader'] = new \Doctrine\Migrations\Configuration\Migration\ExistingConfiguration(($container->privates['doctrine.migrations.configuration'] ?? $container->load('getDoctrine_Migrations_ConfigurationService')));
    }
}
