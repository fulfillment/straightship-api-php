<?php
/**
 * ShipmentsApiTest
 * PHP version 5
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Techship API v3
 *
 * API regions:  US: <a href='https://api-us.techship.io/api/docs/ui/index'>https://api-us.techship.io/api/docs/ui/index</a>  CA: <a href='https://api-ca.techship.io/api/docs/ui/index'>https://api-ca.techship.io/api/docs/ui/index</a>
 *
 * OpenAPI spec version: V3
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.61
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the endpoint.
 */

namespace Fulfillment\StraightShip\Test\Api;

use Fulfillment\StraightShip\Client\Api\ShipmentsApi;
use Fulfillment\StraightShip\Client\Configuration;
use Fulfillment\StraightShip\Client\ApiException;
use Fulfillment\StraightShip\Client\Model\Address;
use Fulfillment\StraightShip\Client\Model\Dimensions;
use Fulfillment\StraightShip\Client\Model\InputOrder;
use Fulfillment\StraightShip\Client\Model\Order;
use Fulfillment\StraightShip\Client\Model\Package;
use Fulfillment\StraightShip\Client\Model\Routing;
use Fulfillment\StraightShip\Client\Model\ShipToAddress;
use Fulfillment\StraightShip\Client\ObjectSerializer;
use PHPUnit\Framework\TestCase;

/**
 * ShipmentsApiTest Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShipmentsApiTest extends TestCase
{

    protected ShipmentsApi $api;
    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $config = Configuration::getDefaultConfiguration()
            ->setHost(getenv('SS_API_BASE'))
            ->setApiKey('x-api-key', getenv('SS_API_KEY'))
            ->setApiKey('x-secret-key', getenv('SS_API_SECRET'));
        $this->api = new ShipmentsApi(null, $config);
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
     * Test case for callPrint
     *
     * Send shipment to printer (requires desktop client).
     *
     */
    public function testCallPrint()
    {
    }

    /**
     * Test case for cartonizeShipment
     *
     * Cartonize unpacked shipment.
     *
     */
    public function testCartonizeShipment()
    {
    }

    /**
     * Test case for countShipment
     *
     * Count.
     *
     */
    public function testCountShipment()
    {
    }

    /**
     * Test case for createShipment
     *
     * Create shipment.
     *
     */
    public function testCreateShipment()
    {
        $order = new InputOrder();
        $order->setClientCode(getenv('SS_CLIENT_CODE'));
        $order->setRouting((new Routing())
            ->setAccountId('STUDON')
            ->setServiceCode('Standard')
        );
        $order->setTransactionNumber('TEST001')
            ->setPackageDescription('some description')
            ->setShipToAddress((new ShipToAddress())
                ->setName('John Doe')
                ->setAddress1('1520 Rushwood Crescent')
                ->setCity('Windsor')
                ->setStateProvince('ON')
                ->setPostal('N9H 2B2')
                ->setCountry('CA')
                ->setPhone('0000000000')
                ->setEmail('test@fulfillment.com')
            )->setPackages([(new Package())
                ->setWeight('2.42')
                ->setDimensions(
                    (new Dimensions())
                        ->setHeight(1)
                        ->setWidth(1)
                        ->setLength(1)
                )
            ]);

        try {
            $res = $this->api->createShipment($order, 2);
            print_r($res);
        } catch (\Throwable $e) {
            echo 'Exception when calling ShipmentApi->createShipment: ', $e->getMessage(), PHP_EOL;
        }
    }

    /**
     * Test case for delete
     *
     * Delete shipment.
     *
     */
    public function testDelete()
    {
    }

    /**
     * Test case for estimateShipment
     *
     * Create shipment.
     *
     */
    public function testEstimateShipment()
    {
    }

    /**
     * Test case for getShipment
     *
     * Get shipment.
     *
     */
    public function testGetShipment()
    {
    }

    /**
     * Test case for importAndProcess
     *
     * Import shipment.
     *
     */
    public function testImportAndProcess()
    {
    }

    /**
     * Test case for listShipment
     *
     * List shipments.
     *
     */
    public function testListShipment()
    {
    }

    /**
     * Test case for trigger
     *
     * Triggers WMS callback.
     *
     */
    public function testTrigger()
    {
    }

    /**
     * Test case for updateShipment
     *
     * Update shipment.
     *
     */
    public function testUpdateShipment()
    {
    }
}
