<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class AdminUserType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AdminUserType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'admin_user_id' => 'int',
        'admin_user_name' => 'string',
        'admin_user_display_name' => 'string',
        'admin_user_active' => 'bool',
        'modified' => 'string',
        'access_entries' => 'string[]',
        'admin_roles' => 'backend\modules\voximplant\models\AdminRoleType[]'
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
        'admin_user_display_name' => 'admin_user_display_name',
        'admin_user_active' => 'admin_user_active',
        'modified' => 'modified',
        'access_entries' => 'access_entries',
        'admin_roles' => 'admin_roles'
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
        'admin_user_display_name' => 'setAdminUserDisplayName',
        'admin_user_active' => 'setAdminUserActive',
        'modified' => 'setModified',
        'access_entries' => 'setAccessEntries',
        'admin_roles' => 'setAdminRoles'
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
        'admin_user_display_name' => 'getAdminUserDisplayName',
        'admin_user_active' => 'getAdminUserActive',
        'modified' => 'getModified',
        'access_entries' => 'getAccessEntries',
        'admin_roles' => 'getAdminRoles'
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
        $this->container['admin_user_display_name'] = isset($data['admin_user_display_name']) ? $data['admin_user_display_name'] : null;
        $this->container['admin_user_active'] = isset($data['admin_user_active']) ? $data['admin_user_active'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['access_entries'] = isset($data['access_entries']) ? $data['access_entries'] : null;
        $this->container['admin_roles'] = isset($data['admin_roles']) ? $data['admin_roles'] : null;
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
        if ($this->container['admin_user_display_name'] === null) {
            $invalid_properties[] = "'admin_user_display_name' can't be null";
        }
        if ($this->container['admin_user_active'] === null) {
            $invalid_properties[] = "'admin_user_active' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalid_properties[] = "'modified' can't be null";
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
        if ($this->container['admin_user_display_name'] === null) {
            return false;
        }
        if ($this->container['admin_user_active'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
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
     * Gets admin_user_display_name
     * @return string
     */
    public function getAdminUserDisplayName()
    {
        return $this->container['admin_user_display_name'];
    }

    /**
     * Sets admin_user_display_name
     * @param string $admin_user_display_name The admin user display name.
     * @return $this
     */
    public function setAdminUserDisplayName($admin_user_display_name)
    {
        $this->container['admin_user_display_name'] = $admin_user_display_name;

        return $this;
    }

    /**
     * Gets admin_user_active
     * @return bool
     */
    public function getAdminUserActive()
    {
        return $this->container['admin_user_active'];
    }

    /**
     * Sets admin_user_active
     * @param bool $admin_user_active Is allowed to logon?
     * @return $this
     */
    public function setAdminUserActive($admin_user_active)
    {
        $this->container['admin_user_active'] = $admin_user_active;

        return $this;
    }

    /**
     * Gets modified
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param string $modified The admin user editing UTC date in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets access_entries
     * @return string[]
     */
    public function getAccessEntries()
    {
        return $this->container['access_entries'];
    }

    /**
     * Sets access_entries
     * @param string[] $access_entries
     * @return $this
     */
    public function setAccessEntries($access_entries)
    {
        $this->container['access_entries'] = $access_entries;

        return $this;
    }

    /**
     * Gets admin_roles
     * @return backend\modules\voximplant\models\AdminRoleType[]
     */
    public function getAdminRoles()
    {
        return $this->container['admin_roles'];
    }

    /**
     * Sets admin_roles
     * @param backend\modules\voximplant\models\AdminRoleType[] $admin_roles
     * @return $this
     */
    public function setAdminRoles($admin_roles)
    {
        $this->container['admin_roles'] = $admin_roles;

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


