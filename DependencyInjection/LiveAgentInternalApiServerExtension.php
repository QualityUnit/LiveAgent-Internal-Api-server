<?php
/**
 * LiveAgentInternalApiServerExtension
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\DependencyInjection
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * LiveAgent Async Event API
 *
 * This API is for async event communication
 *
 * The version of the OpenAPI document: 1.0.12
 * Contact: mcivan@qualityunit.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace Qu\LaInternalApiServer\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * LiveAgentInternalApiServerExtension Class Doc Comment
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\DependencyInjection
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class LiveAgentInternalApiServerExtension extends Extension
{
    public function load(array $configs, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yaml');
    }

    public function getAlias(): string
    {
        return 'live_agent_internal_api_server';
    }
}
