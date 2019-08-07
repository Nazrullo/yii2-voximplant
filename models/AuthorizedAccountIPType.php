<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;


class AuthorizedAccountIPType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AuthorizedAccountIPType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'authorized_ip' => 'string',
        'allowed' => 'bool',
        'created' => 'string'
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
        'authorized_ip' => 'authorized_ip',
        'allowed' => 'allowed',
        'created' => 'created'
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
        'authorized_ip' => 'setAuthorizedIp',
        'allowed' => 'setAllowed',
        'created' => 'setCreated'
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
        'authorized_ip' => 'getAuthorizedIp',
        'allowed' => 'getAllowed',
        'created' => 'getCreated'
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
        $this->container['authorized_ip'] = isset($data['authorized_ip']) ? $data['authorized_ip'] : null;
        $this->container['allowed'] = isset($data['allowed']) ? $data['allowed'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['authorized_ip'] === null) {
            $invalid_properties[] = "'authorized_ip' can't be null";
        }
        if ($this->container['allowed'] === null) {
            $invalid_properties[] = "'allowed' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
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
        if ($this->container['authorized_ip'] === null) {
            return false;
        }
        if ($this->container['allowed'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets authorized_ip
     * @return string
     */
    public function getAuthorizedIp()
    {
        return $this->container['authorized_ip'];
    }

    /**
     * Sets authorized_ip
     * @param string $authorized_ip The authorized IP4 or network.
     * @return $this
     */
    public function setAuthorizedIp($authorized_ip)
    {
        $this->container['authorized_ip'] = $authorized_ip;

        return $this;
    }

    /**
     * Gets allowed
     * @return bool
     */
    public function getAllowed()
    {
        return $this->container['allowed'];
    }

    /**
     * Sets allowed
     * @param bool $allowed The allowed flag (true - whitelist, false - blacklist).
     * @return $this
     */
    public function setAllowed($allowed)
    {
        $this->container['allowed'] = $allowed;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created The item creating UTC date in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

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


