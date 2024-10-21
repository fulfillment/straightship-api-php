<?php
/**
 * Order
 *
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
 * Do not edit the class manually.
 */

namespace Fulfillment\StraightShip\Client\Model;

use \ArrayAccess;
use Fulfillment\StraightShip\Client\ObjectSerializer;
use Fulfillment\StraightShip\Client\Model\LTLOptions;
use Fulfillment\StraightShip\Client\Model\ShippingOptions;
use Fulfillment\StraightShip\Client\Model\Customs;
use Fulfillment\StraightShip\Client\Model\Routing;
use Fulfillment\StraightShip\Client\Model\Address;
use Fulfillment\StraightShip\Client\Model\ShipToAddress;
use Fulfillment\StraightShip\Client\Model\PackageFreightCharge;
use Fulfillment\StraightShip\Client\Model\DangerousGoodsHeader;
use Fulfillment\StraightShip\Client\Model\Insurance;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'packages' => 'Fulfillment\StraightShip\Client\Model\Package[]',
        'rates' => 'Fulfillment\StraightShip\Client\Model\CarrierOrderRate[]',
        'batch_number' => 'string',
        'order_import_source' => 'string',
        'package_description' => 'string',
        'manifest_id' => 'string',
        'batch_id' => 'int',
        'client_code' => 'string',
        'transaction_number' => 'string',
        'customer_order' => 'string',
        'customer_po' => 'string',
        'customer_number' => 'string',
        'terms' => 'string',
        'status' => 'string',
        'processing_errors' => 'string',
        'instruction' => 'string',
        'currency_code' => 'string',
        'insurance' => Insurance::class,
        'custom_fields' => 'Fulfillment\StraightShip\Client\Model\CustomField[]',
        'dangerous_goods_header' => DangerousGoodsHeader::class,
        'id' => 'int',
        'processed_on' => 'string',
        'has_errors' => 'bool',
        'airway_bill_number' => 'string',
        'elapsed_carrier_api_time_process' => 'double',
        'elapsed_carrier_api_time_void_previous' => 'double',
        'freight_charge' => PackageFreightCharge::class,
        'ship_from_address' => Address::class,
        'label_from_address' => Address::class,
        'ship_to_address' => ShipToAddress::class,
        'bill_to_address' => Address::class,
        'exporter_address' => Address::class,
        'importer_address' => Address::class,
        'routing' => Routing::class,
        'customs' => Customs::class,
        'shipping_options' => ShippingOptions::class,
        'ltl_options' => LTLOptions::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'packages' => null,
        'rates' => null,
        'batch_number' => null,
        'order_import_source' => null,
        'package_description' => null,
        'manifest_id' => null,
        'batch_id' => 'int64',
        'client_code' => null,
        'transaction_number' => null,
        'customer_order' => null,
        'customer_po' => null,
        'customer_number' => null,
        'terms' => null,
        'status' => null,
        'processing_errors' => null,
        'instruction' => null,
        'currency_code' => null,
        'insurance' => null,
        'custom_fields' => null,
        'dangerous_goods_header' => null,
        'id' => 'int64',
        'processed_on' => null,
        'has_errors' => null,
        'airway_bill_number' => null,
        'elapsed_carrier_api_time_process' => 'double',
        'elapsed_carrier_api_time_void_previous' => 'double',
        'freight_charge' => null,
        'ship_from_address' => null,
        'label_from_address' => null,
        'ship_to_address' => null,
        'bill_to_address' => null,
        'exporter_address' => null,
        'importer_address' => null,
        'routing' => null,
        'customs' => null,
        'shipping_options' => null,
        'ltl_options' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'packages' => 'Packages',
        'rates' => 'Rates',
        'batch_number' => 'BatchNumber',
        'order_import_source' => 'OrderImportSource',
        'package_description' => 'PackageDescription',
        'manifest_id' => 'ManifestId',
        'batch_id' => 'BatchId',
        'client_code' => 'ClientCode',
        'transaction_number' => 'TransactionNumber',
        'customer_order' => 'CustomerOrder',
        'customer_po' => 'CustomerPO',
        'customer_number' => 'CustomerNumber',
        'terms' => 'Terms',
        'status' => 'Status',
        'processing_errors' => 'ProcessingErrors',
        'instruction' => 'Instruction',
        'currency_code' => 'CurrencyCode',
        'insurance' => 'Insurance',
        'custom_fields' => 'CustomFields',
        'dangerous_goods_header' => 'DangerousGoodsHeader',
        'id' => 'Id',
        'processed_on' => 'ProcessedOn',
        'has_errors' => 'HasErrors',
        'airway_bill_number' => 'AirwayBillNumber',
        'elapsed_carrier_api_time_process' => 'ElapsedCarrierApiTimeProcess',
        'elapsed_carrier_api_time_void_previous' => 'ElapsedCarrierApiTimeVoidPrevious',
        'freight_charge' => 'FreightCharge',
        'ship_from_address' => 'ShipFromAddress',
        'label_from_address' => 'LabelFromAddress',
        'ship_to_address' => 'ShipToAddress',
        'bill_to_address' => 'BillToAddress',
        'exporter_address' => 'ExporterAddress',
        'importer_address' => 'ImporterAddress',
        'routing' => 'Routing',
        'customs' => 'Customs',
        'shipping_options' => 'ShippingOptions',
        'ltl_options' => 'LTLOptions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'packages' => 'setPackages',
        'rates' => 'setRates',
        'batch_number' => 'setBatchNumber',
        'order_import_source' => 'setOrderImportSource',
        'package_description' => 'setPackageDescription',
        'manifest_id' => 'setManifestId',
        'batch_id' => 'setBatchId',
        'client_code' => 'setClientCode',
        'transaction_number' => 'setTransactionNumber',
        'customer_order' => 'setCustomerOrder',
        'customer_po' => 'setCustomerPo',
        'customer_number' => 'setCustomerNumber',
        'terms' => 'setTerms',
        'status' => 'setStatus',
        'processing_errors' => 'setProcessingErrors',
        'instruction' => 'setInstruction',
        'currency_code' => 'setCurrencyCode',
        'insurance' => 'setInsurance',
        'custom_fields' => 'setCustomFields',
        'dangerous_goods_header' => 'setDangerousGoodsHeader',
        'id' => 'setId',
        'processed_on' => 'setProcessedOn',
        'has_errors' => 'setHasErrors',
        'airway_bill_number' => 'setAirwayBillNumber',
        'elapsed_carrier_api_time_process' => 'setElapsedCarrierApiTimeProcess',
        'elapsed_carrier_api_time_void_previous' => 'setElapsedCarrierApiTimeVoidPrevious',
        'freight_charge' => 'setFreightCharge',
        'ship_from_address' => 'setShipFromAddress',
        'label_from_address' => 'setLabelFromAddress',
        'ship_to_address' => 'setShipToAddress',
        'bill_to_address' => 'setBillToAddress',
        'exporter_address' => 'setExporterAddress',
        'importer_address' => 'setImporterAddress',
        'routing' => 'setRouting',
        'customs' => 'setCustoms',
        'shipping_options' => 'setShippingOptions',
        'ltl_options' => 'setLtlOptions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'packages' => 'getPackages',
        'rates' => 'getRates',
        'batch_number' => 'getBatchNumber',
        'order_import_source' => 'getOrderImportSource',
        'package_description' => 'getPackageDescription',
        'manifest_id' => 'getManifestId',
        'batch_id' => 'getBatchId',
        'client_code' => 'getClientCode',
        'transaction_number' => 'getTransactionNumber',
        'customer_order' => 'getCustomerOrder',
        'customer_po' => 'getCustomerPo',
        'customer_number' => 'getCustomerNumber',
        'terms' => 'getTerms',
        'status' => 'getStatus',
        'processing_errors' => 'getProcessingErrors',
        'instruction' => 'getInstruction',
        'currency_code' => 'getCurrencyCode',
        'insurance' => 'getInsurance',
        'custom_fields' => 'getCustomFields',
        'dangerous_goods_header' => 'getDangerousGoodsHeader',
        'id' => 'getId',
        'processed_on' => 'getProcessedOn',
        'has_errors' => 'getHasErrors',
        'airway_bill_number' => 'getAirwayBillNumber',
        'elapsed_carrier_api_time_process' => 'getElapsedCarrierApiTimeProcess',
        'elapsed_carrier_api_time_void_previous' => 'getElapsedCarrierApiTimeVoidPrevious',
        'freight_charge' => 'getFreightCharge',
        'ship_from_address' => 'getShipFromAddress',
        'label_from_address' => 'getLabelFromAddress',
        'ship_to_address' => 'getShipToAddress',
        'bill_to_address' => 'getBillToAddress',
        'exporter_address' => 'getExporterAddress',
        'importer_address' => 'getImporterAddress',
        'routing' => 'getRouting',
        'customs' => 'getCustoms',
        'shipping_options' => 'getShippingOptions',
        'ltl_options' => 'getLtlOptions'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    const STATUS_UNPROCESSED = 'Unprocessed';
    const STATUS_PROCESSED = 'Processed';
    const STATUS_MERGED = 'Merged';
    const STATUS_FAILED = 'Failed';
    const STATUS_PROCESSING = 'Processing';
    const STATUS_CANCELLING = 'Cancelling';
    const STATUS_FAILING = 'Failing';
    const STATUS_WARNING = 'Warning';
    const STATUS_ESTIMATING = 'Estimating';
    const STATUS_CREATE_DGIS = 'CreateDGIS';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_UNPROCESSED,
            self::STATUS_PROCESSED,
            self::STATUS_MERGED,
            self::STATUS_FAILED,
            self::STATUS_PROCESSING,
            self::STATUS_CANCELLING,
            self::STATUS_FAILING,
            self::STATUS_WARNING,
            self::STATUS_ESTIMATING,
            self::STATUS_CREATE_DGIS,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['order_import_source'] = isset($data['order_import_source']) ? $data['order_import_source'] : null;
        $this->container['package_description'] = isset($data['package_description']) ? $data['package_description'] : null;
        $this->container['manifest_id'] = isset($data['manifest_id']) ? $data['manifest_id'] : null;
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['client_code'] = isset($data['client_code']) ? $data['client_code'] : null;
        $this->container['transaction_number'] = isset($data['transaction_number']) ? $data['transaction_number'] : null;
        $this->container['customer_order'] = isset($data['customer_order']) ? $data['customer_order'] : null;
        $this->container['customer_po'] = isset($data['customer_po']) ? $data['customer_po'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['terms'] = isset($data['terms']) ? $data['terms'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['processing_errors'] = isset($data['processing_errors']) ? $data['processing_errors'] : null;
        $this->container['instruction'] = isset($data['instruction']) ? $data['instruction'] : null;
        $this->container['currency_code'] = isset($data['currency_code']) ? $data['currency_code'] : null;
        $this->container['insurance'] = isset($data['insurance']) ? $data['insurance'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['dangerous_goods_header'] = isset($data['dangerous_goods_header']) ? $data['dangerous_goods_header'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['processed_on'] = isset($data['processed_on']) ? $data['processed_on'] : null;
        $this->container['has_errors'] = isset($data['has_errors']) ? $data['has_errors'] : null;
        $this->container['airway_bill_number'] = isset($data['airway_bill_number']) ? $data['airway_bill_number'] : null;
        $this->container['elapsed_carrier_api_time_process'] = isset($data['elapsed_carrier_api_time_process']) ? $data['elapsed_carrier_api_time_process'] : null;
        $this->container['elapsed_carrier_api_time_void_previous'] = isset($data['elapsed_carrier_api_time_void_previous']) ? $data['elapsed_carrier_api_time_void_previous'] : null;
        $this->container['freight_charge'] = isset($data['freight_charge']) ? $data['freight_charge'] : null;
        $this->container['ship_from_address'] = isset($data['ship_from_address']) ? $data['ship_from_address'] : null;
        $this->container['label_from_address'] = isset($data['label_from_address']) ? $data['label_from_address'] : null;
        $this->container['ship_to_address'] = isset($data['ship_to_address']) ? $data['ship_to_address'] : null;
        $this->container['bill_to_address'] = isset($data['bill_to_address']) ? $data['bill_to_address'] : null;
        $this->container['exporter_address'] = isset($data['exporter_address']) ? $data['exporter_address'] : null;
        $this->container['importer_address'] = isset($data['importer_address']) ? $data['importer_address'] : null;
        $this->container['routing'] = isset($data['routing']) ? $data['routing'] : null;
        $this->container['customs'] = isset($data['customs']) ? $data['customs'] : null;
        $this->container['shipping_options'] = isset($data['shipping_options']) ? $data['shipping_options'] : null;
        $this->container['ltl_options'] = isset($data['ltl_options']) ? $data['ltl_options'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets packages
     *
     * @return \Fulfillment\StraightShip\Client\Model\Package[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \Fulfillment\StraightShip\Client\Model\Package[] $packages Packages
     *
     * @return $this
     */
    public function setPackages($packages)
    {
        $this->container['packages'] = $packages;

        return $this;
    }

    /**
     * Gets rates
     *
     * @return \Fulfillment\StraightShip\Client\Model\CarrierOrderRate[]
     */
    public function getRates()
    {
        return $this->container['rates'];
    }

    /**
     * Sets rates
     *
     * @param \Fulfillment\StraightShip\Client\Model\CarrierOrderRate[] $rates Estimate rates
     *
     * @return $this
     */
    public function setRates($rates)
    {
        $this->container['rates'] = $rates;

        return $this;
    }

    /**
     * Gets batch_number
     *
     * @return string
     */
    public function getBatchNumber()
    {
        return $this->container['batch_number'];
    }

    /**
     * Sets batch_number
     *
     * @param string $batch_number Optional batch number. If batch already exists, order is added to existing batch
     *
     * @return $this
     */
    public function setBatchNumber($batch_number)
    {
        $this->container['batch_number'] = $batch_number;

        return $this;
    }

    /**
     * Gets order_import_source
     *
     * @return string
     */
    public function getOrderImportSource()
    {
        return $this->container['order_import_source'];
    }

    /**
     * Sets order_import_source
     *
     * @param string $order_import_source Optional import source
     *
     * @return $this
     */
    public function setOrderImportSource($order_import_source)
    {
        $this->container['order_import_source'] = $order_import_source;

        return $this;
    }

    /**
     * Gets package_description
     *
     * @return string
     */
    public function getPackageDescription()
    {
        return $this->container['package_description'];
    }

    /**
     * Sets package_description
     *
     * @param string $package_description package_description
     *
     * @return $this
     */
    public function setPackageDescription($package_description)
    {
        $this->container['package_description'] = $package_description;

        return $this;
    }

    /**
     * Gets manifest_id
     *
     * @return string
     */
    public function getManifestId()
    {
        return $this->container['manifest_id'];
    }

    /**
     * Sets manifest_id
     *
     * @param string $manifest_id A manifest ID associated with an order. This is typically used for end-of-day  processing, defining a truckload (one manifest per truck), or for each pickup (one manifest per pickup).                Note:  - This field is optional. The system will automatically assign a value if left empty.  - Avoid populating this field with an order number. Doing so can lead to a one-to-one     mapping of a manifest to an order, which can cause performance issues.  - This ID is intended for grouping multiple orders into batches (e.g., an end-of-day batch,     a truckload, or a pickup), not for individual order tracking.
     *
     * @return $this
     */
    public function setManifestId($manifest_id)
    {
        $this->container['manifest_id'] = $manifest_id;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param int $batch_id Batch id
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets client_code
     *
     * @return string
     */
    public function getClientCode()
    {
        return $this->container['client_code'];
    }

    /**
     * Sets client_code
     *
     * @param string $client_code Client code for order
     *
     * @return $this
     */
    public function setClientCode($client_code)
    {
        $this->container['client_code'] = $client_code;

        return $this;
    }

    /**
     * Gets transaction_number
     *
     * @return string
     */
    public function getTransactionNumber()
    {
        return $this->container['transaction_number'];
    }

    /**
     * Sets transaction_number
     *
     * @param string $transaction_number Mandatory unique shipment number
     *
     * @return $this
     */
    public function setTransactionNumber($transaction_number)
    {
        $this->container['transaction_number'] = $transaction_number;

        return $this;
    }

    /**
     * Gets customer_order
     *
     * @return string
     */
    public function getCustomerOrder()
    {
        return $this->container['customer_order'];
    }

    /**
     * Sets customer_order
     *
     * @param string $customer_order Optional customer reference 1
     *
     * @return $this
     */
    public function setCustomerOrder($customer_order)
    {
        $this->container['customer_order'] = $customer_order;

        return $this;
    }

    /**
     * Gets customer_po
     *
     * @return string
     */
    public function getCustomerPo()
    {
        return $this->container['customer_po'];
    }

    /**
     * Sets customer_po
     *
     * @param string $customer_po Optional customer reference 2
     *
     * @return $this
     */
    public function setCustomerPo($customer_po)
    {
        $this->container['customer_po'] = $customer_po;

        return $this;
    }

    /**
     * Gets customer_number
     *
     * @return string
     */
    public function getCustomerNumber()
    {
        return $this->container['customer_number'];
    }

    /**
     * Sets customer_number
     *
     * @param string $customer_number Optional customer reference 3
     *
     * @return $this
     */
    public function setCustomerNumber($customer_number)
    {
        $this->container['customer_number'] = $customer_number;

        return $this;
    }

    /**
     * Gets terms
     *
     * @return string
     */
    public function getTerms()
    {
        return $this->container['terms'];
    }

    /**
     * Sets terms
     *
     * @param string $terms Optional order terms. This is free-form reference field for packing slips only. Do not use it to specify freight payment terms. To specify who pays for label, use field named `FreightPaymentTerms`
     *
     * @return $this
     */
    public function setTerms($terms)
    {
        $this->container['terms'] = $terms;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Order processing status, read/only
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets processing_errors
     *
     * @return string
     */
    public function getProcessingErrors()
    {
        return $this->container['processing_errors'];
    }

    /**
     * Sets processing_errors
     *
     * @param string $processing_errors Processing errors
     *
     * @return $this
     */
    public function setProcessingErrors($processing_errors)
    {
        $this->container['processing_errors'] = $processing_errors;

        return $this;
    }

    /**
     * Gets instruction
     *
     * @return string
     */
    public function getInstruction()
    {
        return $this->container['instruction'];
    }

    /**
     * Sets instruction
     *
     * @param string $instruction Optional order delivery instructions
     *
     * @return $this
     */
    public function setInstruction($instruction)
    {
        $this->container['instruction'] = $instruction;

        return $this;
    }

    /**
     * Gets currency_code
     *
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->container['currency_code'];
    }

    /**
     * Sets currency_code
     *
     * @param string $currency_code Default order currency code for all input price fields (such as unit price, COD, insurance. etc.)
     *
     * @return $this
     */
    public function setCurrencyCode($currency_code)
    {
        $this->container['currency_code'] = $currency_code;

        return $this;
    }

    /**
     * Gets insurance
     *
     * @return \Fulfillment\StraightShip\Client\Model\Insurance
     */
    public function getInsurance()
    {
        return $this->container['insurance'];
    }

    /**
     * Sets insurance
     *
     * @param \Fulfillment\StraightShip\Client\Model\Insurance $insurance insurance
     *
     * @return $this
     */
    public function setInsurance($insurance)
    {
        $this->container['insurance'] = $insurance;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return \Fulfillment\StraightShip\Client\Model\CustomField[]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param \Fulfillment\StraightShip\Client\Model\CustomField[] $custom_fields Custom fields to pass with order
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets dangerous_goods_header
     *
     * @return \Fulfillment\StraightShip\Client\Model\DangerousGoodsHeader
     */
    public function getDangerousGoodsHeader()
    {
        return $this->container['dangerous_goods_header'];
    }

    /**
     * Sets dangerous_goods_header
     *
     * @param \Fulfillment\StraightShip\Client\Model\DangerousGoodsHeader $dangerous_goods_header dangerous_goods_header
     *
     * @return $this
     */
    public function setDangerousGoodsHeader($dangerous_goods_header)
    {
        $this->container['dangerous_goods_header'] = $dangerous_goods_header;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets processed_on
     *
     * @return string
     */
    public function getProcessedOn()
    {
        return $this->container['processed_on'];
    }

    /**
     * Sets processed_on
     *
     * @param string $processed_on Timestamp when label generated
     *
     * @return $this
     */
    public function setProcessedOn($processed_on)
    {
        $this->container['processed_on'] = $processed_on;

        return $this;
    }

    /**
     * Gets has_errors
     *
     * @return bool
     */
    public function getHasErrors()
    {
        return $this->container['has_errors'];
    }

    /**
     * Sets has_errors
     *
     * @param bool $has_errors Has errors
     *
     * @return $this
     */
    public function setHasErrors($has_errors)
    {
        $this->container['has_errors'] = $has_errors;

        return $this;
    }

    /**
     * Gets airway_bill_number
     *
     * @return string
     */
    public function getAirwayBillNumber()
    {
        return $this->container['airway_bill_number'];
    }

    /**
     * Sets airway_bill_number
     *
     * @param string $airway_bill_number Air waybill number
     *
     * @return $this
     */
    public function setAirwayBillNumber($airway_bill_number)
    {
        $this->container['airway_bill_number'] = $airway_bill_number;

        return $this;
    }

    /**
     * Gets elapsed_carrier_api_time_process
     *
     * @return double
     */
    public function getElapsedCarrierApiTimeProcess()
    {
        return $this->container['elapsed_carrier_api_time_process'];
    }

    /**
     * Sets elapsed_carrier_api_time_process
     *
     * @param double $elapsed_carrier_api_time_process Elapsed label API time (without rates)
     *
     * @return $this
     */
    public function setElapsedCarrierApiTimeProcess($elapsed_carrier_api_time_process)
    {
        $this->container['elapsed_carrier_api_time_process'] = $elapsed_carrier_api_time_process;

        return $this;
    }

    /**
     * Gets elapsed_carrier_api_time_void_previous
     *
     * @return double
     */
    public function getElapsedCarrierApiTimeVoidPrevious()
    {
        return $this->container['elapsed_carrier_api_time_void_previous'];
    }

    /**
     * Sets elapsed_carrier_api_time_void_previous
     *
     * @param double $elapsed_carrier_api_time_void_previous Elapsed void previous order API time
     *
     * @return $this
     */
    public function setElapsedCarrierApiTimeVoidPrevious($elapsed_carrier_api_time_void_previous)
    {
        $this->container['elapsed_carrier_api_time_void_previous'] = $elapsed_carrier_api_time_void_previous;

        return $this;
    }

    /**
     * Gets freight_charge
     *
     * @return \Fulfillment\StraightShip\Client\Model\PackageFreightCharge
     */
    public function getFreightCharge()
    {
        return $this->container['freight_charge'];
    }

    /**
     * Sets freight_charge
     *
     * @param \Fulfillment\StraightShip\Client\Model\PackageFreightCharge $freight_charge freight_charge
     *
     * @return $this
     */
    public function setFreightCharge($freight_charge)
    {
        $this->container['freight_charge'] = $freight_charge;

        return $this;
    }

    /**
     * Gets ship_from_address
     *
     * @return \Fulfillment\StraightShip\Client\Model\Address
     */
    public function getShipFromAddress()
    {
        return $this->container['ship_from_address'];
    }

    /**
     * Sets ship_from_address
     *
     * @param \Fulfillment\StraightShip\Client\Model\Address $ship_from_address ship_from_address
     *
     * @return $this
     */
    public function setShipFromAddress($ship_from_address)
    {
        $this->container['ship_from_address'] = $ship_from_address;

        return $this;
    }

    /**
     * Gets label_from_address
     *
     * @return \Fulfillment\StraightShip\Client\Model\Address
     */
    public function getLabelFromAddress()
    {
        return $this->container['label_from_address'];
    }

    /**
     * Sets label_from_address
     *
     * @param \Fulfillment\StraightShip\Client\Model\Address $label_from_address label_from_address
     *
     * @return $this
     */
    public function setLabelFromAddress($label_from_address)
    {
        $this->container['label_from_address'] = $label_from_address;

        return $this;
    }

    /**
     * Gets ship_to_address
     *
     * @return \Fulfillment\StraightShip\Client\Model\ShipToAddress
     */
    public function getShipToAddress()
    {
        return $this->container['ship_to_address'];
    }

    /**
     * Sets ship_to_address
     *
     * @param \Fulfillment\StraightShip\Client\Model\ShipToAddress $ship_to_address ship_to_address
     *
     * @return $this
     */
    public function setShipToAddress($ship_to_address)
    {
        $this->container['ship_to_address'] = $ship_to_address;

        return $this;
    }

    /**
     * Gets bill_to_address
     *
     * @return \Fulfillment\StraightShip\Client\Model\Address
     */
    public function getBillToAddress()
    {
        return $this->container['bill_to_address'];
    }

    /**
     * Sets bill_to_address
     *
     * @param \Fulfillment\StraightShip\Client\Model\Address $bill_to_address bill_to_address
     *
     * @return $this
     */
    public function setBillToAddress($bill_to_address)
    {
        $this->container['bill_to_address'] = $bill_to_address;

        return $this;
    }

    /**
     * Gets exporter_address
     *
     * @return \Fulfillment\StraightShip\Client\Model\Address
     */
    public function getExporterAddress()
    {
        return $this->container['exporter_address'];
    }

    /**
     * Sets exporter_address
     *
     * @param \Fulfillment\StraightShip\Client\Model\Address $exporter_address exporter_address
     *
     * @return $this
     */
    public function setExporterAddress($exporter_address)
    {
        $this->container['exporter_address'] = $exporter_address;

        return $this;
    }

    /**
     * Gets importer_address
     *
     * @return \Fulfillment\StraightShip\Client\Model\Address
     */
    public function getImporterAddress()
    {
        return $this->container['importer_address'];
    }

    /**
     * Sets importer_address
     *
     * @param \Fulfillment\StraightShip\Client\Model\Address $importer_address importer_address
     *
     * @return $this
     */
    public function setImporterAddress($importer_address)
    {
        $this->container['importer_address'] = $importer_address;

        return $this;
    }

    /**
     * Gets routing
     *
     * @return \Fulfillment\StraightShip\Client\Model\Routing
     */
    public function getRouting()
    {
        return $this->container['routing'];
    }

    /**
     * Sets routing
     *
     * @param \Fulfillment\StraightShip\Client\Model\Routing $routing routing
     *
     * @return $this
     */
    public function setRouting($routing)
    {
        $this->container['routing'] = $routing;

        return $this;
    }

    /**
     * Gets customs
     *
     * @return \Fulfillment\StraightShip\Client\Model\Customs
     */
    public function getCustoms()
    {
        return $this->container['customs'];
    }

    /**
     * Sets customs
     *
     * @param \Fulfillment\StraightShip\Client\Model\Customs $customs customs
     *
     * @return $this
     */
    public function setCustoms($customs)
    {
        $this->container['customs'] = $customs;

        return $this;
    }

    /**
     * Gets shipping_options
     *
     * @return \Fulfillment\StraightShip\Client\Model\ShippingOptions
     */
    public function getShippingOptions()
    {
        return $this->container['shipping_options'];
    }

    /**
     * Sets shipping_options
     *
     * @param \Fulfillment\StraightShip\Client\Model\ShippingOptions $shipping_options shipping_options
     *
     * @return $this
     */
    public function setShippingOptions($shipping_options)
    {
        $this->container['shipping_options'] = $shipping_options;

        return $this;
    }

    /**
     * Gets ltl_options
     *
     * @return \Fulfillment\StraightShip\Client\Model\LTLOptions
     */
    public function getLtlOptions()
    {
        return $this->container['ltl_options'];
    }

    /**
     * Sets ltl_options
     *
     * @param \Fulfillment\StraightShip\Client\Model\LTLOptions $ltl_options ltl_options
     *
     * @return $this
     */
    public function setLtlOptions($ltl_options)
    {
        $this->container['ltl_options'] = $ltl_options;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
