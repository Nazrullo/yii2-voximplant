<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class UserInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'user_id' => 'int',
        'user_name' => 'string',
        'user_display_name' => 'string',
        'user_active' => 'bool',
        'parent_accounting' => 'bool',
        'two_factor_auth_required' => 'bool',
        'mobile_phone' => 'string',
        'balance' => 'int',
        'user_custom_data' => 'string',
        'applications' => '\backend\modules\voximplant\models\ApplicationInfoType[]',
        'skills' => '\backend\modules\voximplant\models\SkillInfoType[]',
        'acd_queues' => '\backend\modules\voximplant\models\ACDQueueOperatorInfoType[]',
        'modified' => 'string'
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
        'user_active' => 'user_active',
        'parent_accounting' => 'parent_accounting',
        'two_factor_auth_required' => 'two_factor_auth_required',
        'mobile_phone' => 'mobile_phone',
        'balance' => 'balance',
        'user_custom_data' => 'user_custom_data',
        'applications' => 'applications',
        'skills' => 'skills',
        'acd_queues' => 'acd_queues',
        'modified' => 'modified'
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
        'user_active' => 'setUserActive',
        'parent_accounting' => 'setParentAccounting',
        'two_factor_auth_required' => 'setTwoFactorAuthRequired',
        'mobile_phone' => 'setMobilePhone',
        'balance' => 'setBalance',
        'user_custom_data' => 'setUserCustomData',
        'applications' => 'setApplications',
        'skills' => 'setSkills',
        'acd_queues' => 'setAcdQueues',
        'modified' => 'setModified'
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
        'user_active' => 'getUserActive',
        'parent_accounting' => 'getParentAccounting',
        'two_factor_auth_required' => 'getTwoFactorAuthRequired',
        'mobile_phone' => 'getMobilePhone',
        'balance' => 'getBalance',
        'user_custom_data' => 'getUserCustomData',
        'applications' => 'getApplications',
        'skills' => 'getSkills',
        'acd_queues' => 'getAcdQueues',
        'modified' => 'getModified'
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
        $this->container['user_active'] = isset($data['user_active']) ? $data['user_active'] : null;
        $this->container['parent_accounting'] = isset($data['parent_accounting']) ? $data['parent_accounting'] : null;
        $this->container['two_factor_auth_required'] = isset($data['two_factor_auth_required']) ? $data['two_factor_auth_required'] : null;
        $this->container['mobile_phone'] = isset($data['mobile_phone']) ? $data['mobile_phone'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['user_custom_data'] = isset($data['user_custom_data']) ? $data['user_custom_data'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['skills'] = isset($data['skills']) ? $data['skills'] : null;
        $this->container['acd_queues'] = isset($data['acd_queues']) ? $data['acd_queues'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
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
        if ($this->container['user_active'] === null) {
            $invalid_properties[] = "'user_active' can't be null";
        }
        if ($this->container['parent_accounting'] === null) {
            $invalid_properties[] = "'parent_accounting' can't be null";
        }
        if ($this->container['two_factor_auth_required'] === null) {
            $invalid_properties[] = "'two_factor_auth_required' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalid_properties[] = "'balance' can't be null";
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
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['user_name'] === null) {
            return false;
        }
        if ($this->container['user_display_name'] === null) {
            return false;
        }
        if ($this->container['user_active'] === null) {
            return false;
        }
        if ($this->container['parent_accounting'] === null) {
            return false;
        }
        if ($this->container['two_factor_auth_required'] === null) {
            return false;
        }
        if ($this->container['balance'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
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
     * @param int $user_id The user ID.
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
     * @param string $user_name The user name.
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
     * @param string $user_display_name The display user name.
     * @return $this
     */
    public function setUserDisplayName($user_display_name)
    {
        $this->container['user_display_name'] = $user_display_name;

        return $this;
    }

    /**
     * Gets user_active
     * @return bool
     */
    public function getUserActive()
    {
        return $this->container['user_active'];
    }

    /**
     * Sets user_active
     * @param bool $user_active The user active flag.
     * @return $this
     */
    public function setUserActive($user_active)
    {
        $this->container['user_active'] = $user_active;

        return $this;
    }

    /**
     * Gets parent_accounting
     * @return bool
     */
    public function getParentAccounting()
    {
        return $this->container['parent_accounting'];
    }

    /**
     * Sets parent_accounting
     * @param bool $parent_accounting Is the user use account money?
     * @return $this
     */
    public function setParentAccounting($parent_accounting)
    {
        $this->container['parent_accounting'] = $parent_accounting;

        return $this;
    }

    /**
     * Gets two_factor_auth_required
     * @return bool
     */
    public function getTwoFactorAuthRequired()
    {
        return $this->container['two_factor_auth_required'];
    }

    /**
     * Sets two_factor_auth_required
     * @param bool $two_factor_auth_required Is two factor authorization required?
     * @return $this
     */
    public function setTwoFactorAuthRequired($two_factor_auth_required)
    {
        $this->container['two_factor_auth_required'] = $two_factor_auth_required;

        return $this;
    }

    /**
     * Gets mobile_phone
     * @return string
     */
    public function getMobilePhone()
    {
        return $this->container['mobile_phone'];
    }

    /**
     * Sets mobile_phone
     * @param string $mobile_phone The user mobile phone.
     * @return $this
     */
    public function setMobilePhone($mobile_phone)
    {
        $this->container['mobile_phone'] = $mobile_phone;

        return $this;
    }

    /**
     * Gets balance
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param int $balance The user money.
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets user_custom_data
     * @return string
     */
    public function getUserCustomData()
    {
        return $this->container['user_custom_data'];
    }

    /**
     * Sets user_custom_data
     * @param string $user_custom_data The custom data.
     * @return $this
     */
    public function setUserCustomData($user_custom_data)
    {
        $this->container['user_custom_data'] = $user_custom_data;

        return $this;
    }

    /**
     * Gets applications
     * @return \backend\modules\voximplant\models\ApplicationInfoType[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     * @param \backend\modules\voximplant\models\ApplicationInfoType[] $applications
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets skills
     * @return \backend\modules\voximplant\models\SkillInfoType[]
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     * @param \backend\modules\voximplant\models\SkillInfoType[] $skills
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }

    /**
     * Gets acd_queues
     * @return \backend\modules\voximplant\models\ACDQueueOperatorInfoType[]
     */
    public function getAcdQueues()
    {
        return $this->container['acd_queues'];
    }

    /**
     * Sets acd_queues
     * @param \backend\modules\voximplant\models\ACDQueueOperatorInfoType[] $acd_queues
     * @return $this
     */
    public function setAcdQueues($acd_queues)
    {
        $this->container['acd_queues'] = $acd_queues;

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
     * @param string $modified The user editing UTC date in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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


