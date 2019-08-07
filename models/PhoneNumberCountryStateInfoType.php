<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class PhoneNumberCountryStateInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PhoneNumberCountryStateInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'country_state' => 'string',
        'country_state_name' => 'string'
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
        'country_state' => 'country_state',
        'country_state_name' => 'country_state_name'
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
        'country_state' => 'setCountryState',
        'country_state_name' => 'setCountryStateName'
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
        'country_state' => 'getCountryState',
        'country_state_name' => 'getCountryStateName'
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
        $this->container['country_state'] = isset($data['country_state']) ? $data['country_state'] : null;
        $this->container['country_state_name'] = isset($data['country_state_name']) ? $data['country_state_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['country_state'] === null) {
            $invalid_properties[] = "'country_state' can't be null";
        }
        if ($this->container['country_state_name'] === null) {
            $invalid_properties[] = "'country_state_name' can't be null";
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
        if ($this->container['country_state'] === null) {
            return false;
        }
        if ($this->container['country_state_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets country_state
     * @return string
     */
    public function getCountryState()
    {
        return $this->container['country_state'];
    }

    /**
     * Sets country_state
     * @param string $country_state The country state code.
     * @return $this
     */
    public function setCountryState($country_state)
    {
        $this->container['country_state'] = $country_state;

        return $this;
    }

    /**
     * Gets country_state_name
     * @return string
     */
    public function getCountryStateName()
    {
        return $this->container['country_state_name'];
    }

    /**
     * Sets country_state_name
     * @param string $country_state_name The full country state name.
     * @return $this
     */
    public function setCountryStateName($country_state_name)
    {
        $this->container['country_state_name'] = $country_state_name;

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


