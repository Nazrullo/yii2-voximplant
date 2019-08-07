<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class CallSessionInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallSessionInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'call_session_history_id' => 'int',
        'account_id' => 'int',
        'application_id' => 'int',
        'user_id' => 'int',
        'start_date' => 'string',
        'duration' => 'int',
        'initiator_address' => 'string',
        'media_server_address' => 'string',
        'log_file_url' => 'string',
        'finish_reason' => 'string',
        'calls' => '\backend\modules\voximplant\models\CallInfoType[]',
        'other_resource_usage' => '\backend\modules\voximplant\models\ResourceUsageType[]',
        'records' => '\backend\modules\voximplant\models\RecordType[]'
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
        'call_session_history_id' => 'call_session_history_id',
        'account_id' => 'account_id',
        'application_id' => 'application_id',
        'user_id' => 'user_id',
        'start_date' => 'start_date',
        'duration' => 'duration',
        'initiator_address' => 'initiator_address',
        'media_server_address' => 'media_server_address',
        'log_file_url' => 'log_file_url',
        'finish_reason' => 'finish_reason',
        'calls' => 'calls',
        'other_resource_usage' => 'other_resource_usage',
        'records' => 'records'
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
        'call_session_history_id' => 'setCallSessionHistoryId',
        'account_id' => 'setAccountId',
        'application_id' => 'setApplicationId',
        'user_id' => 'setUserId',
        'start_date' => 'setStartDate',
        'duration' => 'setDuration',
        'initiator_address' => 'setInitiatorAddress',
        'media_server_address' => 'setMediaServerAddress',
        'log_file_url' => 'setLogFileUrl',
        'finish_reason' => 'setFinishReason',
        'calls' => 'setCalls',
        'other_resource_usage' => 'setOtherResourceUsage',
        'records' => 'setRecords'
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
        'call_session_history_id' => 'getCallSessionHistoryId',
        'account_id' => 'getAccountId',
        'application_id' => 'getApplicationId',
        'user_id' => 'getUserId',
        'start_date' => 'getStartDate',
        'duration' => 'getDuration',
        'initiator_address' => 'getInitiatorAddress',
        'media_server_address' => 'getMediaServerAddress',
        'log_file_url' => 'getLogFileUrl',
        'finish_reason' => 'getFinishReason',
        'calls' => 'getCalls',
        'other_resource_usage' => 'getOtherResourceUsage',
        'records' => 'getRecords'
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
        $this->container['call_session_history_id'] = isset($data['call_session_history_id']) ? $data['call_session_history_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['initiator_address'] = isset($data['initiator_address']) ? $data['initiator_address'] : null;
        $this->container['media_server_address'] = isset($data['media_server_address']) ? $data['media_server_address'] : null;
        $this->container['log_file_url'] = isset($data['log_file_url']) ? $data['log_file_url'] : null;
        $this->container['finish_reason'] = isset($data['finish_reason']) ? $data['finish_reason'] : null;
        $this->container['calls'] = isset($data['calls']) ? $data['calls'] : null;
        $this->container['other_resource_usage'] = isset($data['other_resource_usage']) ? $data['other_resource_usage'] : null;
        $this->container['records'] = isset($data['records']) ? $data['records'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['call_session_history_id'] === null) {
            $invalid_properties[] = "'call_session_history_id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['application_id'] === null) {
            $invalid_properties[] = "'application_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        if ($this->container['initiator_address'] === null) {
            $invalid_properties[] = "'initiator_address' can't be null";
        }
        if ($this->container['media_server_address'] === null) {
            $invalid_properties[] = "'media_server_address' can't be null";
        }
        if ($this->container['log_file_url'] === null) {
            $invalid_properties[] = "'log_file_url' can't be null";
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
        if ($this->container['call_session_history_id'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['application_id'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['initiator_address'] === null) {
            return false;
        }
        if ($this->container['media_server_address'] === null) {
            return false;
        }
        if ($this->container['log_file_url'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets call_session_history_id
     * @return int
     */
    public function getCallSessionHistoryId()
    {
        return $this->container['call_session_history_id'];
    }

    /**
     * Sets call_session_history_id
     * @param int $call_session_history_id The call session history ID.
     * @return $this
     */
    public function setCallSessionHistoryId($call_session_history_id)
    {
        $this->container['call_session_history_id'] = $call_session_history_id;

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
     * Gets application_id
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     * @param int $application_id The application ID.
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

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
     * Gets start_date
     * @return string
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param string $start_date The start date in the selected timezone in format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets duration
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     * @param int $duration The session duration in seconds.
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets initiator_address
     * @return string
     */
    public function getInitiatorAddress()
    {
        return $this->container['initiator_address'];
    }

    /**
     * Sets initiator_address
     * @param string $initiator_address The initiator IP address.
     * @return $this
     */
    public function setInitiatorAddress($initiator_address)
    {
        $this->container['initiator_address'] = $initiator_address;

        return $this;
    }

    /**
     * Gets media_server_address
     * @return string
     */
    public function getMediaServerAddress()
    {
        return $this->container['media_server_address'];
    }

    /**
     * Sets media_server_address
     * @param string $media_server_address The media server IP address.
     * @return $this
     */
    public function setMediaServerAddress($media_server_address)
    {
        $this->container['media_server_address'] = $media_server_address;

        return $this;
    }

    /**
     * Gets log_file_url
     * @return string
     */
    public function getLogFileUrl()
    {
        return $this->container['log_file_url'];
    }

    /**
     * Sets log_file_url
     * @param string $log_file_url The session log URL.
     * @return $this
     */
    public function setLogFileUrl($log_file_url)
    {
        $this->container['log_file_url'] = $log_file_url;

        return $this;
    }

    /**
     * Gets finish_reason
     * @return string
     */
    public function getFinishReason()
    {
        return $this->container['finish_reason'];
    }

    /**
     * Sets finish_reason
     * @param string $finish_reason The finish reason
     * @return $this
     */
    public function setFinishReason($finish_reason)
    {
        $this->container['finish_reason'] = $finish_reason;

        return $this;
    }

    /**
     * Gets calls
     * @return \backend\modules\voximplant\models\CallInfoType[]
     */
    public function getCalls()
    {
        return $this->container['calls'];
    }

    /**
     * Sets calls
     * @param \backend\modules\voximplant\models\CallInfoType[] $calls
     * @return $this
     */
    public function setCalls($calls)
    {
        $this->container['calls'] = $calls;

        return $this;
    }

    /**
     * Gets other_resource_usage
     * @return \backend\modules\voximplant\models\ResourceUsageType[]
     */
    public function getOtherResourceUsage()
    {
        return $this->container['other_resource_usage'];
    }

    /**
     * Sets other_resource_usage
     * @param \backend\modules\voximplant\models\ResourceUsageType[] $other_resource_usage
     * @return $this
     */
    public function setOtherResourceUsage($other_resource_usage)
    {
        $this->container['other_resource_usage'] = $other_resource_usage;

        return $this;
    }

    /**
     * Gets records
     * @return \backend\modules\voximplant\models\RecordType[]
     */
    public function getRecords()
    {
        return $this->container['records'];
    }

    /**
     * Sets records
     * @param \backend\modules\voximplant\models\RecordType[] $records
     * @return $this
     */
    public function setRecords($records)
    {
        $this->container['records'] = $records;

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


