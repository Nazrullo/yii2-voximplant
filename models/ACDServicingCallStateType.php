<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class ACDServicingCallStateType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDServicingCallStateType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'user_id' => 'int',
        'user_name' => 'string',
        'user_display_name' => 'string',
        'priority' => 'int',
        'callerid' => 'string',
        'begin_time' => 'string',
        'waiting_time' => 'int',
        'acd_session_history_id' => 'int'
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
        'priority' => 'priority',
        'callerid' => 'callerid',
        'begin_time' => 'begin_time',
        'waiting_time' => 'waiting_time',
        'acd_session_history_id' => 'acd_session_history_id'
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
        'priority' => 'setPriority',
        'callerid' => 'setCallerid',
        'begin_time' => 'setBeginTime',
        'waiting_time' => 'setWaitingTime',
        'acd_session_history_id' => 'setAcdSessionHistoryId'
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
        'priority' => 'getPriority',
        'callerid' => 'getCallerid',
        'begin_time' => 'getBeginTime',
        'waiting_time' => 'getWaitingTime',
        'acd_session_history_id' => 'getAcdSessionHistoryId'
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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['callerid'] = isset($data['callerid']) ? $data['callerid'] : null;
        $this->container['begin_time'] = isset($data['begin_time']) ? $data['begin_time'] : null;
        $this->container['waiting_time'] = isset($data['waiting_time']) ? $data['waiting_time'] : null;
        $this->container['acd_session_history_id'] = isset($data['acd_session_history_id']) ? $data['acd_session_history_id'] : null;
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
        if ($this->container['priority'] === null) {
            $invalid_properties[] = "'priority' can't be null";
        }
        if ($this->container['begin_time'] === null) {
            $invalid_properties[] = "'begin_time' can't be null";
        }
        if ($this->container['waiting_time'] === null) {
            $invalid_properties[] = "'waiting_time' can't be null";
        }
        if ($this->container['acd_session_history_id'] === null) {
            $invalid_properties[] = "'acd_session_history_id' can't be null";
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
        if ($this->container['priority'] === null) {
            return false;
        }
        if ($this->container['begin_time'] === null) {
            return false;
        }
        if ($this->container['waiting_time'] === null) {
            return false;
        }
        if ($this->container['acd_session_history_id'] === null) {
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
     * Gets priority
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     * @param int $priority The request priority.
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets callerid
     * @return string
     */
    public function getCallerid()
    {
        return $this->container['callerid'];
    }

    /**
     * Sets callerid
     * @param string $callerid The client callerid.
     * @return $this
     */
    public function setCallerid($callerid)
    {
        $this->container['callerid'] = $callerid;

        return $this;
    }

    /**
     * Gets begin_time
     * @return string
     */
    public function getBeginTime()
    {
        return $this->container['begin_time'];
    }

    /**
     * Sets begin_time
     * @param string $begin_time The begin time of the request in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setBeginTime($begin_time)
    {
        $this->container['begin_time'] = $begin_time;

        return $this;
    }

    /**
     * Gets waiting_time
     * @return int
     */
    public function getWaitingTime()
    {
        return $this->container['waiting_time'];
    }

    /**
     * Sets waiting_time
     * @param int $waiting_time The waiting time before servicing in seconds.
     * @return $this
     */
    public function setWaitingTime($waiting_time)
    {
        $this->container['waiting_time'] = $waiting_time;

        return $this;
    }

    /**
     * Gets acd_session_history_id
     * @return int
     */
    public function getAcdSessionHistoryId()
    {
        return $this->container['acd_session_history_id'];
    }

    /**
     * Sets acd_session_history_id
     * @param int $acd_session_history_id The ACD session history ID of the request.
     * @return $this
     */
    public function setAcdSessionHistoryId($acd_session_history_id)
    {
        $this->container['acd_session_history_id'] = $acd_session_history_id;

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


