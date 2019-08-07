<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;

class AddAccountApiResponse implements ArrayAccess
{
    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'AddAccount API Response';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = array(
        'result' => 'int',
        'account_id' => 'int',
        'api_key' => 'string',
        'active' => 'boolean'
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
        'result' => 'result',
        'account_id' => 'account_id',
        'api_key' => 'api_key',
        'active' => 'active'
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
        'result' => 'setResult',
        'account_id' => 'setAccountId',
        'api_key' => 'setAccountApiKey',
        'active'=>'setActive'
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
        'result' => 'getResult',
        'account_id' => 'getAccountId',
        'api_key' => 'getAccountApiKey',
        'active'=>'getActive'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets result
     * @return int
     */
    public function getResult()
    {
        return $this->container['result'];
    }
    /**
     * Gets active
     * @return boolean
     */

    public function getActive(){
        return $this->container['active'];
    }
    /**
     * Sets active
     * @param boolean active true
     * @return $this
     */
    public function setActive($result)
    {
        $this->container['active'] = $result;

        return $this;
    }

    /**
     * Sets result
     * @param int $result 1
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
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
     * @param int $admin_user_id The new admin user ID.
     * @return $this
     */
    public function setAccountId($admin_user_id)
    {
        $this->container['account_id'] = $admin_user_id;

        return $this;
    }

    /**
     * Gets admin_user_api_key
     * @return string
     */
    public function getAccountApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets admin_user_api_key
     * @param string $admin_user_api_key The admin user API key.
     * @return $this
     */
    public function setAccountApiKey($admin_user_api_key)
    {
        $this->container['api_key'] = $admin_user_api_key;

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


