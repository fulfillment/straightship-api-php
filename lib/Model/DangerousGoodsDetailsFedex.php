<?php
/**
 * DangerousGoodsDetailsFedex
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
 * DangerousGoodsDetailsFedex Class Doc Comment
 *
 * @category Class
 * @package  namespace Fulfillment\StraightShip\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DangerousGoodsDetailsFedex implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DangerousGoodsDetailsFedex';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id_number' => 'string',
        'packing_group' => 'string',
        'cargo_aircraft_only' => 'bool',
        'packing_instructions' => 'string',
        'proper_shipping_name' => 'string',
        'technical_name' => 'string',
        'hazard_class' => 'string',
        'quantity' => 'double',
        'quantity_type' => 'string',
        'units' => 'string',
        'authorization' => 'string',
        'label_text' => 'string',
        'reportable_quantity' => 'bool',
        'subsidiary_classes' => 'string[]',
        'label_text_options' => 'string',
        'customer_supplied_label_text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id_number' => null,
        'packing_group' => null,
        'cargo_aircraft_only' => null,
        'packing_instructions' => null,
        'proper_shipping_name' => null,
        'technical_name' => null,
        'hazard_class' => null,
        'quantity' => 'double',
        'quantity_type' => null,
        'units' => null,
        'authorization' => null,
        'label_text' => null,
        'reportable_quantity' => null,
        'subsidiary_classes' => null,
        'label_text_options' => null,
        'customer_supplied_label_text' => null
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
        'id_number' => 'IDNumber',
        'packing_group' => 'PackingGroup',
        'cargo_aircraft_only' => 'CargoAircraftOnly',
        'packing_instructions' => 'PackingInstructions',
        'proper_shipping_name' => 'ProperShippingName',
        'technical_name' => 'TechnicalName',
        'hazard_class' => 'HazardClass',
        'quantity' => 'Quantity',
        'quantity_type' => 'QuantityType',
        'units' => 'Units',
        'authorization' => 'Authorization',
        'label_text' => 'LabelText',
        'reportable_quantity' => 'ReportableQuantity',
        'subsidiary_classes' => 'SubsidiaryClasses',
        'label_text_options' => 'LabelTextOptions',
        'customer_supplied_label_text' => 'CustomerSuppliedLabelText'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_number' => 'setIdNumber',
        'packing_group' => 'setPackingGroup',
        'cargo_aircraft_only' => 'setCargoAircraftOnly',
        'packing_instructions' => 'setPackingInstructions',
        'proper_shipping_name' => 'setProperShippingName',
        'technical_name' => 'setTechnicalName',
        'hazard_class' => 'setHazardClass',
        'quantity' => 'setQuantity',
        'quantity_type' => 'setQuantityType',
        'units' => 'setUnits',
        'authorization' => 'setAuthorization',
        'label_text' => 'setLabelText',
        'reportable_quantity' => 'setReportableQuantity',
        'subsidiary_classes' => 'setSubsidiaryClasses',
        'label_text_options' => 'setLabelTextOptions',
        'customer_supplied_label_text' => 'setCustomerSuppliedLabelText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_number' => 'getIdNumber',
        'packing_group' => 'getPackingGroup',
        'cargo_aircraft_only' => 'getCargoAircraftOnly',
        'packing_instructions' => 'getPackingInstructions',
        'proper_shipping_name' => 'getProperShippingName',
        'technical_name' => 'getTechnicalName',
        'hazard_class' => 'getHazardClass',
        'quantity' => 'getQuantity',
        'quantity_type' => 'getQuantityType',
        'units' => 'getUnits',
        'authorization' => 'getAuthorization',
        'label_text' => 'getLabelText',
        'reportable_quantity' => 'getReportableQuantity',
        'subsidiary_classes' => 'getSubsidiaryClasses',
        'label_text_options' => 'getLabelTextOptions',
        'customer_supplied_label_text' => 'getCustomerSuppliedLabelText'
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

    const PACKING_GROUP_I = 'I';
    const PACKING_GROUP_II = 'II';
    const PACKING_GROUP_III = 'III';
    const QUANTITY_TYPE_GROSS = 'GROSS';
    const QUANTITY_TYPE_NET = 'NET';
    const LABEL_TEXT_OPTIONS_APPEND = 'APPEND';
    const LABEL_TEXT_OPTIONS_OVERRIDE = 'OVERRIDE';
    const LABEL_TEXT_OPTIONS_STANDARD = 'STANDARD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPackingGroupAllowableValues()
    {
        return [
            self::PACKING_GROUP_I,
            self::PACKING_GROUP_II,
            self::PACKING_GROUP_III,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getQuantityTypeAllowableValues()
    {
        return [
            self::QUANTITY_TYPE_GROSS,
            self::QUANTITY_TYPE_NET,
        ];
    }
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLabelTextOptionsAllowableValues()
    {
        return [
            self::LABEL_TEXT_OPTIONS_APPEND,
            self::LABEL_TEXT_OPTIONS_OVERRIDE,
            self::LABEL_TEXT_OPTIONS_STANDARD,
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
        $this->container['id_number'] = isset($data['id_number']) ? $data['id_number'] : null;
        $this->container['packing_group'] = isset($data['packing_group']) ? $data['packing_group'] : null;
        $this->container['cargo_aircraft_only'] = isset($data['cargo_aircraft_only']) ? $data['cargo_aircraft_only'] : null;
        $this->container['packing_instructions'] = isset($data['packing_instructions']) ? $data['packing_instructions'] : null;
        $this->container['proper_shipping_name'] = isset($data['proper_shipping_name']) ? $data['proper_shipping_name'] : null;
        $this->container['technical_name'] = isset($data['technical_name']) ? $data['technical_name'] : null;
        $this->container['hazard_class'] = isset($data['hazard_class']) ? $data['hazard_class'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['quantity_type'] = isset($data['quantity_type']) ? $data['quantity_type'] : null;
        $this->container['units'] = isset($data['units']) ? $data['units'] : null;
        $this->container['authorization'] = isset($data['authorization']) ? $data['authorization'] : null;
        $this->container['label_text'] = isset($data['label_text']) ? $data['label_text'] : null;
        $this->container['reportable_quantity'] = isset($data['reportable_quantity']) ? $data['reportable_quantity'] : null;
        $this->container['subsidiary_classes'] = isset($data['subsidiary_classes']) ? $data['subsidiary_classes'] : null;
        $this->container['label_text_options'] = isset($data['label_text_options']) ? $data['label_text_options'] : null;
        $this->container['customer_supplied_label_text'] = isset($data['customer_supplied_label_text']) ? $data['customer_supplied_label_text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPackingGroupAllowableValues();
        if (!is_null($this->container['packing_group']) && !in_array($this->container['packing_group'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'packing_group', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getQuantityTypeAllowableValues();
        if (!is_null($this->container['quantity_type']) && !in_array($this->container['quantity_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'quantity_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getLabelTextOptionsAllowableValues();
        if (!is_null($this->container['label_text_options']) && !in_array($this->container['label_text_options'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'label_text_options', must be one of '%s'",
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
     * Gets id_number
     *
     * @return string
     */
    public function getIdNumber()
    {
        return $this->container['id_number'];
    }

    /**
     * Sets id_number
     *
     * @param string $id_number Regulatory identifier for a commodity (e.g. \"UN ID\" value).
     *
     * @return $this
     */
    public function setIdNumber($id_number)
    {
        $this->container['id_number'] = $id_number;

        return $this;
    }

    /**
     * Gets packing_group
     *
     * @return string
     */
    public function getPackingGroup()
    {
        return $this->container['packing_group'];
    }

    /**
     * Sets packing_group
     *
     * @param string $packing_group Packing group  Hazardous material packaging group.
     *
     * @return $this
     */
    public function setPackingGroup($packing_group)
    {
        $allowedValues = $this->getPackingGroupAllowableValues();
        if (!is_null($packing_group) && !in_array($packing_group, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'packing_group', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['packing_group'] = $packing_group;

        return $this;
    }

    /**
     * Gets cargo_aircraft_only
     *
     * @return bool
     */
    public function getCargoAircraftOnly()
    {
        return $this->container['cargo_aircraft_only'];
    }

    /**
     * Sets cargo_aircraft_only
     *
     * @param bool $cargo_aircraft_only Cargo aircraft only
     *
     * @return $this
     */
    public function setCargoAircraftOnly($cargo_aircraft_only)
    {
        $this->container['cargo_aircraft_only'] = $cargo_aircraft_only;

        return $this;
    }

    /**
     * Gets packing_instructions
     *
     * @return string
     */
    public function getPackingInstructions()
    {
        return $this->container['packing_instructions'];
    }

    /**
     * Sets packing_instructions
     *
     * @param string $packing_instructions Packing instructions  Coded specification for how commodity is to be packed.
     *
     * @return $this
     */
    public function setPackingInstructions($packing_instructions)
    {
        $this->container['packing_instructions'] = $packing_instructions;

        return $this;
    }

    /**
     * Gets proper_shipping_name
     *
     * @return string
     */
    public function getProperShippingName()
    {
        return $this->container['proper_shipping_name'];
    }

    /**
     * Sets proper_shipping_name
     *
     * @param string $proper_shipping_name Proper shipping name  Hazardous material proper shipping name. Up to three description lines of 50 characters each are allowed for a HazMat shipment. These description elements are formatted on the OP950 form in 25-character columns (up to 6 printed lines).
     *
     * @return $this
     */
    public function setProperShippingName($proper_shipping_name)
    {
        $this->container['proper_shipping_name'] = $proper_shipping_name;

        return $this;
    }

    /**
     * Gets technical_name
     *
     * @return string
     */
    public function getTechnicalName()
    {
        return $this->container['technical_name'];
    }

    /**
     * Sets technical_name
     *
     * @param string $technical_name Technical name  Technical name for Hazardous material.
     *
     * @return $this
     */
    public function setTechnicalName($technical_name)
    {
        $this->container['technical_name'] = $technical_name;

        return $this;
    }

    /**
     * Gets hazard_class
     *
     * @return string
     */
    public function getHazardClass()
    {
        return $this->container['hazard_class'];
    }

    /**
     * Sets hazard_class
     *
     * @param string $hazard_class Hazard class  DOT hazardous material class or division.
     *
     * @return $this
     */
    public function setHazardClass($hazard_class)
    {
        $this->container['hazard_class'] = $hazard_class;

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
     * @param double $quantity Quantity of hazmat material per 1 container
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets quantity_type
     *
     * @return string
     */
    public function getQuantityType()
    {
        return $this->container['quantity_type'];
    }

    /**
     * Sets quantity_type
     *
     * @param string $quantity_type Type for `Quantity`
     *
     * @return $this
     */
    public function setQuantityType($quantity_type)
    {
        $allowedValues = $this->getQuantityTypeAllowableValues();
        if (!is_null($quantity_type) && !in_array($quantity_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'quantity_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['quantity_type'] = $quantity_type;

        return $this;
    }

    /**
     * Gets units
     *
     * @return string
     */
    public function getUnits()
    {
        return $this->container['units'];
    }

    /**
     * Sets units
     *
     * @param string $units Units
     *
     * @return $this
     */
    public function setUnits($units)
    {
        $this->container['units'] = $units;

        return $this;
    }

    /**
     * Gets authorization
     *
     * @return string
     */
    public function getAuthorization()
    {
        return $this->container['authorization'];
    }

    /**
     * Sets authorization
     *
     * @param string $authorization Authorization
     *
     * @return $this
     */
    public function setAuthorization($authorization)
    {
        $this->container['authorization'] = $authorization;

        return $this;
    }

    /**
     * Gets label_text
     *
     * @return string
     */
    public function getLabelText()
    {
        return $this->container['label_text'];
    }

    /**
     * Sets label_text
     *
     * @param string $label_text Label text
     *
     * @return $this
     */
    public function setLabelText($label_text)
    {
        $this->container['label_text'] = $label_text;

        return $this;
    }

    /**
     * Gets reportable_quantity
     *
     * @return bool
     */
    public function getReportableQuantity()
    {
        return $this->container['reportable_quantity'];
    }

    /**
     * Sets reportable_quantity
     *
     * @param bool $reportable_quantity Is reportable quantity
     *
     * @return $this
     */
    public function setReportableQuantity($reportable_quantity)
    {
        $this->container['reportable_quantity'] = $reportable_quantity;

        return $this;
    }

    /**
     * Gets subsidiary_classes
     *
     * @return string[]
     */
    public function getSubsidiaryClasses()
    {
        return $this->container['subsidiary_classes'];
    }

    /**
     * Sets subsidiary_classes
     *
     * @param string[] $subsidiary_classes Hazmat subsidiary classes
     *
     * @return $this
     */
    public function setSubsidiaryClasses($subsidiary_classes)
    {
        $this->container['subsidiary_classes'] = $subsidiary_classes;

        return $this;
    }

    /**
     * Gets label_text_options
     *
     * @return string
     */
    public function getLabelTextOptions()
    {
        return $this->container['label_text_options'];
    }

    /**
     * Sets label_text_options
     *
     * @param string $label_text_options Optional label text options for custom label override
     *
     * @return $this
     */
    public function setLabelTextOptions($label_text_options)
    {
        $allowedValues = $this->getLabelTextOptionsAllowableValues();
        if (!is_null($label_text_options) && !in_array($label_text_options, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'label_text_options', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['label_text_options'] = $label_text_options;

        return $this;
    }

    /**
     * Gets customer_supplied_label_text
     *
     * @return string
     */
    public function getCustomerSuppliedLabelText()
    {
        return $this->container['customer_supplied_label_text'];
    }

    /**
     * Sets customer_supplied_label_text
     *
     * @param string $customer_supplied_label_text Customer supplied label text, used with `LabelTextOptions`
     *
     * @return $this
     */
    public function setCustomerSuppliedLabelText($customer_supplied_label_text)
    {
        $this->container['customer_supplied_label_text'] = $customer_supplied_label_text;

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
