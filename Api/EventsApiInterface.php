<?php
/**
 * EventsApiInterface
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  Qu\LaInternalApiServer
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

namespace Qu\LaInternalApiServer\Api;

use Symfony\Component\HttpFoundation\File\UploadedFile;
use Qu\LaInternalApiServer\Model\Consumer;
use Qu\LaInternalApiServer\Model\HandlerPayload;

/**
 * EventsApiInterface Interface Doc Comment
 *
 * @category Interface
 * @package  Qu\LaInternalApiServer\Api
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
interface EventsApiInterface
{

    /**
     * Sets authentication method bearerAuth
     *
     * @param string|null $value Value of the bearerAuth authentication method.
     *
     * @return void
     */
    public function setbearerAuth(?string $value): void;

    /**
     * Operation executeHandler
     *
     * Execute event handlers
     *
     * @param  HandlerPayload|null $handlerPayload   (optional)
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return void
     */
    public function executeHandler(?HandlerPayload $handlerPayload, int &$responseCode, array &$responseHeaders): void;


    /**
     * Operation getEventConsumers
     *
     * Get event consumer definitions
     *
     * @param  int     &$responseCode    The HTTP Response Code
     * @param  array   $responseHeaders  Additional HTTP headers to return with the response ()
     *
     * @return array|object|null
     */
    public function getEventConsumers(int &$responseCode, array &$responseHeaders): array|object|null;

}
