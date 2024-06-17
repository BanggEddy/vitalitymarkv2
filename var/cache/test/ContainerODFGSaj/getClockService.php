<?php

namespace ContainerODFGSaj;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getClockService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'clock' shared service.
     *
     * @return \Symfony\Component\Clock\Clock
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ClockInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'ClockInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'clock'.\DIRECTORY_SEPARATOR.'Clock.php';

        return $container->privates['clock'] = new \Symfony\Component\Clock\Clock();
    }
}
