<?php

namespace ContainerJ0mpWzW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getORMDatabaseToolService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'Liip\TestFixturesBundle\Services\DatabaseTools\ORMDatabaseTool' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseTools\ORMDatabaseTool
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'AbstractDatabaseTool.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseTools'.\DIRECTORY_SEPARATOR.'ORMDatabaseTool.php';

        return $container->privates['Liip\\TestFixturesBundle\\Services\\DatabaseTools\\ORMDatabaseTool'] = new \Liip\TestFixturesBundle\Services\DatabaseTools\ORMDatabaseTool($container, ($container->services['Liip\\TestFixturesBundle\\Services\\FixturesLoaderFactory'] ?? $container->load('getFixturesLoaderFactoryService')));
    }
}
