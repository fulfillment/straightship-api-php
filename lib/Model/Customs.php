<?php
/**
 * Customs
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
use Fulfillment\StraightShip\Client\Model\TaxInfo;
use Fulfillment\StraightShip\Client\Model\DutyBilling;

/**
 * Customs Class Doc Comment
 *
 * @category Class
 * @description Customs information (for commercial invoice)
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customs implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customs';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terms_of_trade' => 'string',
        'place_of_incoterm' => 'string',
        'itn_number' => 'string',
        'duty_billing' => DutyBilling::class,
        'sender_tax' => TaxInfo::class,
        'sender_tax_info' => TaxInfo::class,
        'receiver_tax_info' => TaxInfo::class,
        'exporter_tax_info' => TaxInfo::class,
        'importer_tax_info' => TaxInfo::class,
        'commercial_invoice_declaration_statement' => 'string',
        'commercial_invoice_special_instructions' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terms_of_trade' => null,
        'place_of_incoterm' => null,
        'itn_number' => null,
        'duty_billing' => null,
        'sender_tax' => null,
        'sender_tax_info' => null,
        'receiver_tax_info' => null,
        'exporter_tax_info' => null,
        'importer_tax_info' => null,
        'commercial_invoice_declaration_statement' => null,
        'commercial_invoice_special_instructions' => null
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
        'terms_of_trade' => 'TermsOfTrade',
        'place_of_incoterm' => 'PlaceOfIncoterm',
        'itn_number' => 'ItnNumber',
        'duty_billing' => 'DutyBilling',
        'sender_tax' => 'SenderTax',
        'sender_tax_info' => 'SenderTaxInfo',
        'receiver_tax_info' => 'ReceiverTaxInfo',
        'exporter_tax_info' => 'ExporterTaxInfo',
        'importer_tax_info' => 'ImporterTaxInfo',
        'commercial_invoice_declaration_statement' => 'CommercialInvoiceDeclarationStatement',
        'commercial_invoice_special_instructions' => 'CommercialInvoiceSpecialInstructions'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terms_of_trade' => 'setTermsOfTrade',
        'place_of_incoterm' => 'setPlaceOfIncoterm',
        'itn_number' => 'setItnNumber',
        'duty_billing' => 'setDutyBilling',
        'sender_tax' => 'setSenderTax',
        'sender_tax_info' => 'setSenderTaxInfo',
        'receiver_tax_info' => 'setReceiverTaxInfo',
        'exporter_tax_info' => 'setExporterTaxInfo',
        'importer_tax_info' => 'setImporterTaxInfo',
        'commercial_invoice_declaration_statement' => 'setCommercialInvoiceDeclarationStatement',
        'commercial_invoice_special_instructions' => 'setCommercialInvoiceSpecialInstructions'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terms_of_trade' => 'getTermsOfTrade',
        'place_of_incoterm' => 'getPlaceOfIncoterm',
        'itn_number' => 'getItnNumber',
        'duty_billing' => 'getDutyBilling',
        'sender_tax' => 'getSenderTax',
        'sender_tax_info' => 'getSenderTaxInfo',
        'receiver_tax_info' => 'getReceiverTaxInfo',
        'exporter_tax_info' => 'getExporterTaxInfo',
        'importer_tax_info' => 'getImporterTaxInfo',
        'commercial_invoice_declaration_statement' => 'getCommercialInvoiceDeclarationStatement',
        'commercial_invoice_special_instructions' => 'getCommercialInvoiceSpecialInstructions'
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
        $this->container['terms_of_trade'] = isset($data['terms_of_trade']) ? $data['terms_of_trade'] : null;
        $this->container['place_of_incoterm'] = isset($data['place_of_incoterm']) ? $data['place_of_incoterm'] : null;
        $this->container['itn_number'] = isset($data['itn_number']) ? $data['itn_number'] : null;
        $this->container['duty_billing'] = isset($data['duty_billing']) ? $data['duty_billing'] : null;
        $this->container['sender_tax'] = isset($data['sender_tax']) ? $data['sender_tax'] : null;
        $this->container['sender_tax_info'] = isset($data['sender_tax_info']) ? $data['sender_tax_info'] : null;
        $this->container['receiver_tax_info'] = isset($data['receiver_tax_info']) ? $data['receiver_tax_info'] : null;
        $this->container['exporter_tax_info'] = isset($data['exporter_tax_info']) ? $data['exporter_tax_info'] : null;
        $this->container['importer_tax_info'] = isset($data['importer_tax_info']) ? $data['importer_tax_info'] : null;
        $this->container['commercial_invoice_declaration_statement'] = isset($data['commercial_invoice_declaration_statement']) ? $data['commercial_invoice_declaration_statement'] : null;
        $this->container['commercial_invoice_special_instructions'] = isset($data['commercial_invoice_special_instructions']) ? $data['commercial_invoice_special_instructions'] : null;
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
     * Gets terms_of_trade
     *
     * @return string
     */
    public function getTermsOfTrade()
    {
        return $this->container['terms_of_trade'];
    }

    /**
     * Sets terms_of_trade
     *
     * @param string $terms_of_trade Optional IncoTerms
     *
     * @return $this
     */
    public function setTermsOfTrade($terms_of_trade)
    {
        $this->container['terms_of_trade'] = $terms_of_trade;

        return $this;
    }

    /**
     * Gets place_of_incoterm
     *
     * @return string
     */
    public function getPlaceOfIncoterm()
    {
        return $this->container['place_of_incoterm'];
    }

    /**
     * Sets place_of_incoterm
     *
     * @param string $place_of_incoterm Optional Place of Incoterm for DHL  If not specified, place of incoterm will be determined from Terns and sender or consignee city
     *
     * @return $this
     */
    public function setPlaceOfIncoterm($place_of_incoterm)
    {
        $this->container['place_of_incoterm'] = $place_of_incoterm;

        return $this;
    }

    /**
     * Gets itn_number
     *
     * @return string
     */
    public function getItnNumber()
    {
        return $this->container['itn_number'];
    }

    /**
     * Sets itn_number
     *
     * @param string $itn_number ITN number or AES exemption
     *
     * @return $this
     */
    public function setItnNumber($itn_number)
    {
        $this->container['itn_number'] = $itn_number;

        return $this;
    }

    /**
     * Gets duty_billing
     *
     * @return \Fulfillment\StraightShip\Client\Model\DutyBilling
     */
    public function getDutyBilling()
    {
        return $this->container['duty_billing'];
    }

    /**
     * Sets duty_billing
     *
     * @param \Fulfillment\StraightShip\Client\Model\DutyBilling $duty_billing duty_billing
     *
     * @return $this
     */
    public function setDutyBilling($duty_billing)
    {
        $this->container['duty_billing'] = $duty_billing;

        return $this;
    }

    /**
     * Gets sender_tax
     *
     * @return \Fulfillment\StraightShip\Client\Model\TaxInfo
     */
    public function getSenderTax()
    {
        return $this->container['sender_tax'];
    }

    /**
     * Sets sender_tax
     *
     * @param \Fulfillment\StraightShip\Client\Model\TaxInfo $sender_tax sender_tax
     *
     * @return $this
     */
    public function setSenderTax($sender_tax)
    {
        $this->container['sender_tax'] = $sender_tax;

        return $this;
    }

    /**
     * Gets sender_tax_info
     *
     * @return \Fulfillment\StraightShip\Client\Model\TaxInfo
     */
    public function getSenderTaxInfo()
    {
        return $this->container['sender_tax_info'];
    }

    /**
     * Sets sender_tax_info
     *
     * @param \Fulfillment\StraightShip\Client\Model\TaxInfo $sender_tax_info sender_tax_info
     *
     * @return $this
     */
    public function setSenderTaxInfo($sender_tax_info)
    {
        $this->container['sender_tax_info'] = $sender_tax_info;

        return $this;
    }

    /**
     * Gets receiver_tax_info
     *
     * @return \Fulfillment\StraightShip\Client\Model\TaxInfo
     */
    public function getReceiverTaxInfo()
    {
        return $this->container['receiver_tax_info'];
    }

    /**
     * Sets receiver_tax_info
     *
     * @param \Fulfillment\StraightShip\Client\Model\TaxInfo $receiver_tax_info receiver_tax_info
     *
     * @return $this
     */
    public function setReceiverTaxInfo($receiver_tax_info)
    {
        $this->container['receiver_tax_info'] = $receiver_tax_info;

        return $this;
    }

    /**
     * Gets exporter_tax_info
     *
     * @return \Fulfillment\StraightShip\Client\Model\TaxInfo
     */
    public function getExporterTaxInfo()
    {
        return $this->container['exporter_tax_info'];
    }

    /**
     * Sets exporter_tax_info
     *
     * @param \Fulfillment\StraightShip\Client\Model\TaxInfo $exporter_tax_info exporter_tax_info
     *
     * @return $this
     */
    public function setExporterTaxInfo($exporter_tax_info)
    {
        $this->container['exporter_tax_info'] = $exporter_tax_info;

        return $this;
    }

    /**
     * Gets importer_tax_info
     *
     * @return \Fulfillment\StraightShip\Client\Model\TaxInfo
     */
    public function getImporterTaxInfo()
    {
        return $this->container['importer_tax_info'];
    }

    /**
     * Sets importer_tax_info
     *
     * @param \Fulfillment\StraightShip\Client\Model\TaxInfo $importer_tax_info importer_tax_info
     *
     * @return $this
     */
    public function setImporterTaxInfo($importer_tax_info)
    {
        $this->container['importer_tax_info'] = $importer_tax_info;

        return $this;
    }

    /**
     * Gets commercial_invoice_declaration_statement
     *
     * @return string
     */
    public function getCommercialInvoiceDeclarationStatement()
    {
        return $this->container['commercial_invoice_declaration_statement'];
    }

    /**
     * Sets commercial_invoice_declaration_statement
     *
     * @param string $commercial_invoice_declaration_statement Declaration statement on commercial invoice (Fedex, UPS, DHL)
     *
     * @return $this
     */
    public function setCommercialInvoiceDeclarationStatement($commercial_invoice_declaration_statement)
    {
        $this->container['commercial_invoice_declaration_statement'] = $commercial_invoice_declaration_statement;

        return $this;
    }

    /**
     * Gets commercial_invoice_special_instructions
     *
     * @return string
     */
    public function getCommercialInvoiceSpecialInstructions()
    {
        return $this->container['commercial_invoice_special_instructions'];
    }

    /**
     * Sets commercial_invoice_special_instructions
     *
     * @param string $commercial_invoice_special_instructions Special instructions on commercial invoice (Fedex, UPS, DHL)
     *
     * @return $this
     */
    public function setCommercialInvoiceSpecialInstructions($commercial_invoice_special_instructions)
    {
        $this->container['commercial_invoice_special_instructions'] = $commercial_invoice_special_instructions;

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
