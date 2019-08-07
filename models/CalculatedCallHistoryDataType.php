<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class CalculatedCallHistoryDataType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CalculatedCallHistoryDataType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'session_count' => 'int',
        'total_session_count' => 'int',
        'timezone' => 'string'
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
        'session_count' => 'session_count',
        'total_session_count' => 'total_session_count',
        'timezone' => 'timezone'
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
        'session_count' => 'setSessionCount',
        'total_session_count' => 'setTotalSessionCount',
        'timezone' => 'setTimezone'
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
        'session_count' => 'getSessionCount',
        'total_session_count' => 'getTotalSessionCount',
        'timezone' => 'getTimezone'
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
        $this->container['session_count'] = isset($data['session_count']) ? $data['session_count'] : null;
        $this->container['total_session_count'] = isset($data['total_session_count']) ? $data['total_session_count'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['session_count'] === null) {
            $invalid_properties[] = "'session_count' can't be null";
        }
        if ($this->container['total_session_count'] === null) {
            $invalid_properties[] = "'total_session_count' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalid_properties[] = "'timezone' can't be null";
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
        if ($this->container['session_count'] === null) {
            return false;
        }
        if ($this->container['total_session_count'] === null) {
            return false;
        }
        if ($this->container['timezone'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets session_count
     * @return int
     */
    public function getSessionCount()
    {
        return $this->container['session_count'];
    }

    /**
     * Sets session_count
     * @param int $session_count The session count in the report.
     * @return $this
     */
    public function setSessionCount($session_count)
    {
        $this->container['session_count'] = $session_count;

        return $this;
    }

    /**
     * Gets total_session_count
     * @return int
     */
    public function getTotalSessionCount()
    {
        return $this->container['total_session_count'];
    }

    /**
     * Sets total_session_count
     * @param int $total_session_count The total found filtered session count.
     * @return $this
     */
    public function setTotalSessionCount($total_session_count)
    {
        $this->container['total_session_count'] = $total_session_count;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone The selected timezone.
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


