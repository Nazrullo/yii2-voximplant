<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class NewPhoneInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NewPhoneInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'phone_id' => 'int',
        'phone_number' => 'string',
        'phone_price' => 'int',
        'phone_installation_price' => 'int',
        'phone_country_code' => 'string',
        'phone_period' => 'string'
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
        'phone_id' => 'phone_id',
        'phone_number' => 'phone_number',
        'phone_price' => 'phone_price',
        'phone_installation_price' => 'phone_installation_price',
        'phone_country_code' => 'phone_country_code',
        'phone_period' => 'phone_period'
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
        'phone_id' => 'setPhoneId',
        'phone_number' => 'setPhoneNumber',
        'phone_price' => 'setPhonePrice',
        'phone_installation_price' => 'setPhoneInstallationPrice',
        'phone_country_code' => 'setPhoneCountryCode',
        'phone_period' => 'setPhonePeriod'
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
        'phone_id' => 'getPhoneId',
        'phone_number' => 'getPhoneNumber',
        'phone_price' => 'getPhonePrice',
        'phone_installation_price' => 'getPhoneInstallationPrice',
        'phone_country_code' => 'getPhoneCountryCode',
        'phone_period' => 'getPhonePeriod'
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
        $this->container['phone_id'] = isset($data['phone_id']) ? $data['phone_id'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_price'] = isset($data['phone_price']) ? $data['phone_price'] : null;
        $this->container['phone_installation_price'] = isset($data['phone_installation_price']) ? $data['phone_installation_price'] : null;
        $this->container['phone_country_code'] = isset($data['phone_country_code']) ? $data['phone_country_code'] : null;
        $this->container['phone_period'] = isset($data['phone_period']) ? $data['phone_period'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['phone_id'] === null) {
            $invalid_properties[] = "'phone_id' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalid_properties[] = "'phone_number' can't be null";
        }
        if ($this->container['phone_price'] === null) {
            $invalid_properties[] = "'phone_price' can't be null";
        }
        if ($this->container['phone_installation_price'] === null) {
            $invalid_properties[] = "'phone_installation_price' can't be null";
        }
        if ($this->container['phone_country_code'] === null) {
            $invalid_properties[] = "'phone_country_code' can't be null";
        }
        if ($this->container['phone_period'] === null) {
            $invalid_properties[] = "'phone_period' can't be null";
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
        if ($this->container['phone_id'] === null) {
            return false;
        }
        if ($this->container['phone_number'] === null) {
            return false;
        }
        if ($this->container['phone_price'] === null) {
            return false;
        }
        if ($this->container['phone_installation_price'] === null) {
            return false;
        }
        if ($this->container['phone_country_code'] === null) {
            return false;
        }
        if ($this->container['phone_period'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets phone_id
     * @return int
     */
    public function getPhoneId()
    {
        return $this->container['phone_id'];
    }

    /**
     * Sets phone_id
     * @param int $phone_id The phone ID.
     * @return $this
     */
    public function setPhoneId($phone_id)
    {
        $this->container['phone_id'] = $phone_id;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number The phone number.
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_price
     * @return int
     */
    public function getPhonePrice()
    {
        return $this->container['phone_price'];
    }

    /**
     * Sets phone_price
     * @param int $phone_price The phone periodic price.
     * @return $this
     */
    public function setPhonePrice($phone_price)
    {
        $this->container['phone_price'] = $phone_price;

        return $this;
    }

    /**
     * Gets phone_installation_price
     * @return int
     */
    public function getPhoneInstallationPrice()
    {
        return $this->container['phone_installation_price'];
    }

    /**
     * Sets phone_installation_price
     * @param int $phone_installation_price The phone installation price (without the first periodic price).
     * @return $this
     */
    public function setPhoneInstallationPrice($phone_installation_price)
    {
        $this->container['phone_installation_price'] = $phone_installation_price;

        return $this;
    }

    /**
     * Gets phone_country_code
     * @return string
     */
    public function getPhoneCountryCode()
    {
        return $this->container['phone_country_code'];
    }

    /**
     * Sets phone_country_code
     * @param string $phone_country_code The phone country code (2 symbols).
     * @return $this
     */
    public function setPhoneCountryCode($phone_country_code)
    {
        $this->container['phone_country_code'] = $phone_country_code;

        return $this;
    }

    /**
     * Gets phone_period
     * @return string
     */
    public function getPhonePeriod()
    {
        return $this->container['phone_period'];
    }

    /**
     * Sets phone_period
     * @param string $phone_period The charge period in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setPhonePeriod($phone_period)
    {
        $this->container['phone_period'] = $phone_period;

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


