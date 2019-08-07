<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class ClonedAdminRoleType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ClonedAdminRoleType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'admin_role_id' => 'int',
        'admin_role_name' => 'string'
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
        'admin_role_id' => 'admin_role_id',
        'admin_role_name' => 'admin_role_name'
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
        'admin_role_id' => 'setAdminRoleId',
        'admin_role_name' => 'setAdminRoleName'
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
        'admin_role_id' => 'getAdminRoleId',
        'admin_role_name' => 'getAdminRoleName'
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
        $this->container['admin_role_id'] = isset($data['admin_role_id']) ? $data['admin_role_id'] : null;
        $this->container['admin_role_name'] = isset($data['admin_role_name']) ? $data['admin_role_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['admin_role_id'] === null) {
            $invalid_properties[] = "'admin_role_id' can't be null";
        }
        if ($this->container['admin_role_name'] === null) {
            $invalid_properties[] = "'admin_role_name' can't be null";
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
        if ($this->container['admin_role_id'] === null) {
            return false;
        }
        if ($this->container['admin_role_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets admin_role_id
     * @return int
     */
    public function getAdminRoleId()
    {
        return $this->container['admin_role_id'];
    }

    /**
     * Sets admin_role_id
     * @param int $admin_role_id The admin role ID.
     * @return $this
     */
    public function setAdminRoleId($admin_role_id)
    {
        $this->container['admin_role_id'] = $admin_role_id;

        return $this;
    }

    /**
     * Gets admin_role_name
     * @return string
     */
    public function getAdminRoleName()
    {
        return $this->container['admin_role_name'];
    }

    /**
     * Sets admin_role_name
     * @param string $admin_role_name The admin role name.
     * @return $this
     */
    public function setAdminRoleName($admin_role_name)
    {
        $this->container['admin_role_name'] = $admin_role_name;

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


