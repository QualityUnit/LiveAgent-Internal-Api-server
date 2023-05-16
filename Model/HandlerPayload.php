<?php
/**
 * HandlerPayload
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\Model
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

namespace Qu\LaInternalApiServer\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the HandlerPayload model.
 *
 * @package Qu\LaInternalApiServer\Model
 * @author  OpenAPI Generator team
 */

class HandlerPayload 
{
        /**
     * @var string|null
     * @SerializedName("id")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $id = null;

    /**
     * @var string|null
     * @SerializedName("event")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $event = null;

    /**
     * @var string|null
     * @SerializedName("payload")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $payload = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->event = $data['event'] ?? null;
        $this->payload = $data['payload'] ?? null;
    }

    /**
     * Gets id.
     *
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param string|null $id
     *
     * @return $this
     */
    public function setId(?string $id = null): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets event.
     *
     * @return string|null
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * Sets event.
     *
     * @param string|null $event
     *
     * @return $this
     */
    public function setEvent(?string $event = null): self
    {
        $this->event = $event;

        return $this;
    }

    /**
     * Gets payload.
     *
     * @return string|null
     */
    public function getPayload(): ?string
    {
        return $this->payload;
    }

    /**
     * Sets payload.
     *
     * @param string|null $payload
     *
     * @return $this
     */
    public function setPayload(?string $payload = null): self
    {
        $this->payload = $payload;

        return $this;
    }
}


