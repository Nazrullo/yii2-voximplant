<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class PstnBlackListInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PstnBlackListInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'pstn_blacklist_id' => 'int',
        'pstn_blacklist_phone_' => 'string'
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
        'pstn_blacklist_id' => 'pstn_blacklist_id',
        'pstn_blacklist_phone_' => 'pstn_blacklist_phone '
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
        'pstn_blacklist_id' => 'setPstnBlacklistId',
        'pstn_blacklist_phone_' => 'setPstnBlacklistPhone_'
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
        'pstn_blacklist_id' => 'getPstnBlacklistId',
        'pstn_blacklist_phone_' => 'getPstnBlacklistPhone_'
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
        $this->container['pstn_blacklist_id'] = isset($data['pstn_blacklist_id']) ? $data['pstn_blacklist_id'] : null;
        $this->container['pstn_blacklist_phone_'] = isset($data['pstn_blacklist_phone_']) ? $data['pstn_blacklist_phone_'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['pstn_blacklist_id'] === null) {
            $invalid_properties[] = "'pstn_blacklist_id' can't be null";
        }
        if ($this->container['pstn_blacklist_phone_'] === null) {
            $invalid_properties[] = "'pstn_blacklist_phone_' can't be null";
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
        if ($this->container['pstn_blacklist_id'] === null) {
            return false;
        }
        if ($this->container['pstn_blacklist_phone_'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets pstn_blacklist_id
     * @return int
     */
    public function getPstnBlacklistId()
    {
        return $this->container['pstn_blacklist_id'];
    }

    /**
     * Sets pstn_blacklist_id
     * @param int $pstn_blacklist_id The black list item ID.
     * @return $this
     */
    public function setPstnBlacklistId($pstn_blacklist_id)
    {
        $this->container['pstn_blacklist_id'] = $pstn_blacklist_id;

        return $this;
    }

    /**
     * Gets pstn_blacklist_phone_
     * @return string
     */
    public function getPstnBlacklistPhone_()
    {
        return $this->container['pstn_blacklist_phone_'];
    }

    /**
     * Sets pstn_blacklist_phone_
     * @param string $pstn_blacklist_phone_ The phone number.
     * @return $this
     */
    public function setPstnBlacklistPhone_($pstn_blacklist_phone_)
    {
        $this->container['pstn_blacklist_phone_'] = $pstn_blacklist_phone_;

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


