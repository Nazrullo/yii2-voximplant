<?php


namespace backend\modules\voximplant\models;
use \ArrayAccess;


class ApplicationInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ApplicationInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'application_id' => 'int',
        'application_name' => 'string',
        'im_enabled' => 'bool',
        'im_roster_type' => 'string',
        'busy_on_call' => 'bool',
        'modified' => 'string',
        'users' => '\backend\modules\voximplant\models\UserInfoType[]'
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
        'application_id' => 'application_id',
        'application_name' => 'application_name',
        'im_enabled' => 'im_enabled',
        'im_roster_type' => 'im_roster_type',
        'busy_on_call' => 'busy_on_call',
        'modified' => 'modified',
        'users' => 'users'
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
        'application_id' => 'setApplicationId',
        'application_name' => 'setApplicationName',
        'im_enabled' => 'setImEnabled',
        'im_roster_type' => 'setImRosterType',
        'busy_on_call' => 'setBusyOnCall',
        'modified' => 'setModified',
        'users' => 'setUsers'
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
        'application_id' => 'getApplicationId',
        'application_name' => 'getApplicationName',
        'im_enabled' => 'getImEnabled',
        'im_roster_type' => 'getImRosterType',
        'busy_on_call' => 'getBusyOnCall',
        'modified' => 'getModified',
        'users' => 'getUsers'
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
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['application_name'] = isset($data['application_name']) ? $data['application_name'] : null;
        $this->container['im_enabled'] = isset($data['im_enabled']) ? $data['im_enabled'] : null;
        $this->container['im_roster_type'] = isset($data['im_roster_type']) ? $data['im_roster_type'] : null;
        $this->container['busy_on_call'] = isset($data['busy_on_call']) ? $data['busy_on_call'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['application_id'] === null) {
            $invalid_properties[] = "'application_id' can't be null";
        }
        if ($this->container['application_name'] === null) {
            $invalid_properties[] = "'application_name' can't be null";
        }
        if ($this->container['im_enabled'] === null) {
            $invalid_properties[] = "'im_enabled' can't be null";
        }
        if ($this->container['im_roster_type'] === null) {
            $invalid_properties[] = "'im_roster_type' can't be null";
        }
        if ($this->container['busy_on_call'] === null) {
            $invalid_properties[] = "'busy_on_call' can't be null";
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
        if ($this->container['application_id'] === null) {
            return false;
        }
        if ($this->container['application_name'] === null) {
            return false;
        }
        if ($this->container['im_enabled'] === null) {
            return false;
        }
        if ($this->container['im_roster_type'] === null) {
            return false;
        }
        if ($this->container['busy_on_call'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets application_id
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     * @param int $application_id The application ID.
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets application_name
     * @return string
     */
    public function getApplicationName()
    {
        return $this->container['application_name'];
    }

    /**
     * Sets application_name
     * @param string $application_name The full application name.
     * @return $this
     */
    public function setApplicationName($application_name)
    {
        $this->container['application_name'] = $application_name;

        return $this;
    }

    /**
     * Gets im_enabled
     * @return bool
     */
    public function getImEnabled()
    {
        return $this->container['im_enabled'];
    }

    /**
     * Sets im_enabled
     * @param bool $im_enabled Is the instant messaging (IM) enabled?
     * @return $this
     */
    public function setImEnabled($im_enabled)
    {
        $this->container['im_enabled'] = $im_enabled;

        return $this;
    }

    /**
     * Gets im_roster_type
     * @return string
     */
    public function getImRosterType()
    {
        return $this->container['im_roster_type'];
    }

    /**
     * Sets im_roster_type
     * @param string $im_roster_type The roster type (IM users list type). The following values are possible: personal, group.
     * @return $this
     */
    public function setImRosterType($im_roster_type)
    {
        $this->container['im_roster_type'] = $im_roster_type;

        return $this;
    }

    /**
     * Gets busy_on_call
     * @return bool
     */
    public function getBusyOnCall()
    {
        return $this->container['busy_on_call'];
    }

    /**
     * Sets busy_on_call
     * @param bool $busy_on_call The busy_on_call flag.
     * @return $this
     */
    public function setBusyOnCall($busy_on_call)
    {
        $this->container['busy_on_call'] = $busy_on_call;

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
     * @param string $modified The application editing UTC date in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

        return $this;
    }

    /**
     * Gets users
     * @return \backend\modules\voximplant\models\UserInfoType[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     * @param \backend\modules\voximplant\models\UserInfoType[] $users
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

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


