<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class CallInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'call_id' => 'int',
        'start_time' => 'string',
        'duration' => 'int',
        'local_number' => 'string',
        'remote_number' => 'string',
        'remote_number_type' => 'string',
        'incoming' => 'bool',
        'successful' => 'bool',
        'transaction_id' => 'int',
        'record_url' => 'string',
        'media_server_address' => 'string',
        'cost' => 'int',
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
        'call_id' => 'call_id',
        'start_time' => 'start_time',
        'duration' => 'duration',
        'local_number' => 'local_number',
        'remote_number' => 'remote_number',
        'remote_number_type' => 'remote_number_type',
        'incoming' => 'incoming',
        'successful' => 'successful',
        'transaction_id' => 'transaction_id',
        'record_url' => 'record_url',
        'media_server_address' => 'media_server_address',
        'cost' => 'cost',
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
        'call_id' => 'setCallId',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'local_number' => 'setLocalNumber',
        'remote_number' => 'setRemoteNumber',
        'remote_number_type' => 'setRemoteNumberType',
        'incoming' => 'setIncoming',
        'successful' => 'setSuccessful',
        'transaction_id' => 'setTransactionId',
        'record_url' => 'setRecordUrl',
        'media_server_address' => 'setMediaServerAddress',
        'cost' => 'setCost',
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
        'call_id' => 'getCallId',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'local_number' => 'getLocalNumber',
        'remote_number' => 'getRemoteNumber',
        'remote_number_type' => 'getRemoteNumberType',
        'incoming' => 'getIncoming',
        'successful' => 'getSuccessful',
        'transaction_id' => 'getTransactionId',
        'record_url' => 'getRecordUrl',
        'media_server_address' => 'getMediaServerAddress',
        'cost' => 'getCost',
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
        $this->container['call_id'] = isset($data['call_id']) ? $data['call_id'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['local_number'] = isset($data['local_number']) ? $data['local_number'] : null;
        $this->container['remote_number'] = isset($data['remote_number']) ? $data['remote_number'] : null;
        $this->container['remote_number_type'] = isset($data['remote_number_type']) ? $data['remote_number_type'] : null;
        $this->container['incoming'] = isset($data['incoming']) ? $data['incoming'] : null;
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['record_url'] = isset($data['record_url']) ? $data['record_url'] : null;
        $this->container['media_server_address'] = isset($data['media_server_address']) ? $data['media_server_address'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
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
        if ($this->container['call_id'] === null) {
            $invalid_properties[] = "'call_id' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
        }
        if ($this->container['local_number'] === null) {
            $invalid_properties[] = "'local_number' can't be null";
        }
        if ($this->container['remote_number'] === null) {
            $invalid_properties[] = "'remote_number' can't be null";
        }
        if ($this->container['remote_number_type'] === null) {
            $invalid_properties[] = "'remote_number_type' can't be null";
        }
        if ($this->container['incoming'] === null) {
            $invalid_properties[] = "'incoming' can't be null";
        }
        if ($this->container['successful'] === null) {
            $invalid_properties[] = "'successful' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalid_properties[] = "'transaction_id' can't be null";
        }
        if ($this->container['media_server_address'] === null) {
            $invalid_properties[] = "'media_server_address' can't be null";
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
        if ($this->container['call_id'] === null) {
            return false;
        }
        if ($this->container['start_time'] === null) {
            return false;
        }
        if ($this->container['local_number'] === null) {
            return false;
        }
        if ($this->container['remote_number'] === null) {
            return false;
        }
        if ($this->container['remote_number_type'] === null) {
            return false;
        }
        if ($this->container['incoming'] === null) {
            return false;
        }
        if ($this->container['successful'] === null) {
            return false;
        }
        if ($this->container['transaction_id'] === null) {
            return false;
        }
        if ($this->container['media_server_address'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets call_id
     * @return int
     */
    public function getCallId()
    {
        return $this->container['call_id'];
    }

    /**
     * Sets call_id
     * @param int $call_id The call history ID.
     * @return $this
     */
    public function setCallId($call_id)
    {
        $this->container['call_id'] = $call_id;

        return $this;
    }

    /**
     * Gets start_time
     * @return string
     */
    public function getStartTime()
    {
        return $this->container['start_time'];
    }

    /**
     * Sets start_time
     * @param string $start_time The start time in the selected timezone in format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setStartTime($start_time)
    {
        $this->container['start_time'] = $start_time;

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
     * @param int $duration The call duration in seconds.
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets local_number
     * @return string
     */
    public function getLocalNumber()
    {
        return $this->container['local_number'];
    }

    /**
     * Sets local_number
     * @param string $local_number The local number.
     * @return $this
     */
    public function setLocalNumber($local_number)
    {
        $this->container['local_number'] = $local_number;

        return $this;
    }

    /**
     * Gets remote_number
     * @return string
     */
    public function getRemoteNumber()
    {
        return $this->container['remote_number'];
    }

    /**
     * Sets remote_number
     * @param string $remote_number The remote number.
     * @return $this
     */
    public function setRemoteNumber($remote_number)
    {
        $this->container['remote_number'] = $remote_number;

        return $this;
    }

    /**
     * Gets remote_number_type
     * @return string
     */
    public function getRemoteNumberType()
    {
        return $this->container['remote_number_type'];
    }

    /**
     * Sets remote_number_type
     * @param string $remote_number_type The remote number type.
     * @return $this
     */
    public function setRemoteNumberType($remote_number_type)
    {
        $this->container['remote_number_type'] = $remote_number_type;

        return $this;
    }

    /**
     * Gets incoming
     * @return bool
     */
    public function getIncoming()
    {
        return $this->container['incoming'];
    }

    /**
     * Sets incoming
     * @param bool $incoming The incoming flag.
     * @return $this
     */
    public function setIncoming($incoming)
    {
        $this->container['incoming'] = $incoming;

        return $this;
    }

    /**
     * Gets successful
     * @return bool
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     * @param bool $successful The success flag.
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param int $transaction_id The transaction ID.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets record_url
     * @return string
     */
    public function getRecordUrl()
    {
        return $this->container['record_url'];
    }

    /**
     * Sets record_url
     * @param string $record_url The record URL.
     * @return $this
     */
    public function setRecordUrl($record_url)
    {
        $this->container['record_url'] = $record_url;

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
     * Gets cost
     * @return int
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param int $cost The call cost.
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

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


