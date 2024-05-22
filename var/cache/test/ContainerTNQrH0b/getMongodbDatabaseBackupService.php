<?php

namespace ContainerTNQrH0b;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMongodbDatabaseBackupService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'Liip\TestFixturesBundle\Services\DatabaseBackup\MongodbDatabaseBackup' shared service.
     *
     * @return \Liip\TestFixturesBundle\Services\DatabaseBackup\MongodbDatabaseBackup
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseBackup'.\DIRECTORY_SEPARATOR.'DatabaseBackupInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseBackup'.\DIRECTORY_SEPARATOR.'AbstractDatabaseBackup.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'DatabaseBackup'.\DIRECTORY_SEPARATOR.'MongodbDatabaseBackup.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'FixturesLoaderFactoryInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'liip'.\DIRECTORY_SEPARATOR.'test-fixtures-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Services'.\DIRECTORY_SEPARATOR.'MongoDBFixturesLoaderFactory.php';

        return $container->services['Liip\\TestFixturesBundle\\Services\\DatabaseBackup\\MongodbDatabaseBackup'] = new \Liip\TestFixturesBundle\Services\DatabaseBackup\MongodbDatabaseBackup($container, ($container->services['Liip\\TestFixturesBundle\\Services\\MongoDBFixturesLoaderFactory'] ??= new \Liip\TestFixturesBundle\Services\MongoDBFixturesLoaderFactory($container, NULL)));
    }
}