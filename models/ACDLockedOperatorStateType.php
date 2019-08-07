<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class ACDLockedOperatorStateType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDLockedOperatorStateType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'user_id' => 'int',
        'user_name' => 'string',
        'user_display_name' => 'string',
        'unreached' => 'string',
        'locks' => '\backend\modules\voximplant\models\ACDLock[]',
        'acd_calls' => '\backend\modules\voximplant\models\ACDOperatorCall[]'
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
        'unreached' => 'unreached',
        'locks' => 'locks',
        'acd_calls' => 'acd_calls'
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
        'unreached' => 'setUnreached',
        'locks' => 'setLocks',
        'acd_calls' => 'setAcdCalls'
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
        'unreached' => 'getUnreached',
        'locks' => 'getLocks',
        'acd_calls' => 'getAcdCalls'
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
        $this->container['unreached'] = isset($data['unreached']) ? $data['unreached'] : null;
        $this->container['locks'] = isset($data['locks']) ? $data['locks'] : null;
        $this->container['acd_calls'] = isset($data['acd_calls']) ? $data['acd_calls'] : null;
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
     * Gets unreached
     * @return string
     */
    public function getUnreached()
    {
        return $this->container['unreached'];
    }

    /**
     * Sets unreached
     * @param string $unreached The UTC time when the operator becomes unavailable in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setUnreached($unreached)
    {
        $this->container['unreached'] = $unreached;

        return $this;
    }

    /**
     * Gets locks
     * @return \backend\modules\voximplant\models\ACDLock[]
     */
    public function getLocks()
    {
        return $this->container['locks'];
    }

    /**
     * Sets locks
     * @param \backend\modules\voximplant\models\ACDLock[] $locks
     * @return $this
     */
    public function setLocks($locks)
    {
        $this->container['locks'] = $locks;

        return $this;
    }

    /**
     * Gets acd_calls
     * @return \backend\modules\voximplant\models\ACDOperatorCall[]
     */
    public function getAcdCalls()
    {
        return $this->container['acd_calls'];
    }

    /**
     * Sets acd_calls
     * @param \backend\modules\voximplant\models\ACDOperatorCall[] $acd_calls
     * @return $this
     */
    public function setAcdCalls($acd_calls)
    {
        $this->container['acd_calls'] = $acd_calls;

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


