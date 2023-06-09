<?php
/**
 * Consumer
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

namespace Qu\LaInternalApiServer\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Consumer model.
 *
 * @package Qu\LaInternalApiServer\Model
 * @author  OpenAPI Generator team
 */

class Consumer 
{
        /**
     * @var string|null
     * @SerializedName("id")
     * @Assert\Type("string")
     * @Type("string")
     */
    protected ?string $id = null;

    /**
     * @var array|null
     * @SerializedName("events")
     * @Assert\All({
     *   @Assert\Type("Qu\LaInternalApiServer\Model\Event")
     * })
     * @Type("array<Qu\LaInternalApiServer\Model\Event>")
     */
    protected ?array $events = null;

    /**
     * Constructor
     * @param array|null $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = $data['id'] ?? null;
        $this->events = $data['events'] ?? null;
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
     * Gets events.
     *
     * @return array|null
     */
    public function getEvents(): ?array
    {
        return $this->events;
    }

    /**
     * Sets events.
     *
     * @param array|null $events
     *
     * @return $this
     */
    public function setEvents(?array $events = null): self
    {
        $this->events = $events;

        return $this;
    }
}


