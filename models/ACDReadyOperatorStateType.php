<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class ACDReadyOperatorStateType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDReadyOperatorStateType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'user_id' => 'int',
        'user_name' => 'string',
        'user_display_name' => 'string',
        'idle_duration' => 'int'
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
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'user_display_name' => 'user_display_name',
        'idle_duration' => 'idle_duration'
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
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'user_display_name' => 'setUserDisplayName',
        'idle_duration' => 'setIdleDuration'
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
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'user_display_name' => 'getUserDisplayName',
        'idle_duration' => 'getIdleDuration'
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
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['user_display_name'] = isset($data['user_display_name']) ? $data['user_display_name'] : null;
        $this->container['idle_duration'] = isset($data['idle_duration']) ? $data['idle_duration'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['user_name'] === null) {
            $invalid_properties[] = "'user_name' can't be null";
        }
        if ($this->container['user_display_name'] === null) {
            $invalid_properties[] = "'user_display_name' can't be null";
        }
        if ($this->container['idle_duration'] === null) {
            $invalid_properties[] = "'idle_duration' can't be null";
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
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['user_name'] === null) {
            return false;
        }
        if ($this->container['user_display_name'] === null) {
            return false;
        }
        if ($this->container['idle_duration'] === null) {
            return false;
        }
        return true;
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
     * @param int $user_id The user ID of the operator.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     * @return string
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param string $user_name The user name of the operator.
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets user_display_name
     * @return string
     */
    public function getUserDisplayName()
    {
        return $this->container['user_display_name'];
    }

    /**
     * Sets user_display_name
     * @param string $user_display_name The display user name of the operator.
     * @return $this
     */
    public function setUserDisplayName($user_display_name)
    {
        $this->container['user_display_name'] = $user_display_name;

        return $this;
    }

    /**
     * Gets idle_duration
     * @return int
     */
    public function getIdleDuration()
    {
        return $this->container['idle_duration'];
    }

    /**
     * Sets idle_duration
     * @param int $idle_duration The idle duration in seconds. The minimum of the duration after the last hangup and the duration after the operator status changing to READY.
     * @return $this
     */
    public function setIdleDuration($idle_duration)
    {
        $this->container['idle_duration'] = $idle_duration;

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
            return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


