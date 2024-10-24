<?php
/**
 * DangerousGoodsDetails
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
 * DangerousGoodsDetails Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DangerousGoodsDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DangerousGoodsDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'dangerous_goods_dhl' => 'Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsDhl[]',
        'dangerous_goods_basic' => 'Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsBasic[]',
        'container_type' => 'string',
        'radioactive_container_class' => 'string',
        'dangerous_goods_fedex' => 'Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsFedex[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'dangerous_goods_dhl' => null,
        'dangerous_goods_basic' => null,
        'container_type' => null,
        'radioactive_container_class' => null,
        'dangerous_goods_fedex' => null
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
        'dangerous_goods_dhl' => 'DangerousGoodsDhl',
        'dangerous_goods_basic' => 'DangerousGoodsBasic',
        'container_type' => 'ContainerType',
        'radioactive_container_class' => 'RadioactiveContainerClass',
        'dangerous_goods_fedex' => 'DangerousGoodsFedex'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dangerous_goods_dhl' => 'setDangerousGoodsDhl',
        'dangerous_goods_basic' => 'setDangerousGoodsBasic',
        'container_type' => 'setContainerType',
        'radioactive_container_class' => 'setRadioactiveContainerClass',
        'dangerous_goods_fedex' => 'setDangerousGoodsFedex'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dangerous_goods_dhl' => 'getDangerousGoodsDhl',
        'dangerous_goods_basic' => 'getDangerousGoodsBasic',
        'container_type' => 'getContainerType',
        'radioactive_container_class' => 'getRadioactiveContainerClass',
        'dangerous_goods_fedex' => 'getDangerousGoodsFedex'
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

    const RADIOACTIVE_CONTAINER_CLASS_EXCEPTED_PACKAGE = 'EXCEPTED_PACKAGE';
    const RADIOACTIVE_CONTAINER_CLASS_INDUSTRIAL_IP1 = 'INDUSTRIAL_IP1';
    const RADIOACTIVE_CONTAINER_CLASS_INDUSTRIAL_IP2 = 'INDUSTRIAL_IP2';
    const RADIOACTIVE_CONTAINER_CLASS_INDUSTRIAL_IP3 = 'INDUSTRIAL_IP3';
    const RADIOACTIVE_CONTAINER_CLASS_TYPE_A = 'TYPE_A';
    const RADIOACTIVE_CONTAINER_CLASS_TYPE_B_M = 'TYPE_B_M';
    const RADIOACTIVE_CONTAINER_CLASS_TYPE_B_U = 'TYPE_B_U';
    const RADIOACTIVE_CONTAINER_CLASS_TYPE_C = 'TYPE_C';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRadioactiveContainerClassAllowableValues()
    {
        return [
            self::RADIOACTIVE_CONTAINER_CLASS_EXCEPTED_PACKAGE,
            self::RADIOACTIVE_CONTAINER_CLASS_INDUSTRIAL_IP1,
            self::RADIOACTIVE_CONTAINER_CLASS_INDUSTRIAL_IP2,
            self::RADIOACTIVE_CONTAINER_CLASS_INDUSTRIAL_IP3,
            self::RADIOACTIVE_CONTAINER_CLASS_TYPE_A,
            self::RADIOACTIVE_CONTAINER_CLASS_TYPE_B_M,
            self::RADIOACTIVE_CONTAINER_CLASS_TYPE_B_U,
            self::RADIOACTIVE_CONTAINER_CLASS_TYPE_C,
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
        $this->container['dangerous_goods_dhl'] = isset($data['dangerous_goods_dhl']) ? $data['dangerous_goods_dhl'] : null;
        $this->container['dangerous_goods_basic'] = isset($data['dangerous_goods_basic']) ? $data['dangerous_goods_basic'] : null;
        $this->container['container_type'] = isset($data['container_type']) ? $data['container_type'] : null;
        $this->container['radioactive_container_class'] = isset($data['radioactive_container_class']) ? $data['radioactive_container_class'] : null;
        $this->container['dangerous_goods_fedex'] = isset($data['dangerous_goods_fedex']) ? $data['dangerous_goods_fedex'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getRadioactiveContainerClassAllowableValues();
        if (!is_null($this->container['radioactive_container_class']) && !in_array($this->container['radioactive_container_class'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'radioactive_container_class', must be one of '%s'",
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
     * Gets dangerous_goods_dhl
     *
     * @return \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsDhl[]
     */
    public function getDangerousGoodsDhl()
    {
        return $this->container['dangerous_goods_dhl'];
    }

    /**
     * Sets dangerous_goods_dhl
     *
     * @param \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsDhl[] $dangerous_goods_dhl List of dangerous goods used with DHL carrier
     *
     * @return $this
     */
    public function setDangerousGoodsDhl($dangerous_goods_dhl)
    {
        $this->container['dangerous_goods_dhl'] = $dangerous_goods_dhl;

        return $this;
    }

    /**
     * Gets dangerous_goods_basic
     *
     * @return \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsBasic[]
     */
    public function getDangerousGoodsBasic()
    {
        return $this->container['dangerous_goods_basic'];
    }

    /**
     * Sets dangerous_goods_basic
     *
     * @param \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsBasic[] $dangerous_goods_basic List of dangerous goods used for generating basic DG form
     *
     * @return $this
     */
    public function setDangerousGoodsBasic($dangerous_goods_basic)
    {
        $this->container['dangerous_goods_basic'] = $dangerous_goods_basic;

        return $this;
    }

    /**
     * Gets container_type
     *
     * @return string
     */
    public function getContainerType()
    {
        return $this->container['container_type'];
    }

    /**
     * Sets container_type
     *
     * @param string $container_type Container type  The type of package used to contain the regulated good. (Ex: Fiberboard Box). Required if CommodityRegulatedLevelCode = LQ or FR.  Ex. FIBERBOARD BOX, WOOD(EN) BOX, PLASTIC JERRICAN, METAL BOX, STEEL DRUM, OTHER, PLASTIC BOX, PLASTIC DRUM, STYROFOAM BOX, CYLINDERS, ENVIROTAINER, PLYWOOD BOX, ALUMINUM DRUM, ALUMINUM CYLINDERS, PLASTIC PAIL, PLYWOOD DRUM, FIBER DRUM, STEEL JERRICAN, ALUMINUM JERRICAN, STEEL BOX, CARTON, ALUMINUM BOX
     *
     * @return $this
     */
    public function setContainerType($container_type)
    {
        $this->container['container_type'] = $container_type;

        return $this;
    }

    /**
     * Gets radioactive_container_class
     *
     * @return string
     */
    public function getRadioactiveContainerClass()
    {
        return $this->container['radioactive_container_class'];
    }

    /**
     * Sets radioactive_container_class
     *
     * @param string $radioactive_container_class Container class for radioactive materials  Leave null if shipping non-radioactive
     *
     * @return $this
     */
    public function setRadioactiveContainerClass($radioactive_container_class)
    {
        $allowedValues = $this->getRadioactiveContainerClassAllowableValues();
        if (!is_null($radioactive_container_class) && !in_array($radioactive_container_class, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'radioactive_container_class', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['radioactive_container_class'] = $radioactive_container_class;

        return $this;
    }

    /**
     * Gets dangerous_goods_fedex
     *
     * @return \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsFedex[]
     */
    public function getDangerousGoodsFedex()
    {
        return $this->container['dangerous_goods_fedex'];
    }

    /**
     * Sets dangerous_goods_fedex
     *
     * @param \Fulfillment\StraightShip\Client\Model\DangerousGoodsDetailsFedex[] $dangerous_goods_fedex List of dangerous goods used with Fedex carrier
     *
     * @return $this
     */
    public function setDangerousGoodsFedex($dangerous_goods_fedex)
    {
        $this->container['dangerous_goods_fedex'] = $dangerous_goods_fedex;

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
