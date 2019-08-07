<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class ACDSessionInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDSessionInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'acd_session_history_id' => 'int',
        'account_id' => 'int',
        'begin_time' => 'string',
        'priority' => 'int',
        'acd_queue_id' => 'int',
        'user_id' => 'int',
        'waiting_duration' => 'int',
        'in_service_duration' => 'int',
        'after_service_duration' => 'int',
        'events' => '\backend\modules\voximplant\models\ACDSessionEventInfoType[]'
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
        'acd_session_history_id' => 'acd_session_history_id',
        'account_id' => 'account_id',
        'begin_time' => 'begin_time',
        'priority' => 'priority',
        'acd_queue_id' => 'acd_queue_id',
        'user_id' => 'user_id',
        'waiting_duration' => 'waiting_duration',
        'in_service_duration' => 'in_service_duration',
        'after_service_duration' => 'after_service_duration',
        'events' => 'events'
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
        'acd_session_history_id' => 'setAcdSessionHistoryId',
        'account_id' => 'setAccountId',
        'begin_time' => 'setBeginTime',
        'priority' => 'setPriority',
        'acd_queue_id' => 'setAcdQueueId',
        'user_id' => 'setUserId',
        'waiting_duration' => 'setWaitingDuration',
        'in_service_duration' => 'setInServiceDuration',
        'after_service_duration' => 'setAfterServiceDuration',
        'events' => 'setEvents'
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
        'acd_session_history_id' => 'getAcdSessionHistoryId',
        'account_id' => 'getAccountId',
        'begin_time' => 'getBeginTime',
        'priority' => 'getPriority',
        'acd_queue_id' => 'getAcdQueueId',
        'user_id' => 'getUserId',
        'waiting_duration' => 'getWaitingDuration',
        'in_service_duration' => 'getInServiceDuration',
        'after_service_duration' => 'getAfterServiceDuration',
        'events' => 'getEvents'
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
        $this->container['acd_session_history_id'] = isset($data['acd_session_history_id']) ? $data['acd_session_history_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['begin_time'] = isset($data['begin_time']) ? $data['begin_time'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['acd_queue_id'] = isset($data['acd_queue_id']) ? $data['acd_queue_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['waiting_duration'] = isset($data['waiting_duration']) ? $data['waiting_duration'] : null;
        $this->container['in_service_duration'] = isset($data['in_service_duration']) ? $data['in_service_duration'] : null;
        $this->container['after_service_duration'] = isset($data['after_service_duration']) ? $data['after_service_duration'] : null;
        $this->container['events'] = isset($data['events']) ? $data['events'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['acd_session_history_id'] === null) {
            $invalid_properties[] = "'acd_session_history_id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['begin_time'] === null) {
            $invalid_properties[] = "'begin_time' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalid_properties[] = "'priority' can't be null";
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
        if ($this->container['acd_session_history_id'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['begin_time'] === null) {
            return false;
        }
        if ($this->container['priority'] === null) {
            return false;
        }
        return true;
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
     * @param int $acd_session_history_id The ACD session history ID.
     * @return $this
     */
    public function setAcdSessionHistoryId($acd_session_history_id)
    {
        $this->container['acd_session_history_id'] = $acd_session_history_id;

        return $this;
    }

    /**
     * Gets account_id
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param int $account_id The account ID.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

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
     * @param string $begin_time The UTC start date in format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setBeginTime($begin_time)
    {
        $this->container['begin_time'] = $begin_time;

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
     * Gets acd_queue_id
     * @return int
     */
    public function getAcdQueueId()
    {
        return $this->container['acd_queue_id'];
    }

    /**
     * Sets acd_queue_id
     * @param int $acd_queue_id The ACD queue ID.
     * @return $this
     */
    public function setAcdQueueId($acd_queue_id)
    {
        $this->container['acd_queue_id'] = $acd_queue_id;

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
     * Gets waiting_duration
     * @return int
     */
    public function getWaitingDuration()
    {
        return $this->container['waiting_duration'];
    }

    /**
     * Sets waiting_duration
     * @param int $waiting_duration The waiting duration in seconds.
     * @return $this
     */
    public function setWaitingDuration($waiting_duration)
    {
        $this->container['waiting_duration'] = $waiting_duration;

        return $this;
    }

    /**
     * Gets in_service_duration
     * @return int
     */
    public function getInServiceDuration()
    {
        return $this->container['in_service_duration'];
    }

    /**
     * Sets in_service_duration
     * @param int $in_service_duration The conversation duration in seconds.
     * @return $this
     */
    public function setInServiceDuration($in_service_duration)
    {
        $this->container['in_service_duration'] = $in_service_duration;

        return $this;
    }

    /**
     * Gets after_service_duration
     * @return int
     */
    public function getAfterServiceDuration()
    {
        return $this->container['after_service_duration'];
    }

    /**
     * Sets after_service_duration
     * @param int $after_service_duration The after service duration in seconds.
     * @return $this
     */
    public function setAfterServiceDuration($after_service_duration)
    {
        $this->container['after_service_duration'] = $after_service_duration;

        return $this;
    }

    /**
     * Gets events
     * @return \backend\modules\voximplant\models\ACDSessionEventInfoType[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     * @param \backend\modules\voximplant\models\ACDSessionEventInfoType[] $events
     * @return $this
     */
    public function setEvents($events)
    {
        $this->container['events'] = $events;

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


