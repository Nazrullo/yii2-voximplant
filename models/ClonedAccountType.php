<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class ClonedAccountType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ClonedAccountType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_id' => 'int',
        'account_name' => 'string',
        'account_email' => 'string',
        'active' => 'bool',
        'api_key' => 'string',
        'users' => '\backend\modules\voximplant\models\ClonedUserType[]',
        'scenarios' => '\backend\modules\voximplant\models\ClonedScenarioType[]',
        'applications' => '\backend\modules\voximplant\models\ClonedApplicationType[]',
        'acd_queues' => '\backend\modules\voximplant\models\ClonedACDQueueType[]',
        'acd_skills' => '\backend\modules\voximplant\models\ClonedACDSkillType[]',
        'admin_roles' => '\backend\modules\voximplant\models\ClonedAdminRoleType[]',
        'admin_users' => '\backend\modules\voximplant\models\ClonedAdminUserType[]'
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
        'account_id' => 'account_id',
        'account_name' => 'account_name',
        'account_email' => 'account_email',
        'active' => 'active',
        'api_key' => 'api_key',
        'users' => 'users',
        'scenarios' => 'scenarios',
        'applications' => 'applications',
        'acd_queues' => 'acd_queues',
        'acd_skills' => 'acd_skills',
        'admin_roles' => 'admin_roles',
        'admin_users' => 'admin_users'
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
        'account_id' => 'setAccountId',
        'account_name' => 'setAccountName',
        'account_email' => 'setAccountEmail',
        'active' => 'setActive',
        'api_key' => 'setApiKey',
        'users' => 'setUsers',
        'scenarios' => 'setScenarios',
        'applications' => 'setApplications',
        'acd_queues' => 'setAcdQueues',
        'acd_skills' => 'setAcdSkills',
        'admin_roles' => 'setAdminRoles',
        'admin_users' => 'setAdminUsers'
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
        'account_id' => 'getAccountId',
        'account_name' => 'getAccountName',
        'account_email' => 'getAccountEmail',
        'active' => 'getActive',
        'api_key' => 'getApiKey',
        'users' => 'getUsers',
        'scenarios' => 'getScenarios',
        'applications' => 'getApplications',
        'acd_queues' => 'getAcdQueues',
        'acd_skills' => 'getAcdSkills',
        'admin_roles' => 'getAdminRoles',
        'admin_users' => 'getAdminUsers'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_email'] = isset($data['account_email']) ? $data['account_email'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['api_key'] = isset($data['api_key']) ? $data['api_key'] : null;
        $this->container['users'] = isset($data['users']) ? $data['users'] : null;
        $this->container['scenarios'] = isset($data['scenarios']) ? $data['scenarios'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
        $this->container['acd_queues'] = isset($data['acd_queues']) ? $data['acd_queues'] : null;
        $this->container['acd_skills'] = isset($data['acd_skills']) ? $data['acd_skills'] : null;
        $this->container['admin_roles'] = isset($data['admin_roles']) ? $data['admin_roles'] : null;
        $this->container['admin_users'] = isset($data['admin_users']) ? $data['admin_users'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['account_name'] === null) {
            $invalid_properties[] = "'account_name' can't be null";
        }
        if ($this->container['account_email'] === null) {
            $invalid_properties[] = "'account_email' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalid_properties[] = "'active' can't be null";
        }
        if ($this->container['api_key'] === null) {
            $invalid_properties[] = "'api_key' can't be null";
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
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['account_name'] === null) {
            return false;
        }
        if ($this->container['account_email'] === null) {
            return false;
        }
        if ($this->container['active'] === null) {
            return false;
        }
        if ($this->container['api_key'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_id
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param int $account_id The account's ID.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets account_name
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     * @param string $account_name The account's name.
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_email
     * @return string
     */
    public function getAccountEmail()
    {
        return $this->container['account_email'];
    }

    /**
     * Sets account_email
     * @param string $account_email The account's email.
     * @return $this
     */
    public function setAccountEmail($account_email)
    {
        $this->container['account_email'] = $account_email;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active The account activation flag.
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets api_key
     * @return string
     */
    public function getApiKey()
    {
        return $this->container['api_key'];
    }

    /**
     * Sets api_key
     * @param string $api_key The account API key.
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->container['api_key'] = $api_key;

        return $this;
    }

    /**
     * Gets users
     * @return \backend\modules\voximplant\models\ClonedUserType[]
     */
    public function getUsers()
    {
        return $this->container['users'];
    }

    /**
     * Sets users
     * @param \backend\modules\voximplant\models\ClonedUserType[] $users
     * @return $this
     */
    public function setUsers($users)
    {
        $this->container['users'] = $users;

        return $this;
    }

    /**
     * Gets scenarios
     * @return \backend\modules\voximplant\models\ClonedScenarioType[]
     */
    public function getScenarios()
    {
        return $this->container['scenarios'];
    }

    /**
     * Sets scenarios
     * @param \backend\modules\voximplant\models\ClonedScenarioType[] $scenarios
     * @return $this
     */
    public function setScenarios($scenarios)
    {
        $this->container['scenarios'] = $scenarios;

        return $this;
    }

    /**
     * Gets applications
     * @return \backend\modules\voximplant\models\ClonedApplicationType[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     * @param \backend\modules\voximplant\models\ClonedApplicationType[] $applications
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

        return $this;
    }

    /**
     * Gets acd_queues
     * @return \backend\modules\voximplant\models\ClonedACDQueueType[]
     */
    public function getAcdQueues()
    {
        return $this->container['acd_queues'];
    }

    /**
     * Sets acd_queues
     * @param \backend\modules\voximplant\models\ClonedACDQueueType[] $acd_queues
     * @return $this
     */
    public function setAcdQueues($acd_queues)
    {
        $this->container['acd_queues'] = $acd_queues;

        return $this;
    }

    /**
     * Gets acd_skills
     * @return \backend\modules\voximplant\models\ClonedACDSkillType[]
     */
    public function getAcdSkills()
    {
        return $this->container['acd_skills'];
    }

    /**
     * Sets acd_skills
     * @param \backend\modules\voximplant\models\ClonedACDSkillType[] $acd_skills
     * @return $this
     */
    public function setAcdSkills($acd_skills)
    {
        $this->container['acd_skills'] = $acd_skills;

        return $this;
    }

    /**
     * Gets admin_roles
     * @return \backend\modules\voximplant\models\ClonedAdminRoleType[]
     */
    public function getAdminRoles()
    {
        return $this->container['admin_roles'];
    }

    /**
     * Sets admin_roles
     * @param \backend\modules\voximplant\models\ClonedAdminRoleType[] $admin_roles
     * @return $this
     */
    public function setAdminRoles($admin_roles)
    {
        $this->container['admin_roles'] = $admin_roles;

        return $this;
    }

    /**
     * Gets admin_users
     * @return \backend\modules\voximplant\models\ClonedAdminUserType[]
     */
    public function getAdminUsers()
    {
        return $this->container['admin_users'];
    }

    /**
     * Sets admin_users
     * @param \backend\modules\voximplant\models\ClonedAdminUserType[] $admin_users
     * @return $this
     */
    public function setAdminUsers($admin_users)
    {
        $this->container['admin_users'] = $admin_users;

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


