<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * CallListDetailType Class Doc Comment
 *
 * @category    Class */
 // @description Detailing job telephone calls
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class CallListDetailType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallListDetailType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'list_id' => 'int',
        'custom_data' => 'string',
        'start_execution_time' => 'string',
        'finish_execution_time' => 'string',
        'result_data' => 'string',
        'last_attempt' => 'string',
        'attmepts_left' => 'int',
        'status_id' => 'int',
        'status' => 'string'
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
        'list_id' => 'list_id',
        'custom_data' => 'custom_data',
        'start_execution_time' => 'start_execution_time',
        'finish_execution_time' => 'finish_execution_time',
        'result_data' => 'result_data',
        'last_attempt' => 'last_attempt',
        'attmepts_left' => 'attmepts_left',
        'status_id' => 'status_id',
        'status' => 'status'
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
        'list_id' => 'setListId',
        'custom_data' => 'setCustomData',
        'start_execution_time' => 'setStartExecutionTime',
        'finish_execution_time' => 'setFinishExecutionTime',
        'result_data' => 'setResultData',
        'last_attempt' => 'setLastAttempt',
        'attmepts_left' => 'setAttmeptsLeft',
        'status_id' => 'setStatusId',
        'status' => 'setStatus'
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
        'list_id' => 'getListId',
        'custom_data' => 'getCustomData',
        'start_execution_time' => 'getStartExecutionTime',
        'finish_execution_time' => 'getFinishExecutionTime',
        'result_data' => 'getResultData',
        'last_attempt' => 'getLastAttempt',
        'attmepts_left' => 'getAttmeptsLeft',
        'status_id' => 'getStatusId',
        'status' => 'getStatus'
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
        $this->container['list_id'] = isset($data['list_id']) ? $data['list_id'] : null;
        $this->container['custom_data'] = isset($data['custom_data']) ? $data['custom_data'] : null;
        $this->container['start_execution_time'] = isset($data['start_execution_time']) ? $data['start_execution_time'] : null;
        $this->container['finish_execution_time'] = isset($data['finish_execution_time']) ? $data['finish_execution_time'] : null;
        $this->container['result_data'] = isset($data['result_data']) ? $data['result_data'] : null;
        $this->container['last_attempt'] = isset($data['last_attempt']) ? $data['last_attempt'] : null;
        $this->container['attmepts_left'] = isset($data['attmepts_left']) ? $data['attmepts_left'] : null;
        $this->container['status_id'] = isset($data['status_id']) ? $data['status_id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['list_id'] === null) {
            $invalid_properties[] = "'list_id' can't be null";
        }
        if ($this->container['custom_data'] === null) {
            $invalid_properties[] = "'custom_data' can't be null";
        }
        if ($this->container['start_execution_time'] === null) {
            $invalid_properties[] = "'start_execution_time' can't be null";
        }
        if ($this->container['finish_execution_time'] === null) {
            $invalid_properties[] = "'finish_execution_time' can't be null";
        }
        if ($this->container['result_data'] === null) {
            $invalid_properties[] = "'result_data' can't be null";
        }
        if ($this->container['last_attempt'] === null) {
            $invalid_properties[] = "'last_attempt' can't be null";
        }
        if ($this->container['attmepts_left'] === null) {
            $invalid_properties[] = "'attmepts_left' can't be null";
        }
        if ($this->container['status_id'] === null) {
            $invalid_properties[] = "'status_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
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
        if ($this->container['list_id'] === null) {
            return false;
        }
        if ($this->container['custom_data'] === null) {
            return false;
        }
        if ($this->container['start_execution_time'] === null) {
            return false;
        }
        if ($this->container['finish_execution_time'] === null) {
            return false;
        }
        if ($this->container['result_data'] === null) {
            return false;
        }
        if ($this->container['last_attempt'] === null) {
            return false;
        }
        if ($this->container['attmepts_left'] === null) {
            return false;
        }
        if ($this->container['status_id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets list_id
     * @return int
     */
    public function getListId()
    {
        return $this->container['list_id'];
    }

    /**
     * Sets list_id
     * @param int $list_id The list ID.
     * @return $this
     */
    public function setListId($list_id)
    {
        $this->container['list_id'] = $list_id;

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
     * @param string $custom_data Data for transmission to the script
     * @return $this
     */
    public function setCustomData($custom_data)
    {
        $this->container['custom_data'] = $custom_data;

        return $this;
    }

    /**
     * Gets start_execution_time
     * @return string
     */
    public function getStartExecutionTime()
    {
        return $this->container['start_execution_time'];
    }

    /**
     * Sets start_execution_time
     * @param string $start_execution_time Time with which to start the job. Format HH:mm:ss
     * @return $this
     */
    public function setStartExecutionTime($start_execution_time)
    {
        $this->container['start_execution_time'] = $start_execution_time;

        return $this;
    }

    /**
     * Gets finish_execution_time
     * @return string
     */
    public function getFinishExecutionTime()
    {
        return $this->container['finish_execution_time'];
    }

    /**
     * Sets finish_execution_time
     * @param string $finish_execution_time Time after which the task can not be performed. Format HH:mm:ss
     * @return $this
     */
    public function setFinishExecutionTime($finish_execution_time)
    {
        $this->container['finish_execution_time'] = $finish_execution_time;

        return $this;
    }

    /**
     * Gets result_data
     * @return string
     */
    public function getResultData()
    {
        return $this->container['result_data'];
    }

    /**
     * Sets result_data
     * @param string $result_data Results of the task, if it was granted, or information about the runtime error.
     * @return $this
     */
    public function setResultData($result_data)
    {
        $this->container['result_data'] = $result_data;

        return $this;
    }

    /**
     * Gets last_attempt
     * @return string
     */
    public function getLastAttempt()
    {
        return $this->container['last_attempt'];
    }

    /**
     * Sets last_attempt
     * @param string $last_attempt Date and time of the last attempt to perform a task.
     * @return $this
     */
    public function setLastAttempt($last_attempt)
    {
        $this->container['last_attempt'] = $last_attempt;

        return $this;
    }

    /**
     * Gets attmepts_left
     * @return int
     */
    public function getAttmeptsLeft()
    {
        return $this->container['attmepts_left'];
    }

    /**
     * Sets attmepts_left
     * @param int $attmepts_left Number of remaining attempts.
     * @return $this
     */
    public function setAttmeptsLeft($attmepts_left)
    {
        $this->container['attmepts_left'] = $attmepts_left;

        return $this;
    }

    /**
     * Gets status_id
     * @return int
     */
    public function getStatusId()
    {
        return $this->container['status_id'];
    }

    /**
     * Sets status_id
     * @param int $status_id The status ID.
     * @return $this
     */
    public function setStatusId($status_id)
    {
        $this->container['status_id'] = $status_id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status name.
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


