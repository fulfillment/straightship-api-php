<?php
/**
 * TaxInfo
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
 * TaxInfo Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'vat_number' => 'string',
        'ioss_number' => 'string',
        'eori_number' => 'string',
        'pid_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'vat_number' => null,
        'ioss_number' => null,
        'eori_number' => null,
        'pid_number' => null
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
        'vat_number' => 'VatNumber',
        'ioss_number' => 'IossNumber',
        'eori_number' => 'EoriNumber',
        'pid_number' => 'PidNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'vat_number' => 'setVatNumber',
        'ioss_number' => 'setIossNumber',
        'eori_number' => 'setEoriNumber',
        'pid_number' => 'setPidNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'vat_number' => 'getVatNumber',
        'ioss_number' => 'getIossNumber',
        'eori_number' => 'getEoriNumber',
        'pid_number' => 'getPidNumber'
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
        $this->container['vat_number'] = isset($data['vat_number']) ? $data['vat_number'] : null;
        $this->container['ioss_number'] = isset($data['ioss_number']) ? $data['ioss_number'] : null;
        $this->container['eori_number'] = isset($data['eori_number']) ? $data['eori_number'] : null;
        $this->container['pid_number'] = isset($data['pid_number']) ? $data['pid_number'] : null;
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
     * Gets vat_number
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vat_number'];
    }

    /**
     * Sets vat_number
     *
     * @param string $vat_number VAT
     *
     * @return $this
     */
    public function setVatNumber($vat_number)
    {
        $this->container['vat_number'] = $vat_number;

        return $this;
    }

    /**
     * Gets ioss_number
     *
     * @return string
     */
    public function getIossNumber()
    {
        return $this->container['ioss_number'];
    }

    /**
     * Sets ioss_number
     *
     * @param string $ioss_number IOSS
     *
     * @return $this
     */
    public function setIossNumber($ioss_number)
    {
        $this->container['ioss_number'] = $ioss_number;

        return $this;
    }

    /**
     * Gets eori_number
     *
     * @return string
     */
    public function getEoriNumber()
    {
        return $this->container['eori_number'];
    }

    /**
     * Sets eori_number
     *
     * @param string $eori_number EORI
     *
     * @return $this
     */
    public function setEoriNumber($eori_number)
    {
        $this->container['eori_number'] = $eori_number;

        return $this;
    }

    /**
     * Gets pid_number
     *
     * @return string
     */
    public function getPidNumber()
    {
        return $this->container['pid_number'];
    }

    /**
     * Sets pid_number
     *
     * @param string $pid_number PID
     *
     * @return $this
     */
    public function setPidNumber($pid_number)
    {
        $this->container['pid_number'] = $pid_number;

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
