<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

class SIPRegistrationType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SIPRegistrationType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'sip_registration_id' => 'int',
        'user_id' => 'int',
        'application_id' => 'int',
        'application_name' => 'string',
        'rule_id' => 'int',
        'rule_name' => 'string',
        'username' => 'int',
        'proxy' => 'int',
        'last_updated' => 'int',
        'auth_user' => 'string',
        'outbound_proxy' => 'int',
        'successful' => 'int',
        'status_code' => 'int',
        'error_message' => 'int',
        'deactivated' => 'bool',
        'next_subscription_renewal' => 'string',
        'purchase_date' => 'string',
        'subscription_price' => 'string'
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
        'sip_registration_id' => 'sip_registration_id',
        'user_id' => 'user_id',
        'application_id' => 'application_id',
        'application_name' => 'application_name',
        'rule_id' => 'rule_id',
        'rule_name' => 'rule_name',
        'username' => 'username',
        'proxy' => 'proxy',
        'last_updated' => 'last_updated',
        'auth_user' => 'auth_user',
        'outbound_proxy' => 'outbound_proxy',
        'successful' => 'successful',
        'status_code' => 'status_code',
        'error_message' => 'error_message',
        'deactivated' => 'deactivated',
        'next_subscription_renewal' => 'next_subscription_renewal',
        'purchase_date' => 'purchase_date',
        'subscription_price' => 'subscription_price'
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
        'sip_registration_id' => 'setSipRegistrationId',
        'user_id' => 'setUserId',
        'application_id' => 'setApplicationId',
        'application_name' => 'setApplicationName',
        'rule_id' => 'setRuleId',
        'rule_name' => 'setRuleName',
        'username' => 'setUsername',
        'proxy' => 'setProxy',
        'last_updated' => 'setLastUpdated',
        'auth_user' => 'setAuthUser',
        'outbound_proxy' => 'setOutboundProxy',
        'successful' => 'setSuccessful',
        'status_code' => 'setStatusCode',
        'error_message' => 'setErrorMessage',
        'deactivated' => 'setDeactivated',
        'next_subscription_renewal' => 'setNextSubscriptionRenewal',
        'purchase_date' => 'setPurchaseDate',
        'subscription_price' => 'setSubscriptionPrice'
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
        'sip_registration_id' => 'getSipRegistrationId',
        'user_id' => 'getUserId',
        'application_id' => 'getApplicationId',
        'application_name' => 'getApplicationName',
        'rule_id' => 'getRuleId',
        'rule_name' => 'getRuleName',
        'username' => 'getUsername',
        'proxy' => 'getProxy',
        'last_updated' => 'getLastUpdated',
        'auth_user' => 'getAuthUser',
        'outbound_proxy' => 'getOutboundProxy',
        'successful' => 'getSuccessful',
        'status_code' => 'getStatusCode',
        'error_message' => 'getErrorMessage',
        'deactivated' => 'getDeactivated',
        'next_subscription_renewal' => 'getNextSubscriptionRenewal',
        'purchase_date' => 'getPurchaseDate',
        'subscription_price' => 'getSubscriptionPrice'
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
        $this->container['sip_registration_id'] = isset($data['sip_registration_id']) ? $data['sip_registration_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['application_name'] = isset($data['application_name']) ? $data['application_name'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['proxy'] = isset($data['proxy']) ? $data['proxy'] : null;
        $this->container['last_updated'] = isset($data['last_updated']) ? $data['last_updated'] : null;
        $this->container['auth_user'] = isset($data['auth_user']) ? $data['auth_user'] : null;
        $this->container['outbound_proxy'] = isset($data['outbound_proxy']) ? $data['outbound_proxy'] : null;
        $this->container['successful'] = isset($data['successful']) ? $data['successful'] : null;
        $this->container['status_code'] = isset($data['status_code']) ? $data['status_code'] : null;
        $this->container['error_message'] = isset($data['error_message']) ? $data['error_message'] : null;
        $this->container['deactivated'] = isset($data['deactivated']) ? $data['deactivated'] : null;
        $this->container['next_subscription_renewal'] = isset($data['next_subscription_renewal']) ? $data['next_subscription_renewal'] : null;
        $this->container['purchase_date'] = isset($data['purchase_date']) ? $data['purchase_date'] : null;
        $this->container['subscription_price'] = isset($data['subscription_price']) ? $data['subscription_price'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['sip_registration_id'] === null) {
            $invalid_properties[] = "'sip_registration_id' can't be null";
        }
        if ($this->container['user_id'] === null) {
            $invalid_properties[] = "'user_id' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalid_properties[] = "'username' can't be null";
        }
        if ($this->container['proxy'] === null) {
            $invalid_properties[] = "'proxy' can't be null";
        }
        if ($this->container['last_updated'] === null) {
            $invalid_properties[] = "'last_updated' can't be null";
        }
        if ($this->container['deactivated'] === null) {
            $invalid_properties[] = "'deactivated' can't be null";
        }
        if ($this->container['next_subscription_renewal'] === null) {
            $invalid_properties[] = "'next_subscription_renewal' can't be null";
        }
        if ($this->container['purchase_date'] === null) {
            $invalid_properties[] = "'purchase_date' can't be null";
        }
        if ($this->container['subscription_price'] === null) {
            $invalid_properties[] = "'subscription_price' can't be null";
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
        if ($this->container['sip_registration_id'] === null) {
            return false;
        }
        if ($this->container['user_id'] === null) {
            return false;
        }
        if ($this->container['username'] === null) {
            return false;
        }
        if ($this->container['proxy'] === null) {
            return false;
        }
        if ($this->container['last_updated'] === null) {
            return false;
        }
        if ($this->container['deactivated'] === null) {
            return false;
        }
        if ($this->container['next_subscription_renewal'] === null) {
            return false;
        }
        if ($this->container['purchase_date'] === null) {
            return false;
        }
        if ($this->container['subscription_price'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sip_registration_id
     * @return int
     */
    public function getSipRegistrationId()
    {
        return $this->container['sip_registration_id'];
    }

    /**
     * Sets sip_registration_id
     * @param int $sip_registration_id The SIP registration ID.
     * @return $this
     */
    public function setSipRegistrationId($sip_registration_id)
    {
        $this->container['sip_registration_id'] = $sip_registration_id;

        return $this;
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
     * Gets application_id
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     * @param int $application_id The bound domain ID.
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
     * @param string $application_name The bound application name.
     * @return $this
     */
    public function setApplicationName($application_name)
    {
        $this->container['application_name'] = $application_name;

        return $this;
    }

    /**
     * Gets rule_id
     * @return int
     */
    public function getRuleId()
    {
        return $this->container['rule_id'];
    }

    /**
     * Sets rule_id
     * @param int $rule_id The bound rule ID.
     * @return $this
     */
    public function setRuleId($rule_id)
    {
        $this->container['rule_id'] = $rule_id;

        return $this;
    }

    /**
     * Gets rule_name
     * @return string
     */
    public function getRuleName()
    {
        return $this->container['rule_name'];
    }

    /**
     * Sets rule_name
     * @param string $rule_name The bound rule name.
     * @return $this
     */
    public function setRuleName($rule_name)
    {
        $this->container['rule_name'] = $rule_name;

        return $this;
    }

    /**
     * Gets username
     * @return int
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     * @param int $username The user name from sip proxy.
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

        return $this;
    }

    /**
     * Gets proxy
     * @return int
     */
    public function getProxy()
    {
        return $this->container['proxy'];
    }

    /**
     * Sets proxy
     * @param int $proxy The sip proxy.
     * @return $this
     */
    public function setProxy($proxy)
    {
        $this->container['proxy'] = $proxy;

        return $this;
    }

    /**
     * Gets last_updated
     * @return int
     */
    public function getLastUpdated()
    {
        return $this->container['last_updated'];
    }

    /**
     * Sets last_updated
     * @param int $last_updated The last time updated.
     * @return $this
     */
    public function setLastUpdated($last_updated)
    {
        $this->container['last_updated'] = $last_updated;

        return $this;
    }

    /**
     * Gets auth_user
     * @return string
     */
    public function getAuthUser()
    {
        return $this->container['auth_user'];
    }

    /**
     * Sets auth_user
     * @param string $auth_user The SIP authentications user
     * @return $this
     */
    public function setAuthUser($auth_user)
    {
        $this->container['auth_user'] = $auth_user;

        return $this;
    }

    /**
     * Gets outbound_proxy
     * @return int
     */
    public function getOutboundProxy()
    {
        return $this->container['outbound_proxy'];
    }

    /**
     * Sets outbound_proxy
     * @param int $outbound_proxy The outbound proxy.
     * @return $this
     */
    public function setOutboundProxy($outbound_proxy)
    {
        $this->container['outbound_proxy'] = $outbound_proxy;

        return $this;
    }

    /**
     * Gets successful
     * @return int
     */
    public function getSuccessful()
    {
        return $this->container['successful'];
    }

    /**
     * Sets successful
     * @param int $successful The successful SIP registration.
     * @return $this
     */
    public function setSuccessful($successful)
    {
        $this->container['successful'] = $successful;

        return $this;
    }

    /**
     * Gets status_code
     * @return int
     */
    public function getStatusCode()
    {
        return $this->container['status_code'];
    }

    /**
     * Sets status_code
     * @param int $status_code The status code from SIP registration.
     * @return $this
     */
    public function setStatusCode($status_code)
    {
        $this->container['status_code'] = $status_code;

        return $this;
    }

    /**
     * Gets error_message
     * @return int
     */
    public function getErrorMessage()
    {
        return $this->container['error_message'];
    }

    /**
     * Sets error_message
     * @param int $error_message The error message from SIP registration.
     * @return $this
     */
    public function setErrorMessage($error_message)
    {
        $this->container['error_message'] = $error_message;

        return $this;
    }

    /**
     * Gets deactivated
     * @return bool
     */
    public function getDeactivated()
    {
        return $this->container['deactivated'];
    }

    /**
     * Sets deactivated
     * @param bool $deactivated The subscription deactivation flag. The SIP registration is frozen if true.
     * @return $this
     */
    public function setDeactivated($deactivated)
    {
        $this->container['deactivated'] = $deactivated;

        return $this;
    }

    /**
     * Gets next_subscription_renewal
     * @return string
     */
    public function getNextSubscriptionRenewal()
    {
        return $this->container['next_subscription_renewal'];
    }

    /**
     * Sets next_subscription_renewal
     * @param string $next_subscription_renewal The next subscription renewal date in format: YYYY-MM-DD
     * @return $this
     */
    public function setNextSubscriptionRenewal($next_subscription_renewal)
    {
        $this->container['next_subscription_renewal'] = $next_subscription_renewal;

        return $this;
    }

    /**
     * Gets purchase_date
     * @return string
     */
    public function getPurchaseDate()
    {
        return $this->container['purchase_date'];
    }

    /**
     * Sets purchase_date
     * @param string $purchase_date The purchase date in format: YYYY-MM-DD hh:mm:ss
     * @return $this
     */
    public function setPurchaseDate($purchase_date)
    {
        $this->container['purchase_date'] = $purchase_date;

        return $this;
    }

    /**
     * Gets subscription_price
     * @return string
     */
    public function getSubscriptionPrice()
    {
        return $this->container['subscription_price'];
    }

    /**
     * Sets subscription_price
     * @param string $subscription_price The periodic subscription price.
     * @return $this
     */
    public function setSubscriptionPrice($subscription_price)
    {
        $this->container['subscription_price'] = $subscription_price;

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


