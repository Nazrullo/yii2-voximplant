<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

class ClonedAdminUserType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ClonedAdminUserType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'admin_user_id' => 'int',
        'admin_user_name' => 'string',
        'admin_user_api_key' => 'string'
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
        'admin_user_id' => 'admin_user_id',
        'admin_user_name' => 'admin_user_name',
        'admin_user_api_key' => 'admin_user_api_key'
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
        'admin_user_id' => 'setAdminUserId',
        'admin_user_name' => 'setAdminUserName',
        'admin_user_api_key' => 'setAdminUserApiKey'
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
        'admin_user_id' => 'getAdminUserId',
        'admin_user_name' => 'getAdminUserName',
        'admin_user_api_key' => 'getAdminUserApiKey'
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
        $this->container['admin_user_id'] = isset($data['admin_user_id']) ? $data['admin_user_id'] : null;
        $this->container['admin_user_name'] = isset($data['admin_user_name']) ? $data['admin_user_name'] : null;
        $this->container['admin_user_api_key'] = isset($data['admin_user_api_key']) ? $data['admin_user_api_key'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['admin_user_id'] === null) {
            $invalid_properties[] = "'admin_user_id' can't be null";
        }
        if ($this->container['admin_user_name'] === null) {
            $invalid_properties[] = "'admin_user_name' can't be null";
        }
        if ($this->container['admin_user_api_key'] === null) {
            $invalid_properties[] = "'admin_user_api_key' can't be null";
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
        if ($this->container['admin_user_id'] === null) {
            return false;
        }
        if ($this->container['admin_user_name'] === null) {
            return false;
        }
        if ($this->container['admin_user_api_key'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets admin_user_id
     * @return int
     */
    public function getAdminUserId()
    {
        return $this->container['admin_user_id'];
    }

    /**
     * Sets admin_user_id
     * @param int $admin_user_id The admin user ID.
     * @return $this
     */
    public function setAdminUserId($admin_user_id)
    {
        $this->container['admin_user_id'] = $admin_user_id;

        return $this;
    }

    /**
     * Gets admin_user_name
     * @return string
     */
    public function getAdminUserName()
    {
        return $this->container['admin_user_name'];
    }

    /**
     * Sets admin_user_name
     * @param string $admin_user_name The admin user name.
     * @return $this
     */
    public function setAdminUserName($admin_user_name)
    {
        $this->container['admin_user_name'] = $admin_user_name;

        return $this;
    }

    /**
     * Gets admin_user_api_key
     * @return string
     */
    public function getAdminUserApiKey()
    {
        return $this->container['admin_user_api_key'];
    }

    /**
     * Sets admin_user_api_key
     * @param string $admin_user_api_key The API key of the admin user.
     * @return $this
     */
    public function setAdminUserApiKey($admin_user_api_key)
    {
        $this->container['admin_user_api_key'] = $admin_user_api_key;

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


