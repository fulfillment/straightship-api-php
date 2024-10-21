<?php
/**
 * CartonizeResult
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

/**
 * CartonizeResult Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartonizeResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartonizeResult';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'batch_id' => 'int',
        'shipment_id' => 'int',
        'manifest_id' => 'string',
        'batch_number' => 'string',
        'client_code' => 'string',
        'carrier_code' => 'string',
        'carrier_id' => 'int',
        'service_code' => 'string',
        'external_service_code' => 'string',
        'transaction_number' => 'string',
        'customer_order' => 'string',
        'customer_po' => 'string',
        'customer_number' => 'string',
        'sequence' => 'int',
        'processing_errors' => 'string',
        'has_errors' => 'bool',
        'labels' => 'Fulfillment\StraightShip\Client\Model\CreateLabelRequest[]',
        'tax1_type' => 'string',
        'tax1_amount' => 'double',
        'tax2_type' => 'string',
        'tax2_amount' => 'double',
        'tax3_type' => 'string',
        'tax3_amount' => 'double',
        'shipping_charge' => 'double',
        'shipping_charge_total' => 'double',
        'fuel_surcharge' => 'double',
        'fee_markup' => 'double',
        'labels_pdf_url' => 'string',
        'documents_pdf_url' => 'string',
        'combined_pdf_url' => 'string',
        'airway_bill_number' => 'string',
        'elapsed_carrier_api_time_process' => 'double',
        'elapsed_carrier_api_time_void_previous' => 'double',
        'packages' => 'Fulfillment\StraightShip\Client\Model\PackageBase[]',
        'rates' => 'Fulfillment\StraightShip\Client\Model\CarrierOrderRate[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'batch_id' => 'int32',
        'shipment_id' => 'int32',
        'manifest_id' => null,
        'batch_number' => null,
        'client_code' => null,
        'carrier_code' => null,
        'carrier_id' => 'int32',
        'service_code' => null,
        'external_service_code' => null,
        'transaction_number' => null,
        'customer_order' => null,
        'customer_po' => null,
        'customer_number' => null,
        'sequence' => 'int32',
        'processing_errors' => null,
        'has_errors' => null,
        'labels' => null,
        'tax1_type' => null,
        'tax1_amount' => 'double',
        'tax2_type' => null,
        'tax2_amount' => 'double',
        'tax3_type' => null,
        'tax3_amount' => 'double',
        'shipping_charge' => 'double',
        'shipping_charge_total' => 'double',
        'fuel_surcharge' => 'double',
        'fee_markup' => 'double',
        'labels_pdf_url' => null,
        'documents_pdf_url' => null,
        'combined_pdf_url' => null,
        'airway_bill_number' => null,
        'elapsed_carrier_api_time_process' => 'double',
        'elapsed_carrier_api_time_void_previous' => 'double',
        'packages' => null,
        'rates' => null
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
        'batch_id' => 'BatchId',
        'shipment_id' => 'ShipmentId',
        'manifest_id' => 'ManifestId',
        'batch_number' => 'BatchNumber',
        'client_code' => 'ClientCode',
        'carrier_code' => 'CarrierCode',
        'carrier_id' => 'CarrierId',
        'service_code' => 'ServiceCode',
        'external_service_code' => 'ExternalServiceCode',
        'transaction_number' => 'TransactionNumber',
        'customer_order' => 'CustomerOrder',
        'customer_po' => 'CustomerPO',
        'customer_number' => 'CustomerNumber',
        'sequence' => 'Sequence',
        'processing_errors' => 'ProcessingErrors',
        'has_errors' => 'HasErrors',
        'labels' => 'Labels',
        'tax1_type' => 'Tax1Type',
        'tax1_amount' => 'Tax1Amount',
        'tax2_type' => 'Tax2Type',
        'tax2_amount' => 'Tax2Amount',
        'tax3_type' => 'Tax3Type',
        'tax3_amount' => 'Tax3Amount',
        'shipping_charge' => 'ShippingCharge',
        'shipping_charge_total' => 'ShippingChargeTotal',
        'fuel_surcharge' => 'FuelSurcharge',
        'fee_markup' => 'FeeMarkup',
        'labels_pdf_url' => 'LabelsPdfUrl',
        'documents_pdf_url' => 'DocumentsPdfUrl',
        'combined_pdf_url' => 'CombinedPdfUrl',
        'airway_bill_number' => 'AirwayBillNumber',
        'elapsed_carrier_api_time_process' => 'ElapsedCarrierApiTimeProcess',
        'elapsed_carrier_api_time_void_previous' => 'ElapsedCarrierApiTimeVoidPrevious',
        'packages' => 'Packages',
        'rates' => 'Rates'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'batch_id' => 'setBatchId',
        'shipment_id' => 'setShipmentId',
        'manifest_id' => 'setManifestId',
        'batch_number' => 'setBatchNumber',
        'client_code' => 'setClientCode',
        'carrier_code' => 'setCarrierCode',
        'carrier_id' => 'setCarrierId',
        'service_code' => 'setServiceCode',
        'external_service_code' => 'setExternalServiceCode',
        'transaction_number' => 'setTransactionNumber',
        'customer_order' => 'setCustomerOrder',
        'customer_po' => 'setCustomerPo',
        'customer_number' => 'setCustomerNumber',
        'sequence' => 'setSequence',
        'processing_errors' => 'setProcessingErrors',
        'has_errors' => 'setHasErrors',
        'labels' => 'setLabels',
        'tax1_type' => 'setTax1Type',
        'tax1_amount' => 'setTax1Amount',
        'tax2_type' => 'setTax2Type',
        'tax2_amount' => 'setTax2Amount',
        'tax3_type' => 'setTax3Type',
        'tax3_amount' => 'setTax3Amount',
        'shipping_charge' => 'setShippingCharge',
        'shipping_charge_total' => 'setShippingChargeTotal',
        'fuel_surcharge' => 'setFuelSurcharge',
        'fee_markup' => 'setFeeMarkup',
        'labels_pdf_url' => 'setLabelsPdfUrl',
        'documents_pdf_url' => 'setDocumentsPdfUrl',
        'combined_pdf_url' => 'setCombinedPdfUrl',
        'airway_bill_number' => 'setAirwayBillNumber',
        'elapsed_carrier_api_time_process' => 'setElapsedCarrierApiTimeProcess',
        'elapsed_carrier_api_time_void_previous' => 'setElapsedCarrierApiTimeVoidPrevious',
        'packages' => 'setPackages',
        'rates' => 'setRates'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'batch_id' => 'getBatchId',
        'shipment_id' => 'getShipmentId',
        'manifest_id' => 'getManifestId',
        'batch_number' => 'getBatchNumber',
        'client_code' => 'getClientCode',
        'carrier_code' => 'getCarrierCode',
        'carrier_id' => 'getCarrierId',
        'service_code' => 'getServiceCode',
        'external_service_code' => 'getExternalServiceCode',
        'transaction_number' => 'getTransactionNumber',
        'customer_order' => 'getCustomerOrder',
        'customer_po' => 'getCustomerPo',
        'customer_number' => 'getCustomerNumber',
        'sequence' => 'getSequence',
        'processing_errors' => 'getProcessingErrors',
        'has_errors' => 'getHasErrors',
        'labels' => 'getLabels',
        'tax1_type' => 'getTax1Type',
        'tax1_amount' => 'getTax1Amount',
        'tax2_type' => 'getTax2Type',
        'tax2_amount' => 'getTax2Amount',
        'tax3_type' => 'getTax3Type',
        'tax3_amount' => 'getTax3Amount',
        'shipping_charge' => 'getShippingCharge',
        'shipping_charge_total' => 'getShippingChargeTotal',
        'fuel_surcharge' => 'getFuelSurcharge',
        'fee_markup' => 'getFeeMarkup',
        'labels_pdf_url' => 'getLabelsPdfUrl',
        'documents_pdf_url' => 'getDocumentsPdfUrl',
        'combined_pdf_url' => 'getCombinedPdfUrl',
        'airway_bill_number' => 'getAirwayBillNumber',
        'elapsed_carrier_api_time_process' => 'getElapsedCarrierApiTimeProcess',
        'elapsed_carrier_api_time_void_previous' => 'getElapsedCarrierApiTimeVoidPrevious',
        'packages' => 'getPackages',
        'rates' => 'getRates'
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
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['shipment_id'] = isset($data['shipment_id']) ? $data['shipment_id'] : null;
        $this->container['manifest_id'] = isset($data['manifest_id']) ? $data['manifest_id'] : null;
        $this->container['batch_number'] = isset($data['batch_number']) ? $data['batch_number'] : null;
        $this->container['client_code'] = isset($data['client_code']) ? $data['client_code'] : null;
        $this->container['carrier_code'] = isset($data['carrier_code']) ? $data['carrier_code'] : null;
        $this->container['carrier_id'] = isset($data['carrier_id']) ? $data['carrier_id'] : null;
        $this->container['service_code'] = isset($data['service_code']) ? $data['service_code'] : null;
        $this->container['external_service_code'] = isset($data['external_service_code']) ? $data['external_service_code'] : null;
        $this->container['transaction_number'] = isset($data['transaction_number']) ? $data['transaction_number'] : null;
        $this->container['customer_order'] = isset($data['customer_order']) ? $data['customer_order'] : null;
        $this->container['customer_po'] = isset($data['customer_po']) ? $data['customer_po'] : null;
        $this->container['customer_number'] = isset($data['customer_number']) ? $data['customer_number'] : null;
        $this->container['sequence'] = isset($data['sequence']) ? $data['sequence'] : null;
        $this->container['processing_errors'] = isset($data['processing_errors']) ? $data['processing_errors'] : null;
        $this->container['has_errors'] = isset($data['has_errors']) ? $data['has_errors'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
        $this->container['tax1_type'] = isset($data['tax1_type']) ? $data['tax1_type'] : null;
        $this->container['tax1_amount'] = isset($data['tax1_amount']) ? $data['tax1_amount'] : null;
        $this->container['tax2_type'] = isset($data['tax2_type']) ? $data['tax2_type'] : null;
        $this->container['tax2_amount'] = isset($data['tax2_amount']) ? $data['tax2_amount'] : null;
        $this->container['tax3_type'] = isset($data['tax3_type']) ? $data['tax3_type'] : null;
        $this->container['tax3_amount'] = isset($data['tax3_amount']) ? $data['tax3_amount'] : null;
        $this->container['shipping_charge'] = isset($data['shipping_charge']) ? $data['shipping_charge'] : null;
        $this->container['shipping_charge_total'] = isset($data['shipping_charge_total']) ? $data['shipping_charge_total'] : null;
        $this->container['fuel_surcharge'] = isset($data['fuel_surcharge']) ? $data['fuel_surcharge'] : null;
        $this->container['fee_markup'] = isset($data['fee_markup']) ? $data['fee_markup'] : null;
        $this->container['labels_pdf_url'] = isset($data['labels_pdf_url']) ? $data['labels_pdf_url'] : null;
        $this->container['documents_pdf_url'] = isset($data['documents_pdf_url']) ? $data['documents_pdf_url'] : null;
        $this->container['combined_pdf_url'] = isset($data['combined_pdf_url']) ? $data['combined_pdf_url'] : null;
        $this->container['airway_bill_number'] = isset($data['airway_bill_number']) ? $data['airway_bill_number'] : null;
        $this->container['elapsed_carrier_api_time_process'] = isset($data['elapsed_carrier_api_time_process']) ? $data['elapsed_carrier_api_time_process'] : null;
        $this->container['elapsed_carrier_api_time_void_previous'] = isset($data['elapsed_carrier_api_time_void_previous']) ? $data['elapsed_carrier_api_time_void_previous'] : null;
        $this->container['packages'] = isset($data['packages']) ? $data['packages'] : null;
        $this->container['rates'] = isset($data['rates']) ? $data['rates'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * @param int $batch_id Batch id for created label
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets shipment_id
     *
     * @return int
     */
    public function getShipmentId()
    {
        return $this->container['shipment_id'];
    }

    /**
     * Sets shipment_id
     *
     * @param int $shipment_id Shipment id for created label
     *
     * @return $this
     */
    public function setShipmentId($shipment_id)
    {
        $this->container['shipment_id'] = $shipment_id;

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
     * @param string $manifest_id Manifest id for created label
     *
     * @return $this
     */
    public function setManifestId($manifest_id)
    {
        $this->container['manifest_id'] = $manifest_id;

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
     * Gets carrier_code
     *
     * @return string
     */
    public function getCarrierCode()
    {
        return $this->container['carrier_code'];
    }

    /**
     * Sets carrier_code
     *
     * @param string $carrier_code Optional carrier code from list installed on portal. Use null or omit for rate shopping.
     *
     * @return $this
     */
    public function setCarrierCode($carrier_code)
    {
        $this->container['carrier_code'] = $carrier_code;

        return $this;
    }

    /**
     * Gets carrier_id
     *
     * @return int
     */
    public function getCarrierId()
    {
        return $this->container['carrier_id'];
    }

    /**
     * Sets carrier_id
     *
     * @param int $carrier_id Internal techship carrier id. Output-only field.
     *
     * @return $this
     */
    public function setCarrierId($carrier_id)
    {
        $this->container['carrier_id'] = $carrier_id;

        return $this;
    }

    /**
     * Gets service_code
     *
     * @return string
     */
    public function getServiceCode()
    {
        return $this->container['service_code'];
    }

    /**
     * Sets service_code
     *
     * @param string $service_code Optional carrier service code from list installed on portal. Default value defined on portal for client is used if value omitted.
     *
     * @return $this
     */
    public function setServiceCode($service_code)
    {
        $this->container['service_code'] = $service_code;

        return $this;
    }

    /**
     * Gets external_service_code
     *
     * @return string
     */
    public function getExternalServiceCode()
    {
        return $this->container['external_service_code'];
    }

    /**
     * Sets external_service_code
     *
     * @param string $external_service_code Optional carrier service code mapped to external code on carrier tab on portal.
     *
     * @return $this
     */
    public function setExternalServiceCode($external_service_code)
    {
        $this->container['external_service_code'] = $external_service_code;

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
     * Gets sequence
     *
     * @return int
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param int $sequence Order sequence number
     *
     * @return $this
     */
    public function setSequence($sequence)
    {
        $this->container['sequence'] = $sequence;

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
     * @param string $processing_errors Processing Errors
     *
     * @return $this
     */
    public function setProcessingErrors($processing_errors)
    {
        $this->container['processing_errors'] = $processing_errors;

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
     * Gets labels
     *
     * @return \Fulfillment\StraightShip\Client\Model\CreateLabelRequest[]
     */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
     * Sets labels
     *
     * @param \Fulfillment\StraightShip\Client\Model\CreateLabelRequest[] $labels Created label list
     *
     * @return $this
     */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;

        return $this;
    }

    /**
     * Gets tax1_type
     *
     * @return string
     */
    public function getTax1Type()
    {
        return $this->container['tax1_type'];
    }

    /**
     * Sets tax1_type
     *
     * @param string $tax1_type Shipment tax 1 code. Ignored on creation
     *
     * @return $this
     */
    public function setTax1Type($tax1_type)
    {
        $this->container['tax1_type'] = $tax1_type;

        return $this;
    }

    /**
     * Gets tax1_amount
     *
     * @return double
     */
    public function getTax1Amount()
    {
        return $this->container['tax1_amount'];
    }

    /**
     * Sets tax1_amount
     *
     * @param double $tax1_amount Shipment tax 1 amount. Ignored on creation
     *
     * @return $this
     */
    public function setTax1Amount($tax1_amount)
    {
        $this->container['tax1_amount'] = $tax1_amount;

        return $this;
    }

    /**
     * Gets tax2_type
     *
     * @return string
     */
    public function getTax2Type()
    {
        return $this->container['tax2_type'];
    }

    /**
     * Sets tax2_type
     *
     * @param string $tax2_type Shipment tax 2 code. Ignored on creation
     *
     * @return $this
     */
    public function setTax2Type($tax2_type)
    {
        $this->container['tax2_type'] = $tax2_type;

        return $this;
    }

    /**
     * Gets tax2_amount
     *
     * @return double
     */
    public function getTax2Amount()
    {
        return $this->container['tax2_amount'];
    }

    /**
     * Sets tax2_amount
     *
     * @param double $tax2_amount Shipment tax 2 amount. Ignored on creation
     *
     * @return $this
     */
    public function setTax2Amount($tax2_amount)
    {
        $this->container['tax2_amount'] = $tax2_amount;

        return $this;
    }

    /**
     * Gets tax3_type
     *
     * @return string
     */
    public function getTax3Type()
    {
        return $this->container['tax3_type'];
    }

    /**
     * Sets tax3_type
     *
     * @param string $tax3_type Shipment tax 3 code. Ignored on creation
     *
     * @return $this
     */
    public function setTax3Type($tax3_type)
    {
        $this->container['tax3_type'] = $tax3_type;

        return $this;
    }

    /**
     * Gets tax3_amount
     *
     * @return double
     */
    public function getTax3Amount()
    {
        return $this->container['tax3_amount'];
    }

    /**
     * Sets tax3_amount
     *
     * @param double $tax3_amount Shipment tax 3 amount. Ignored on creation
     *
     * @return $this
     */
    public function setTax3Amount($tax3_amount)
    {
        $this->container['tax3_amount'] = $tax3_amount;

        return $this;
    }

    /**
     * Gets shipping_charge
     *
     * @return double
     */
    public function getShippingCharge()
    {
        return $this->container['shipping_charge'];
    }

    /**
     * Sets shipping_charge
     *
     * @param double $shipping_charge Shipping charge. Ignored on creation
     *
     * @return $this
     */
    public function setShippingCharge($shipping_charge)
    {
        $this->container['shipping_charge'] = $shipping_charge;

        return $this;
    }

    /**
     * Gets shipping_charge_total
     *
     * @return double
     */
    public function getShippingChargeTotal()
    {
        return $this->container['shipping_charge_total'];
    }

    /**
     * Sets shipping_charge_total
     *
     * @param double $shipping_charge_total Shipping charge total. Ignored on creation
     *
     * @return $this
     */
    public function setShippingChargeTotal($shipping_charge_total)
    {
        $this->container['shipping_charge_total'] = $shipping_charge_total;

        return $this;
    }

    /**
     * Gets fuel_surcharge
     *
     * @return double
     */
    public function getFuelSurcharge()
    {
        return $this->container['fuel_surcharge'];
    }

    /**
     * Sets fuel_surcharge
     *
     * @param double $fuel_surcharge Carrier fuel surcharge. Ignored on creation
     *
     * @return $this
     */
    public function setFuelSurcharge($fuel_surcharge)
    {
        $this->container['fuel_surcharge'] = $fuel_surcharge;

        return $this;
    }

    /**
     * Gets fee_markup
     *
     * @return double
     */
    public function getFeeMarkup()
    {
        return $this->container['fee_markup'];
    }

    /**
     * Sets fee_markup
     *
     * @param double $fee_markup Fee markup. Ignored on creation
     *
     * @return $this
     */
    public function setFeeMarkup($fee_markup)
    {
        $this->container['fee_markup'] = $fee_markup;

        return $this;
    }

    /**
     * Gets labels_pdf_url
     *
     * @return string
     */
    public function getLabelsPdfUrl()
    {
        return $this->container['labels_pdf_url'];
    }

    /**
     * Sets labels_pdf_url
     *
     * @param string $labels_pdf_url Combined labels download url
     *
     * @return $this
     */
    public function setLabelsPdfUrl($labels_pdf_url)
    {
        $this->container['labels_pdf_url'] = $labels_pdf_url;

        return $this;
    }

    /**
     * Gets documents_pdf_url
     *
     * @return string
     */
    public function getDocumentsPdfUrl()
    {
        return $this->container['documents_pdf_url'];
    }

    /**
     * Sets documents_pdf_url
     *
     * @param string $documents_pdf_url Combined labels download url
     *
     * @return $this
     */
    public function setDocumentsPdfUrl($documents_pdf_url)
    {
        $this->container['documents_pdf_url'] = $documents_pdf_url;

        return $this;
    }

    /**
     * Gets combined_pdf_url
     *
     * @return string
     */
    public function getCombinedPdfUrl()
    {
        return $this->container['combined_pdf_url'];
    }

    /**
     * Sets combined_pdf_url
     *
     * @param string $combined_pdf_url Combined labels download url
     *
     * @return $this
     */
    public function setCombinedPdfUrl($combined_pdf_url)
    {
        $this->container['combined_pdf_url'] = $combined_pdf_url;

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
     * Gets packages
     *
     * @return \Fulfillment\StraightShip\Client\Model\PackageBase[]
     */
    public function getPackages()
    {
        return $this->container['packages'];
    }

    /**
     * Sets packages
     *
     * @param \Fulfillment\StraightShip\Client\Model\PackageBase[] $packages Package info
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
