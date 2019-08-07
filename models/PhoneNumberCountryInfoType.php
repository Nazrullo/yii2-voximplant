<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class PhoneNumberCountryInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PhoneNumberCountryInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'country_code' => 'string',
        'phone_prefix' => 'string',
        'can_list_phone_numbers' => 'bool',
        'phone_categories' => '\backend\modules\voximplant\models\PhoneNumberCountryCategoryInfoType[]'
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
        'country_code' => 'country_code',
        'phone_prefix' => 'phone_prefix',
        'can_list_phone_numbers' => 'can_list_phone_numbers',
        'phone_categories' => 'phone_categories'
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
        'country_code' => 'setCountryCode',
        'phone_prefix' => 'setPhonePrefix',
        'can_list_phone_numbers' => 'setCanListPhoneNumbers',
        'phone_categories' => 'setPhoneCategories'
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
        'country_code' => 'getCountryCode',
        'phone_prefix' => 'getPhonePrefix',
        'can_list_phone_numbers' => 'getCanListPhoneNumbers',
        'phone_categories' => 'getPhoneCategories'
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
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['phone_prefix'] = isset($data['phone_prefix']) ? $data['phone_prefix'] : null;
        $this->container['can_list_phone_numbers'] = isset($data['can_list_phone_numbers']) ? $data['can_list_phone_numbers'] : null;
        $this->container['phone_categories'] = isset($data['phone_categories']) ? $data['phone_categories'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['country_code'] === null) {
            $invalid_properties[] = "'country_code' can't be null";
        }
        if ($this->container['phone_prefix'] === null) {
            $invalid_properties[] = "'phone_prefix' can't be null";
        }
        if ($this->container['can_list_phone_numbers'] === null) {
            $invalid_properties[] = "'can_list_phone_numbers' can't be null";
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
        if ($this->container['country_code'] === null) {
            return false;
        }
        if ($this->container['phone_prefix'] === null) {
            return false;
        }
        if ($this->container['can_list_phone_numbers'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code The country code.
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone_prefix
     * @return string
     */
    public function getPhonePrefix()
    {
        return $this->container['phone_prefix'];
    }

    /**
     * Sets phone_prefix
     * @param string $phone_prefix The country phone prefix.
     * @return $this
     */
    public function setPhonePrefix($phone_prefix)
    {
        $this->container['phone_prefix'] = $phone_prefix;

        return $this;
    }

    /**
     * Gets can_list_phone_numbers
     * @return bool
     */
    public function getCanListPhoneNumbers()
    {
        return $this->container['can_list_phone_numbers'];
    }

    /**
     * Sets can_list_phone_numbers
     * @param bool $can_list_phone_numbers True if can list phone numbers.
     * @return $this
     */
    public function setCanListPhoneNumbers($can_list_phone_numbers)
    {
        $this->container['can_list_phone_numbers'] = $can_list_phone_numbers;

        return $this;
    }

    /**
     * Gets phone_categories
     * @return \backend\modules\voximplant\models\PhoneNumberCountryCategoryInfoType[]
     */
    public function getPhoneCategories()
    {
        return $this->container['phone_categories'];
    }

    /**
     * Sets phone_categories
     * @param \backend\modules\voximplant\models\PhoneNumberCountryCategoryInfoType[] $phone_categories
     * @return $this
     */
    public function setPhoneCategories($phone_categories)
    {
        $this->container['phone_categories'] = $phone_categories;

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


