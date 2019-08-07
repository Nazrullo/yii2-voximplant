<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class ACDQueueOperatorInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ACDQueueOperatorInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'acd_queue_id' => 'int',
        'acd_queue_name' => 'string',
        'auto_link' => 'bool'
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
        'acd_queue_name' => 'acd_queue_name',
        'auto_link' => 'auto_link'
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
        'acd_queue_name' => 'setAcdQueueName',
        'auto_link' => 'setAutoLink'
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
        'acd_queue_name' => 'getAcdQueueName',
        'auto_link' => 'getAutoLink'
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
        $this->container['acd_queue_name'] = isset($data['acd_queue_name']) ? $data['acd_queue_name'] : null;
        $this->container['auto_link'] = isset($data['auto_link']) ? $data['auto_link'] : null;
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
        if ($this->container['acd_queue_name'] === null) {
            $invalid_properties[] = "'acd_queue_name' can't be null";
        }
        if ($this->container['auto_link'] === null) {
            $invalid_properties[] = "'auto_link' can't be null";
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
        if ($this->container['acd_queue_name'] === null) {
            return false;
        }
        if ($this->container['auto_link'] === null) {
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
     * Gets auto_link
     * @return bool
     */
    public function getAutoLink()
    {
        return $this->container['auto_link'];
    }

    /**
     * Sets auto_link
     * @param bool $auto_link The user bound with the ACD queue in the manual mode if false.
     * @return $this
     */
    public function setAutoLink($auto_link)
    {
        $this->container['auto_link'] = $auto_link;

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


