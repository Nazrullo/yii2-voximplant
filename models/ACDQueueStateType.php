<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class ACDQueueStateType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDQueueStateType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'acd_queue_id' => 'int',
        'ready_operators' => '\backend\modules\voximplant\models\ACDReadyOperatorStateType[]',
        'locked_operators' => '\backend\modules\voximplant\models\ACDLockedOperatorStateType[]',
        'servicing_calls' => '\backend\modules\voximplant\models\ACDServicingCallStateType[]',
        'waiting_calls' => '\backend\modules\voximplant\models\Model\ACDWaitingCallStateType[]'
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
        'acd_queue_id' => 'acd_queue_id',
        'ready_operators' => 'ready_operators',
        'locked_operators' => 'locked_operators',
        'servicing_calls' => 'servicing_calls',
        'waiting_calls' => 'waiting_calls'
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
        'acd_queue_id' => 'setAcdQueueId',
        'ready_operators' => 'setReadyOperators',
        'locked_operators' => 'setLockedOperators',
        'servicing_calls' => 'setServicingCalls',
        'waiting_calls' => 'setWaitingCalls'
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
        'acd_queue_id' => 'getAcdQueueId',
        'ready_operators' => 'getReadyOperators',
        'locked_operators' => 'getLockedOperators',
        'servicing_calls' => 'getServicingCalls',
        'waiting_calls' => 'getWaitingCalls'
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
        $this->container['acd_queue_id'] = isset($data['acd_queue_id']) ? $data['acd_queue_id'] : null;
        $this->container['ready_operators'] = isset($data['ready_operators']) ? $data['ready_operators'] : null;
        $this->container['locked_operators'] = isset($data['locked_operators']) ? $data['locked_operators'] : null;
        $this->container['servicing_calls'] = isset($data['servicing_calls']) ? $data['servicing_calls'] : null;
        $this->container['waiting_calls'] = isset($data['waiting_calls']) ? $data['waiting_calls'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['acd_queue_id'] === null) {
            $invalid_properties[] = "'acd_queue_id' can't be null";
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
        if ($this->container['acd_queue_id'] === null) {
            return false;
        }
        return true;
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
     * Gets ready_operators
     * @return \backend\modules\voximplant\models\ACDReadyOperatorStateType[]
     */
    public function getReadyOperators()
    {
        return $this->container['ready_operators'];
    }

    /**
     * Sets ready_operators
     * @param \backend\modules\voximplant\models\ACDReadyOperatorStateType[] $ready_operators
     * @return $this
     */
    public function setReadyOperators($ready_operators)
    {
        $this->container['ready_operators'] = $ready_operators;

        return $this;
    }

    /**
     * Gets locked_operators
     * @return \backend\modules\voximplant\models\ACDLockedOperatorStateType[]
     */
    public function getLockedOperators()
    {
        return $this->container['locked_operators'];
    }

    /**
     * Sets locked_operators
     * @param \backend\modules\voximplant\models\ACDLockedOperatorStateType[] $locked_operators
     * @return $this
     */
    public function setLockedOperators($locked_operators)
    {
        $this->container['locked_operators'] = $locked_operators;

        return $this;
    }

    /**
     * Gets servicing_calls
     * @return \backend\modules\voximplant\models\ACDServicingCallStateType[]
     */
    public function getServicingCalls()
    {
        return $this->container['servicing_calls'];
    }

    /**
     * Sets servicing_calls
     * @param \backend\modules\voximplant\models\ACDServicingCallStateType[] $servicing_calls
     * @return $this
     */
    public function setServicingCalls($servicing_calls)
    {
        $this->container['servicing_calls'] = $servicing_calls;

        return $this;
    }

    /**
     * Gets waiting_calls
     * @return \backend\modules\voximplant\models\ACDWaitingCallStateType[]
     */
    public function getWaitingCalls()
    {
        return $this->container['waiting_calls'];
    }

    /**
     * Sets waiting_calls
     * @param \backend\modules\voximplant\models\ACDWaitingCallStateType[] $waiting_calls
     * @return $this
     */
    public function setWaitingCalls($waiting_calls)
    {
        $this->container['waiting_calls'] = $waiting_calls;

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


