<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class RecordType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RecordType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'record_id' => 'int',
        'record_name' => 'string',
        'cost' => 'int',
        'start_time' => 'string',
        'duration' => 'int',
        'record_url' => 'string',
        'transaction_id' => 'int',
        'file_size' => 'int',
        'transcription_url' => 'string',
        'transcription_status' => 'string'
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
        'record_id' => 'record_id',
        'record_name' => 'record_name',
        'cost' => 'cost',
        'start_time' => 'start_time',
        'duration' => 'duration',
        'record_url' => 'record_url',
        'transaction_id' => 'transaction_id',
        'file_size' => 'file_size',
        'transcription_url' => 'transcription_url',
        'transcription_status' => 'transcription_status'
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
        'record_id' => 'setRecordId',
        'record_name' => 'setRecordName',
        'cost' => 'setCost',
        'start_time' => 'setStartTime',
        'duration' => 'setDuration',
        'record_url' => 'setRecordUrl',
        'transaction_id' => 'setTransactionId',
        'file_size' => 'setFileSize',
        'transcription_url' => 'setTranscriptionUrl',
        'transcription_status' => 'setTranscriptionStatus'
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
        'record_id' => 'getRecordId',
        'record_name' => 'getRecordName',
        'cost' => 'getCost',
        'start_time' => 'getStartTime',
        'duration' => 'getDuration',
        'record_url' => 'getRecordUrl',
        'transaction_id' => 'getTransactionId',
        'file_size' => 'getFileSize',
        'transcription_url' => 'getTranscriptionUrl',
        'transcription_status' => 'getTranscriptionStatus'
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
        $this->container['record_id'] = isset($data['record_id']) ? $data['record_id'] : null;
        $this->container['record_name'] = isset($data['record_name']) ? $data['record_name'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['start_time'] = isset($data['start_time']) ? $data['start_time'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['record_url'] = isset($data['record_url']) ? $data['record_url'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['transcription_url'] = isset($data['transcription_url']) ? $data['transcription_url'] : null;
        $this->container['transcription_status'] = isset($data['transcription_status']) ? $data['transcription_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['record_id'] === null) {
            $invalid_properties[] = "'record_id' can't be null";
        }
        if ($this->container['start_time'] === null) {
            $invalid_properties[] = "'start_time' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalid_properties[] = "'transaction_id' can't be null";
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
        if ($this->container['record_id'] === null) {
            return false;
        }
        if ($this->container['start_time'] === null) {
            return false;
        }
        if ($this->container['transaction_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets record_id
     * @return int
     */
    public function getRecordId()
    {
        return $this->container['record_id'];
    }

    /**
     * Sets record_id
     * @param int $record_id The record ID.
     * @return $this
     */
    public function setRecordId($record_id)
    {
        $this->container['record_id'] = $record_id;

        return $this;
    }

    /**
     * Gets record_name
     * @return string
     */
    public function getRecordName()
    {
        return $this->container['record_name'];
    }

    /**
     * Sets record_name
     * @param string $record_name The record name.
     * @return $this
     */
    public function setRecordName($record_name)
    {
        $this->container['record_name'] = $record_name;

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
     * @param int $cost The record cost.
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

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
     * @param string $start_time The start recording time in the selected timezone in format: YYYY-MM-DD HH:mm:SS
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
     * Gets file_size
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param int $file_size The file size.
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets transcription_url
     * @return string
     */
    public function getTranscriptionUrl()
    {
        return $this->container['transcription_url'];
    }

    /**
     * Sets transcription_url
     * @param string $transcription_url The url of transcription.
     * @return $this
     */
    public function setTranscriptionUrl($transcription_url)
    {
        $this->container['transcription_url'] = $transcription_url;

        return $this;
    }

    /**
     * Gets transcription_status
     * @return string
     */
    public function getTranscriptionStatus()
    {
        return $this->container['transcription_status'];
    }

    /**
     * Sets transcription_status
     * @param string $transcription_status The status of transcription. Availible values: Not required, In progress, Complete
     * @return $this
     */
    public function setTranscriptionStatus($transcription_status)
    {
        $this->container['transcription_status'] = $transcription_status;

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


