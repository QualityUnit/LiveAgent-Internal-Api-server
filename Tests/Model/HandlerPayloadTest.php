<?php
/**
 * HandlerPayloadTest
 *
 * PHP version 8.1.1
 *
 * @category Class
 * @package  Qu\LaInternalApiServer\Tests\Model
 * @author   openapi-generator contributors
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
 * Please update the test case below to test the model.
 */

namespace Qu\LaInternalApiServer\Model;

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

/**
 * HandlerPayloadTest Class Doc Comment
 *
 * @category    Class
 * @description HandlerPayload
 * @package     Qu\LaInternalApiServer\Tests\Model
 * @author      openapi-generator contributors
 * @link        https://github.com/openapitools/openapi-generator
 * @coversDefaultClass \Qu\LaInternalApiServer\Model\HandlerPayload
 */
class HandlerPayloadTest extends TestCase
{
    protected HandlerPayload|MockObject $object;

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
         $this->object = $this->getMockBuilder(HandlerPayload::class)->getMockForAbstractClass();
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * @group integration
     * @small
     */
    public function testTestClassExists(): void
    {
        $this->assertTrue(class_exists(HandlerPayload::class));
        $this->assertInstanceOf(HandlerPayload::class, $this->object);
    }

    /**
     * Test attribute "id"
     *
     * @group unit
     * @small
     */
    public function testPropertyId(): void
    {
        $this->markTestSkipped('Test for property id not implemented');
    }

    /**
     * Test attribute "event"
     *
     * @group unit
     * @small
     */
    public function testPropertyEvent(): void
    {
        $this->markTestSkipped('Test for property event not implemented');
    }

    /**
     * Test attribute "payload"
     *
     * @group unit
     * @small
     */
    public function testPropertyPayload(): void
    {
        $this->markTestSkipped('Test for property payload not implemented');
    }
}
