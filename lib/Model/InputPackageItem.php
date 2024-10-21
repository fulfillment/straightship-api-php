<?php
/**
 * InputPackageItem
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
use Fulfillment\StraightShip\Client\Model\DangerousGoodsDetails;

/**
 * InputPackageItem Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class InputPackageItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'InputPackageItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'sku' => 'string',
        'lot_number' => 'string',
        'serial_number' => 'string',
        'description' => 'string',
        'description2' => 'string',
        'description3' => 'string',
        'quantity' => 'double',
        'unit_price' => 'double',
        'unit_weight' => 'double',
        'net_unit_weight' => 'double',
        'expiration_date' => 'string',
        'uom' => 'string',
        'supplier' => 'string',
        'country_of_origin' => 'string',
        'harmonized_code' => 'string',
        'custom_fields' => 'Fulfillment\StraightShip\Client\Model\CustomField[]',
        'dangerous_goods' => DangerousGoodsDetails::class
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'sku' => null,
        'lot_number' => null,
        'serial_number' => null,
        'description' => null,
        'description2' => null,
        'description3' => null,
        'quantity' => 'double',
        'unit_price' => 'double',
        'unit_weight' => 'double',
        'net_unit_weight' => 'double',
        'expiration_date' => null,
        'uom' => null,
        'supplier' => null,
        'country_of_origin' => null,
        'harmonized_code' => null,
        'custom_fields' => null,
        'dangerous_goods' => null
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
        'sku' => 'SKU',
        'lot_number' => 'LotNumber',
        'serial_number' => 'SerialNumber',
        'description' => 'Description',
        'description2' => 'Description2',
        'description3' => 'Description3',
        'quantity' => 'Quantity',
        'unit_price' => 'UnitPrice',
        'unit_weight' => 'UnitWeight',
        'net_unit_weight' => 'NetUnitWeight',
        'expiration_date' => 'ExpirationDate',
        'uom' => 'UOM',
        'supplier' => 'Supplier',
        'country_of_origin' => 'CountryOfOrigin',
        'harmonized_code' => 'HarmonizedCode',
        'custom_fields' => 'CustomFields',
        'dangerous_goods' => 'DangerousGoods'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sku' => 'setSku',
        'lot_number' => 'setLotNumber',
        'serial_number' => 'setSerialNumber',
        'description' => 'setDescription',
        'description2' => 'setDescription2',
        'description3' => 'setDescription3',
        'quantity' => 'setQuantity',
        'unit_price' => 'setUnitPrice',
        'unit_weight' => 'setUnitWeight',
        'net_unit_weight' => 'setNetUnitWeight',
        'expiration_date' => 'setExpirationDate',
        'uom' => 'setUom',
        'supplier' => 'setSupplier',
        'country_of_origin' => 'setCountryOfOrigin',
        'harmonized_code' => 'setHarmonizedCode',
        'custom_fields' => 'setCustomFields',
        'dangerous_goods' => 'setDangerousGoods'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sku' => 'getSku',
        'lot_number' => 'getLotNumber',
        'serial_number' => 'getSerialNumber',
        'description' => 'getDescription',
        'description2' => 'getDescription2',
        'description3' => 'getDescription3',
        'quantity' => 'getQuantity',
        'unit_price' => 'getUnitPrice',
        'unit_weight' => 'getUnitWeight',
        'net_unit_weight' => 'getNetUnitWeight',
        'expiration_date' => 'getExpirationDate',
        'uom' => 'getUom',
        'supplier' => 'getSupplier',
        'country_of_origin' => 'getCountryOfOrigin',
        'harmonized_code' => 'getHarmonizedCode',
        'custom_fields' => 'getCustomFields',
        'dangerous_goods' => 'getDangerousGoods'
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
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['lot_number'] = isset($data['lot_number']) ? $data['lot_number'] : null;
        $this->container['serial_number'] = isset($data['serial_number']) ? $data['serial_number'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['description2'] = isset($data['description2']) ? $data['description2'] : null;
        $this->container['description3'] = isset($data['description3']) ? $data['description3'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unit_price'] = isset($data['unit_price']) ? $data['unit_price'] : null;
        $this->container['unit_weight'] = isset($data['unit_weight']) ? $data['unit_weight'] : null;
        $this->container['net_unit_weight'] = isset($data['net_unit_weight']) ? $data['net_unit_weight'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['uom'] = isset($data['uom']) ? $data['uom'] : null;
        $this->container['supplier'] = isset($data['supplier']) ? $data['supplier'] : null;
        $this->container['country_of_origin'] = isset($data['country_of_origin']) ? $data['country_of_origin'] : null;
        $this->container['harmonized_code'] = isset($data['harmonized_code']) ? $data['harmonized_code'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
        $this->container['dangerous_goods'] = isset($data['dangerous_goods']) ? $data['dangerous_goods'] : null;
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
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku Item SKU
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets lot_number
     *
     * @return string
     */
    public function getLotNumber()
    {
        return $this->container['lot_number'];
    }

    /**
     * Sets lot_number
     *
     * @param string $lot_number Optional Lot number
     *
     * @return $this
     */
    public function setLotNumber($lot_number)
    {
        $this->container['lot_number'] = $lot_number;

        return $this;
    }

    /**
     * Gets serial_number
     *
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->container['serial_number'];
    }

    /**
     * Sets serial_number
     *
     * @param string $serial_number Optional serial number
     *
     * @return $this
     */
    public function setSerialNumber($serial_number)
    {
        $this->container['serial_number'] = $serial_number;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Optional description 1
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets description2
     *
     * @return string
     */
    public function getDescription2()
    {
        return $this->container['description2'];
    }

    /**
     * Sets description2
     *
     * @param string $description2 Optional description 2
     *
     * @return $this
     */
    public function setDescription2($description2)
    {
        $this->container['description2'] = $description2;

        return $this;
    }

    /**
     * Gets description3
     *
     * @return string
     */
    public function getDescription3()
    {
        return $this->container['description3'];
    }

    /**
     * Sets description3
     *
     * @param string $description3 Optional description 2
     *
     * @return $this
     */
    public function setDescription3($description3)
    {
        $this->container['description3'] = $description3;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param double $quantity Mandatory quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unit_price
     *
     * @return double
     */
    public function getUnitPrice()
    {
        return $this->container['unit_price'];
    }

    /**
     * Sets unit_price
     *
     * @param double $unit_price Mandatory unit price
     *
     * @return $this
     */
    public function setUnitPrice($unit_price)
    {
        $this->container['unit_price'] = $unit_price;

        return $this;
    }

    /**
     * Gets unit_weight
     *
     * @return double
     */
    public function getUnitWeight()
    {
        return $this->container['unit_weight'];
    }

    /**
     * Sets unit_weight
     *
     * @param double $unit_weight Weight per 1 unit
     *
     * @return $this
     */
    public function setUnitWeight($unit_weight)
    {
        $this->container['unit_weight'] = $unit_weight;

        return $this;
    }

    /**
     * Gets net_unit_weight
     *
     * @return double
     */
    public function getNetUnitWeight()
    {
        return $this->container['net_unit_weight'];
    }

    /**
     * Sets net_unit_weight
     *
     * @param double $net_unit_weight Net weight per 1 unit (for DHL Express)
     *
     * @return $this
     */
    public function setNetUnitWeight($net_unit_weight)
    {
        $this->container['net_unit_weight'] = $net_unit_weight;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return string
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param string $expiration_date Optional expiration date
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets uom
     *
     * @return string
     */
    public function getUom()
    {
        return $this->container['uom'];
    }

    /**
     * Sets uom
     *
     * @param string $uom Mandatory UOM
     *
     * @return $this
     */
    public function setUom($uom)
    {
        $this->container['uom'] = $uom;

        return $this;
    }

    /**
     * Gets supplier
     *
     * @return string
     */
    public function getSupplier()
    {
        return $this->container['supplier'];
    }

    /**
     * Sets supplier
     *
     * @param string $supplier Optional supplier name
     *
     * @return $this
     */
    public function setSupplier($supplier)
    {
        $this->container['supplier'] = $supplier;

        return $this;
    }

    /**
     * Gets country_of_origin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->container['country_of_origin'];
    }

    /**
     * Sets country_of_origin
     *
     * @param string $country_of_origin Country of origin (required for international)
     *
     * @return $this
     */
    public function setCountryOfOrigin($country_of_origin)
    {
        $this->container['country_of_origin'] = $country_of_origin;

        return $this;
    }

    /**
     * Gets harmonized_code
     *
     * @return string
     */
    public function getHarmonizedCode()
    {
        return $this->container['harmonized_code'];
    }

    /**
     * Sets harmonized_code
     *
     * @param string $harmonized_code Harmonized item code (required for some international)
     *
     * @return $this
     */
    public function setHarmonizedCode($harmonized_code)
    {
        $this->container['harmonized_code'] = $harmonized_code;

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
     * @param \Fulfillment\StraightShip\Client\Model\CustomField[] $custom_fields Custom fields to pass with item
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets dangerous_goods
     *
     * @return \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetails
     */
    public function getDangerousGoods()
    {
        return $this->container['dangerous_goods'];
    }

    /**
     * Sets dangerous_goods
     *
     * @param \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetails $dangerous_goods dangerous_goods
     *
     * @return $this
     */
    public function setDangerousGoods($dangerous_goods)
    {
        $this->container['dangerous_goods'] = $dangerous_goods;

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
