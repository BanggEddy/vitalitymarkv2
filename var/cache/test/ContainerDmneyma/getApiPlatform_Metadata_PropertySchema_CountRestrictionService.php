<?php

namespace ContainerDmneyma;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Metadata_PropertySchema_CountRestrictionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'api_platform.metadata.property_schema.count_restriction' shared service.
     *
     * @return \ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCountRestriction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Property'.\DIRECTORY_SEPARATOR.'Restriction'.\DIRECTORY_SEPARATOR.'PropertySchemaRestrictionMetadataInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'api-platform'.\DIRECTORY_SEPARATOR.'core'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Symfony'.\DIRECTORY_SEPARATOR.'Validator'.\DIRECTORY_SEPARATOR.'Metadata'.\DIRECTORY_SEPARATOR.'Property'.\DIRECTORY_SEPARATOR.'Restriction'.\DIRECTORY_SEPARATOR.'PropertySchemaCountRestriction.php';

        return $container->privates['api_platform.metadata.property_schema.count_restriction'] = new \ApiPlatform\Symfony\Validator\Metadata\Property\Restriction\PropertySchemaCountRestriction();
    }
}
