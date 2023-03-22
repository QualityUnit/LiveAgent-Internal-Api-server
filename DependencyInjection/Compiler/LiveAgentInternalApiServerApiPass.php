<?php
/**
 * LiveAgentInternalApiServerApiPass
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\DependencyInjection\Compiler
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * LiveAgent Async Event API
 *
 * This API is for async event communication
 *
 * The version of the OpenAPI document: 1.0.8
 * Contact: mcivan@qualityunit.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace Qu\LaInternalApiServer\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

/**
 * LiveAgentInternalApiServerApiPass Class Doc Comment
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\DependencyInjection\Compiler
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class LiveAgentInternalApiServerApiPass implements CompilerPassInterface
{

    /**
     * You can modify the container here before it is dumped to PHP code.
     *
     * @param ContainerBuilder $container
     */
    public function process(ContainerBuilder $container) {
        // always first check if the primary service is defined
        if (!$container->has('live_agent_internal_api_server.api.api_server')) {
            return;
        }

        $definition = $container->findDefinition('live_agent_internal_api_server.api.api_server');

        // find all service IDs with the live_agent_internal_api_server.api tag
        $taggedServices = $container->findTaggedServiceIds('live_agent_internal_api_server.api');

        foreach ($taggedServices as $id => $tags) {
            foreach ($tags as $tag) {
                // add the transport service to the ChainTransport service
                $definition->addMethodCall('addApiHandler', [$tag['api'], new Reference($id)]);
            }
        }
    }
}
