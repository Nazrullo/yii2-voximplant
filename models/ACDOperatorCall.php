<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class ACDOperatorCall implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDOperatorCall';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'acd_session_history_id' => 'int',
        'acd_request_id' => 'string',
        'acd_queue_id' => 'int',
        'acd_queue_name' => 'string',
        'callerid' => 'string',
        'begin_time' => 'string',
        'submitted' => 'string'
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
        'acd_request_id' => 'acd_request_id',
        'acd_queue_id' => 'acd_queue_id',
        'acd_queue_name' => 'acd_queue_name',
        'callerid' => 'callerid',
        'begin_time' => 'begin_time',
        'submitted' => 'submitted'
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
        'acd_request_id' => 'setAcdRequestId',
        'acd_queue_id' => 'setAcdQueueId',
        'acd_queue_name' => 'setAcdQueueName',
        'callerid' => 'setCallerid',
        'begin_time' => 'setBeginTime',
        'submitted' => 'setSubmitted'
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
        'acd_request_id' => 'getAcdRequestId',
        'acd_queue_id' => 'getAcdQueueId',
        'acd_queue_name' => 'getAcdQueueName',
        'callerid' => 'getCallerid',
        'begin_time' => 'getBeginTime',
        'submitted' => 'getSubmitted'
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
        $this->container['acd_request_id'] = isset($data['acd_request_id']) ? $data['acd_request_id'] : null;
        $this->container['acd_queue_id'] = isset($data['acd_queue_id']) ? $data['acd_queue_id'] : null;
        $this->container['acd_queue_name'] = isset($data['acd_queue_name']) ? $data['acd_queue_name'] : null;
        $this->container['callerid'] = isset($data['callerid']) ? $data['callerid'] : null;
        $this->container['begin_time'] = isset($data['begin_time']) ? $data['begin_time'] : null;
        $this->container['submitted'] = isset($data['submitted']) ? $data['submitted'] : null;
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
        if ($this->container['acd_request_id'] === null) {
            $invalid_properties[] = "'acd_request_id' can't be null";
        }
        if ($this->container['acd_queue_id'] === null) {
            $invalid_properties[] = "'acd_queue_id' can't be null";
        }
        if ($this->container['acd_queue_name'] === null) {
            $invalid_properties[] = "'acd_queue_name' can't be null";
        }
        if ($this->container['begin_time'] === null) {
            $invalid_properties[] = "'begin_time' can't be null";
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
        if ($this->container['acd_request_id'] === null) {
            return false;
        }
        if ($this->container['acd_queue_id'] === null) {
            return false;
        }
        if ($this->container['acd_queue_name'] === null) {
            return false;
        }
        if ($this->container['begin_time'] === null) {
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
     * @param int $acd_session_history_id The ACD session history ID of the request.
     * @return $this
     */
    public function setAcdSessionHistoryId($acd_session_history_id)
    {
        $this->container['acd_session_history_id'] = $acd_session_history_id;

        return $this;
    }

    /**
     * Gets acd_request_id
     * @return string
     */
    public function getAcdRequestId()
    {
        return $this->container['acd_request_id'];
    }

    /**
     * Sets acd_request_id
     * @param string $acd_request_id The internal ACD session history ID.
     * @return $this
     */
    public function setAcdRequestId($acd_request_id)
    {
        $this->container['acd_request_id'] = $acd_request_id;

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
     * Gets acd_queue_name
     * @return string
     */
    public function getAcdQueueName()
    {
        return $this->container['acd_queue_name'];
    }

    /**
     * Sets acd_queue_name
     * @param string $acd_queue_name The ACD queue name.
     * @return $this
     */
    public function setAcdQueueName($acd_queue_name)
    {
        $this->container['acd_queue_name'] = $acd_queue_name;

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
     * Gets submitted
     * @return string
     */
    public function getSubmitted()
    {
        return $this->container['submitted'];
    }

    /**
     * Sets submitted
     * @param string $submitted The submission time of the request in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setSubmitted($submitted)
    {
        $this->container['submitted'] = $submitted;

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


