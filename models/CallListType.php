<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;


class CallListType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallListType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'list_id' => 'int',
        'list_name' => 'string',
        'priority' => 'int',
        'rule_id' => 'int',
        'max_simultaneous' => 'int',
        'num_attempts' => 'int',
        'dt_submit' => 'string',
        'dt_complete' => 'string',
        'interval_seconds' => 'int',
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
        'list_name' => 'list_name',
        'priority' => 'priority',
        'rule_id' => 'rule_id',
        'max_simultaneous' => 'max_simultaneous',
        'num_attempts' => 'num_attempts',
        'dt_submit' => 'dt_submit',
        'dt_complete' => 'dt_complete',
        'interval_seconds' => 'interval_seconds',
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
        'list_name' => 'setListName',
        'priority' => 'setPriority',
        'rule_id' => 'setRuleId',
        'max_simultaneous' => 'setMaxSimultaneous',
        'num_attempts' => 'setNumAttempts',
        'dt_submit' => 'setDtSubmit',
        'dt_complete' => 'setDtComplete',
        'interval_seconds' => 'setIntervalSeconds',
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
        'list_name' => 'getListName',
        'priority' => 'getPriority',
        'rule_id' => 'getRuleId',
        'max_simultaneous' => 'getMaxSimultaneous',
        'num_attempts' => 'getNumAttempts',
        'dt_submit' => 'getDtSubmit',
        'dt_complete' => 'getDtComplete',
        'interval_seconds' => 'getIntervalSeconds',
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
        $this->container['list_name'] = isset($data['list_name']) ? $data['list_name'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['max_simultaneous'] = isset($data['max_simultaneous']) ? $data['max_simultaneous'] : null;
        $this->container['num_attempts'] = isset($data['num_attempts']) ? $data['num_attempts'] : null;
        $this->container['dt_submit'] = isset($data['dt_submit']) ? $data['dt_submit'] : null;
        $this->container['dt_complete'] = isset($data['dt_complete']) ? $data['dt_complete'] : null;
        $this->container['interval_seconds'] = isset($data['interval_seconds']) ? $data['interval_seconds'] : null;
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
        if ($this->container['list_name'] === null) {
            $invalid_properties[] = "'list_name' can't be null";
        }
        if ($this->container['priority'] === null) {
            $invalid_properties[] = "'priority' can't be null";
        }
        if ($this->container['rule_id'] === null) {
            $invalid_properties[] = "'rule_id' can't be null";
        }
        if ($this->container['max_simultaneous'] === null) {
            $invalid_properties[] = "'max_simultaneous' can't be null";
        }
        if ($this->container['num_attempts'] === null) {
            $invalid_properties[] = "'num_attempts' can't be null";
        }
        if ($this->container['dt_submit'] === null) {
            $invalid_properties[] = "'dt_submit' can't be null";
        }
        if ($this->container['interval_seconds'] === null) {
            $invalid_properties[] = "'interval_seconds' can't be null";
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
        if ($this->container['list_name'] === null) {
            return false;
        }
        if ($this->container['priority'] === null) {
            return false;
        }
        if ($this->container['rule_id'] === null) {
            return false;
        }
        if ($this->container['max_simultaneous'] === null) {
            return false;
        }
        if ($this->container['num_attempts'] === null) {
            return false;
        }
        if ($this->container['dt_submit'] === null) {
            return false;
        }
        if ($this->container['interval_seconds'] === null) {
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
     * Gets list_name
     * @return string
     */
    public function getListName()
    {
        return $this->container['list_name'];
    }

    /**
     * Sets list_name
     * @param string $list_name The list name.
     * @return $this
     */
    public function setListName($list_name)
    {
        $this->container['list_name'] = $list_name;

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
     * @param int $priority The priority of call list.
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets rule_id
     * @return int
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     * @param int $rule_id The rule id.
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets max_simultaneous
     * @return int
     */
    public function getMaxSimultaneous()
    {
        return $this->container['max_simultaneous'];
    }

    /**
     * Sets max_simultaneous
     * @param int $max_simultaneous The maximum number of simultaneous tasks.
     * @return $this
     */
    public function setMaxSimultaneous($max_simultaneous)
    {
        $this->container['max_simultaneous'] = $max_simultaneous;

        return $this;
    }

    /**
     * Gets num_attempts
     * @return int
     */
    public function getNumAttempts()
    {
        return $this->container['num_attempts'];
    }

    /**
     * Sets num_attempts
     * @param int $num_attempts The number of task attempts run, which failed to call.
     * @return $this
     */
    public function setNumAttempts($num_attempts)
    {
        $this->container['num_attempts'] = $num_attempts;

        return $this;
    }

    /**
     * Gets dt_submit
     * @return string
     */
    public function getDtSubmit()
    {
        return $this->container['dt_submit'];
    }

    /**
     * Sets dt_submit
     * @param string $dt_submit The date of submitted the list. Format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setDtSubmit($dt_submit)
    {
        $this->container['dt_submit'] = $dt_submit;

        return $this;
    }

    /**
     * Gets dt_complete
     * @return string
     */
    public function getDtComplete()
    {
        return $this->container['dt_complete'];
    }

    /**
     * Sets dt_complete
     * @param string $dt_complete The completion date. Format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setDtComplete($dt_complete)
    {
        $this->container['dt_complete'] = $dt_complete;

        return $this;
    }

    /**
     * Gets interval_seconds
     * @return int
     */
    public function getIntervalSeconds()
    {
        return $this->container['interval_seconds'];
    }

    /**
     * Sets interval_seconds
     * @param int $interval_seconds The interval between attempts in seconds.
     * @return $this
     */
    public function setIntervalSeconds($interval_seconds)
    {
        $this->container['interval_seconds'] = $interval_seconds;

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
     * @param string $status The status name. Availible values: In progress, Canceled, Completed
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


