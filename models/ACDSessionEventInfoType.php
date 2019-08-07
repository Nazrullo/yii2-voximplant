<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;


class ACDSessionEventInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDSessionEventInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'acd_session_event_id' => 'int',
        'time' => 'string',
        'type' => 'string',
        'user_id' => 'int',
        'custom_data' => 'string'
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
        'acd_session_event_id' => 'acd_session_event_id',
        'time' => 'time',
        'type' => 'type',
        'user_id' => 'user_id',
        'custom_data' => 'custom_data'
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
        'acd_session_event_id' => 'setAcdSessionEventId',
        'time' => 'setTime',
        'type' => 'setType',
        'user_id' => 'setUserId',
        'custom_data' => 'setCustomData'
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
        'acd_session_event_id' => 'getAcdSessionEventId',
        'time' => 'getTime',
        'type' => 'getType',
        'user_id' => 'getUserId',
        'custom_data' => 'getCustomData'
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
        $this->container['acd_session_event_id'] = isset($data['acd_session_event_id']) ? $data['acd_session_event_id'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['acd_session_event_id'] === null) {
            $invalid_properties[] = "'acd_session_event_id' can't be null";
        }
        if ($this->container['time'] === null) {
            $invalid_properties[] = "'time' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
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
        if ($this->container['acd_session_event_id'] === null) {
            return false;
        }
        if ($this->container['time'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets acd_session_event_id
     * @return int
     */
    public function getAcdSessionEventId()
    {
        return $this->container['acd_session_event_id'];
    }

    /**
     * Sets acd_session_event_id
     * @param int $acd_session_event_id The ACD session event ID.
     * @return $this
     */
    public function setAcdSessionEventId($acd_session_event_id)
    {
        $this->container['acd_session_event_id'] = $acd_session_event_id;

        return $this;
    }

    /**
     * Gets time
     * @return string
     */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
     * Sets time
     * @param string $time The UTC start date in format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setTime($time)
    {
        $this->container['time'] = $time;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The event type name.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id The user ID.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets custom_data
     * @return string
     */
    public function getCustomData()
    {
        return $this->container['custom_data'];
    }

    /**
     * Sets custom_data
     * @param string $custom_data The custom data.
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

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


