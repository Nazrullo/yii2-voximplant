<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class RegulationRegionRecord implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RegulationRegionRecord';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'phone_region_id' => 'int',
        'phone_region_name' => 'string',
        'phone_region_code' => 'string',
        'is_need_regulation_address' => 'bool',
        'regulation_address_type' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'phone_region_id' => 'phone_region_id',
        'phone_region_name' => 'phone_region_name',
        'phone_region_code' => 'phone_region_code',
        'is_need_regulation_address' => 'is_need_regulation_address',
        'regulation_address_type' => 'regulation_address_type'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'phone_region_id' => 'setPhoneRegionId',
        'phone_region_name' => 'setPhoneRegionName',
        'phone_region_code' => 'setPhoneRegionCode',
        'is_need_regulation_address' => 'setIsNeedRegulationAddress',
        'regulation_address_type' => 'setRegulationAddressType'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'phone_region_id' => 'getPhoneRegionId',
        'phone_region_name' => 'getPhoneRegionName',
        'phone_region_code' => 'getPhoneRegionCode',
        'is_need_regulation_address' => 'getIsNeedRegulationAddress',
        'regulation_address_type' => 'getRegulationAddressType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['phone_region_id'] = isset($data['phone_region_id']) ? $data['phone_region_id'] : null;
        $this->container['phone_region_name'] = isset($data['phone_region_name']) ? $data['phone_region_name'] : null;
        $this->container['phone_region_code'] = isset($data['phone_region_code']) ? $data['phone_region_code'] : null;
        $this->container['is_need_regulation_address'] = isset($data['is_need_regulation_address']) ? $data['is_need_regulation_address'] : null;
        $this->container['regulation_address_type'] = isset($data['regulation_address_type']) ? $data['regulation_address_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['phone_region_id'] === null) {
            $invalid_properties[] = "'phone_region_id' can't be null";
        }
        if ($this->container['phone_region_name'] === null) {
            $invalid_properties[] = "'phone_region_name' can't be null";
        }
        if ($this->container['phone_region_code'] === null) {
            $invalid_properties[] = "'phone_region_code' can't be null";
        }
        if ($this->container['is_need_regulation_address'] === null) {
            $invalid_properties[] = "'is_need_regulation_address' can't be null";
        }
        if ($this->container['regulation_address_type'] === null) {
            $invalid_properties[] = "'regulation_address_type' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['phone_region_id'] === null) {
            return false;
        }
        if ($this->container['phone_region_name'] === null) {
            return false;
        }
        if ($this->container['phone_region_code'] === null) {
            return false;
        }
        if ($this->container['is_need_regulation_address'] === null) {
            return false;
        }
        if ($this->container['regulation_address_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets phone_region_id
     * @return int
     */
    public function getPhoneRegionId()
    {
        return $this->container['phone_region_id'];
    }

    /**
     * Sets phone_region_id
     * @param int $phone_region_id The regulation address ID.
     * @return $this
     */
    public function setPhoneRegionId($phone_region_id)
    {
        $this->container['phone_region_id'] = $phone_region_id;

        return $this;
    }

    /**
     * Gets phone_region_name
     * @return string
     */
    public function getPhoneRegionName()
    {
        return $this->container['phone_region_name'];
    }

    /**
     * Sets phone_region_name
     * @param string $phone_region_name The region name
     * @return $this
     */
    public function setPhoneRegionName($phone_region_name)
    {
        $this->container['phone_region_name'] = $phone_region_name;

        return $this;
    }

    /**
     * Gets phone_region_code
     * @return string
     */
    public function getPhoneRegionCode()
    {
        return $this->container['phone_region_code'];
    }

    /**
     * Sets phone_region_code
     * @param string $phone_region_code The phone region code
     * @return $this
     */
    public function setPhoneRegionCode($phone_region_code)
    {
        $this->container['phone_region_code'] = $phone_region_code;

        return $this;
    }

    /**
     * Gets is_need_regulation_address
     * @return bool
     */
    public function getIsNeedRegulationAddress()
    {
        return $this->container['is_need_regulation_address'];
    }

    /**
     * Sets is_need_regulation_address
     * @param bool $is_need_regulation_address The need to confirm the address
     * @return $this
     */
    public function setIsNeedRegulationAddress($is_need_regulation_address)
    {
        $this->container['is_need_regulation_address'] = $is_need_regulation_address;

        return $this;
    }

    /**
     * Gets regulation_address_type
     * @return string
     */
    public function getRegulationAddressType()
    {
        return $this->container['regulation_address_type'];
    }

    /**
     * Sets regulation_address_type
     * @param string $regulation_address_type The regulation address type. Availible: LOCAL, NATIONAL, WORLDWIDE
     * @return $this
     */
    public function setRegulationAddressType($regulation_address_type)
    {
        $this->container['regulation_address_type'] = $regulation_address_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\backend\modules\voximplant\lib\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\backend\modules\voximplant\lib\ObjectSerializer::sanitizeForSerialization($this));
    }
}


