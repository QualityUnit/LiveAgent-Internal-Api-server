<?php

/**
 * EventsController
 * PHP version 8.1.1
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */

/**
 * LiveAgent Async Event API
 *
 * This API is for async event communication
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: mcivan@qualityunit.com
 * Generated by: https://github.com/openapitools/openapi-generator.git
 *
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Do not edit the class manually.
 */

namespace Qu\LaInternalApiServer\Controller;

use \Exception;
use JMS\Serializer\Exception\RuntimeException as SerializerRuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;
use Symfony\Component\Validator\Constraints as Assert;
use Qu\LaInternalApiServer\Api\EventsApiInterface;
use Qu\LaInternalApiServer\Model\Consumer;
use Qu\LaInternalApiServer\Model\HandlerPayload;

/**
 * EventsController Class Doc Comment
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\Controller
 * @author   OpenAPI Generator team
 * @link     https://github.com/openapitools/openapi-generator
 */
class EventsController extends Controller
{

    /**
     * Operation executeHandler
     *
     * Execute event handlers
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function executeHandlerAction(Request $request)
    {
        // Make sure that the client is providing something that we can consume
        $consumes = ['application/json'];
        if (!static::isContentTypeAllowed($request, $consumes)) {
            // We can't consume the content that the client is sending us
            return new Response('', 415);
        }

        // Handle authentication

        // Read out all input parameter values into variables
        $handlerPayload = $request->getContent();

        // Use the default value if no value was provided

        // Deserialize the input values that needs it
        try {
            $inputFormat = $request->getMimeType($request->getContentType());
            $handlerPayload = $this->deserialize($handlerPayload, 'Qu\LaInternalApiServer\Model\HandlerPayload', $inputFormat);
        } catch (SerializerRuntimeException $exception) {
            return $this->createBadRequestResponse($exception->getMessage());
        }

        // Validate the input values
        $asserts = [];
        $asserts[] = new Assert\Type("Qu\LaInternalApiServer\Model\HandlerPayload");
        $asserts[] = new Assert\Valid();
        $response = $this->validate($handlerPayload, $asserts);
        if ($response instanceof Response) {
            return $response;
        }


        try {
            $handler = $this->getApiHandler();


            // Make the call to the business logic
            $responseCode = 204;
            $responseHeaders = [];

            $handler->executeHandler($handlerPayload, $responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'successful operation';
                    break;
                case 501:
                    $message = 'Async event handler not configured';
                    break;
            }

            return new Response(
                '',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (\Throwable $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Operation getEventConsumers
     *
     * Get event consumer definitions
     *
     * @param Request $request The Symfony request to handle.
     * @return Response The Symfony response.
     */
    public function getEventConsumersAction(Request $request)
    {
        // Figure out what data format to return to the client
        $produces = ['application/json'];
        // Figure out what the client accepts
        $clientAccepts = $request->headers->has('Accept')?$request->headers->get('Accept'):'*/*';
        $responseFormat = $this->getOutputFormat($clientAccepts, $produces);
        if ($responseFormat === null) {
            return new Response('', 406);
        }

        // Handle authentication

        // Read out all input parameter values into variables

        // Use the default value if no value was provided

        // Validate the input values


        try {
            $handler = $this->getApiHandler();


            // Make the call to the business logic
            $responseCode = 200;
            $responseHeaders = [];

            $result = $handler->getEventConsumers($responseCode, $responseHeaders);

            // Find default response message
            $message = '';

            // Find a more specific message, if available
            switch ($responseCode) {
                case 200:
                    $message = 'successful operation';
                    break;
                case 501:
                    $message = 'Async event handler not configured';
                    break;
            }

            return new Response(
                $result !== null ?$this->serialize($result, $responseFormat):'',
                $responseCode,
                array_merge(
                    $responseHeaders,
                    [
                        'Content-Type' => $responseFormat,
                        'X-OpenAPI-Message' => $message
                    ]
                )
            );
        } catch (\Throwable $fallthrough) {
            return $this->createErrorResponse(new HttpException(500, 'An unsuspected error occurred.', $fallthrough));
        }
    }

    /**
     * Returns the handler for this API controller.
     * @return EventsApiInterface
     */
    public function getApiHandler()
    {
        return $this->apiServer->getApiHandler('events');
    }
}
