<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class ChargedPhoneType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ChargedPhoneType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'phone_id' => 'int',
        'phone_number' => 'string',
        'deactivated' => 'bool',
        'is_charged' => 'bool'
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
        'deactivated' => 'deactivated',
        'is_charged' => 'is_charged'
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
        'deactivated' => 'setDeactivated',
        'is_charged' => 'setIsCharged'
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
        'deactivated' => 'getDeactivated',
        'is_charged' => 'getIsCharged'
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
        $this->container['deactivated'] = isset($data['deactivated']) ? $data['deactivated'] : null;
        $this->container['is_charged'] = isset($data['is_charged']) ? $data['is_charged'] : null;
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
        if ($this->container['deactivated'] === null) {
            $invalid_properties[] = "'deactivated' can't be null";
        }
        if ($this->container['is_charged'] === null) {
            $invalid_properties[] = "'is_charged' can't be null";
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
        if ($this->container['deactivated'] === null) {
            return false;
        }
        if ($this->container['is_charged'] === null) {
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
     * Gets deactivated
     * @return bool
     */
    public function getDeactivated()
    {
        return $this->container['deactivated'];
    }

    /**
     * Sets deactivated
     * @param bool $deactivated Is subscription frozen?
     * @return $this
     */
    public function setDeactivated($deactivated)
    {
        $this->container['deactivated'] = $deactivated;

        return $this;
    }

    /**
     * Gets is_charged
     * @return bool
     */
    public function getIsCharged()
    {
        return $this->container['is_charged'];
    }

    /**
     * Sets is_charged
     * @param bool $is_charged Has phone been charged?
     * @return $this
     */
    public function setIsCharged($is_charged)
    {
        $this->container['is_charged'] = $is_charged;

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


