<?php

namespace ContainerJLCQ4og;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityUserApiPlatformDoctrineOrmFilterSearchFilterService extends App_KernelPantherDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_user_api_platform_doctrine_orm_filter_search_filter' shared autowired service.
     *
     * @return \ApiPlatform\Doctrine\Orm\Filter\SearchFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'FilterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'FilterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'PropertyAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'AbstractFilter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'SearchFilterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Common'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'SearchFilterTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'Filter'.\DIRECTORY_SEPARATOR.'SearchFilter.php';

        $a = ($container->privates['api_platform.symfony.iri_converter'] ?? self::getApiPlatform_Symfony_IriConverterService($container));

        if (isset($container->privates['annotated_app_entity_user_api_platform_doctrine_orm_filter_search_filter'])) {
            return $container->privates['annotated_app_entity_user_api_platform_doctrine_orm_filter_search_filter'];
        }
        $b = ($container->privates['api_platform.api.identifiers_extractor'] ?? self::getApiPlatform_Api_IdentifiersExtractorService($container));

        if (isset($container->privates['annotated_app_entity_user_api_platform_doctrine_orm_filter_search_filter'])) {
            return $container->privates['annotated_app_entity_user_api_platform_doctrine_orm_filter_search_filter'];
        }

        return $container->privates['annotated_app_entity_user_api_platform_doctrine_orm_filter_search_filter'] = new \ApiPlatform\Doctrine\Orm\Filter\SearchFilter(($container->services['doctrine'] ?? self::getDoctrineService($container)), $a, ($container->privates['property_accessor'] ?? self::getPropertyAccessorService($container)), ($container->privates['logger'] ?? self::getLoggerService($container)), ['email' => 'exact'], $b, ($container->privates['serializer.name_converter.metadata_aware'] ?? self::getSerializer_NameConverter_MetadataAwareService($container)));
    }
}
