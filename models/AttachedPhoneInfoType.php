<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class AttachedPhoneInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AttachedPhoneInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'phone_id' => 'int',
        'phone_number' => 'string',
        'phone_price' => 'int',
        'phone_country_code' => 'string',
        'phone_next_renewal' => 'string',
        'phone_purchase_date' => 'string',
        'deactivated' => 'bool',
        'canceled' => 'bool',
        'auto_charge' => 'bool',
        'application_id' => 'int',
        'application_name' => 'string',
        'rule_id' => 'int',
        'rule_name' => 'string',
        'category_name' => 'string',
        'required_verification' => 'string',
        'verification_status' => 'string',
        'unverified_hold_until' => 'string',
        'can_be_used' => 'bool'
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
        'phone_id' => 'phone_id',
        'phone_number' => 'phone_number',
        'phone_price' => 'phone_price',
        'phone_country_code' => 'phone_country_code',
        'phone_next_renewal' => 'phone_next_renewal',
        'phone_purchase_date' => 'phone_purchase_date',
        'deactivated' => 'deactivated',
        'canceled' => 'canceled',
        'auto_charge' => 'auto_charge',
        'application_id' => 'application_id',
        'application_name' => 'application_name',
        'rule_id' => 'rule_id',
        'rule_name' => 'rule_name',
        'category_name' => 'category_name',
        'required_verification' => 'required_verification',
        'verification_status' => 'verification_status',
        'unverified_hold_until' => 'unverified_hold_until',
        'can_be_used' => 'can_be_used'
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
        'phone_id' => 'setPhoneId',
        'phone_number' => 'setPhoneNumber',
        'phone_price' => 'setPhonePrice',
        'phone_country_code' => 'setPhoneCountryCode',
        'phone_next_renewal' => 'setPhoneNextRenewal',
        'phone_purchase_date' => 'setPhonePurchaseDate',
        'deactivated' => 'setDeactivated',
        'canceled' => 'setCanceled',
        'auto_charge' => 'setAutoCharge',
        'application_id' => 'setApplicationId',
        'application_name' => 'setApplicationName',
        'rule_id' => 'setRuleId',
        'rule_name' => 'setRuleName',
        'category_name' => 'setCategoryName',
        'required_verification' => 'setRequiredVerification',
        'verification_status' => 'setVerificationStatus',
        'unverified_hold_until' => 'setUnverifiedHoldUntil',
        'can_be_used' => 'setCanBeUsed'
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
        'phone_id' => 'getPhoneId',
        'phone_number' => 'getPhoneNumber',
        'phone_price' => 'getPhonePrice',
        'phone_country_code' => 'getPhoneCountryCode',
        'phone_next_renewal' => 'getPhoneNextRenewal',
        'phone_purchase_date' => 'getPhonePurchaseDate',
        'deactivated' => 'getDeactivated',
        'canceled' => 'getCanceled',
        'auto_charge' => 'getAutoCharge',
        'application_id' => 'getApplicationId',
        'application_name' => 'getApplicationName',
        'rule_id' => 'getRuleId',
        'rule_name' => 'getRuleName',
        'category_name' => 'getCategoryName',
        'required_verification' => 'getRequiredVerification',
        'verification_status' => 'getVerificationStatus',
        'unverified_hold_until' => 'getUnverifiedHoldUntil',
        'can_be_used' => 'getCanBeUsed'
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
        $this->container['phone_id'] = isset($data['phone_id']) ? $data['phone_id'] : null;
        $this->container['phone_number'] = isset($data['phone_number']) ? $data['phone_number'] : null;
        $this->container['phone_price'] = isset($data['phone_price']) ? $data['phone_price'] : null;
        $this->container['phone_country_code'] = isset($data['phone_country_code']) ? $data['phone_country_code'] : null;
        $this->container['phone_next_renewal'] = isset($data['phone_next_renewal']) ? $data['phone_next_renewal'] : null;
        $this->container['phone_purchase_date'] = isset($data['phone_purchase_date']) ? $data['phone_purchase_date'] : null;
        $this->container['deactivated'] = isset($data['deactivated']) ? $data['deactivated'] : null;
        $this->container['canceled'] = isset($data['canceled']) ? $data['canceled'] : null;
        $this->container['auto_charge'] = isset($data['auto_charge']) ? $data['auto_charge'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['application_name'] = isset($data['application_name']) ? $data['application_name'] : null;
        $this->container['rule_id'] = isset($data['rule_id']) ? $data['rule_id'] : null;
        $this->container['rule_name'] = isset($data['rule_name']) ? $data['rule_name'] : null;
        $this->container['category_name'] = isset($data['category_name']) ? $data['category_name'] : null;
        $this->container['required_verification'] = isset($data['required_verification']) ? $data['required_verification'] : null;
        $this->container['verification_status'] = isset($data['verification_status']) ? $data['verification_status'] : null;
        $this->container['unverified_hold_until'] = isset($data['unverified_hold_until']) ? $data['unverified_hold_until'] : null;
        $this->container['can_be_used'] = isset($data['can_be_used']) ? $data['can_be_used'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['phone_id'] === null) {
            $invalid_properties[] = "'phone_id' can't be null";
        }
        if ($this->container['phone_number'] === null) {
            $invalid_properties[] = "'phone_number' can't be null";
        }
        if ($this->container['phone_price'] === null) {
            $invalid_properties[] = "'phone_price' can't be null";
        }
        if ($this->container['phone_country_code'] === null) {
            $invalid_properties[] = "'phone_country_code' can't be null";
        }
        if ($this->container['phone_next_renewal'] === null) {
            $invalid_properties[] = "'phone_next_renewal' can't be null";
        }
        if ($this->container['phone_purchase_date'] === null) {
            $invalid_properties[] = "'phone_purchase_date' can't be null";
        }
        if ($this->container['deactivated'] === null) {
            $invalid_properties[] = "'deactivated' can't be null";
        }
        if ($this->container['canceled'] === null) {
            $invalid_properties[] = "'canceled' can't be null";
        }
        if ($this->container['auto_charge'] === null) {
            $invalid_properties[] = "'auto_charge' can't be null";
        }
        if ($this->container['category_name'] === null) {
            $invalid_properties[] = "'category_name' can't be null";
        }
        if ($this->container['can_be_used'] === null) {
            $invalid_properties[] = "'can_be_used' can't be null";
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
        if ($this->container['phone_id'] === null) {
            return false;
        }
        if ($this->container['phone_number'] === null) {
            return false;
        }
        if ($this->container['phone_price'] === null) {
            return false;
        }
        if ($this->container['phone_country_code'] === null) {
            return false;
        }
        if ($this->container['phone_next_renewal'] === null) {
            return false;
        }
        if ($this->container['phone_purchase_date'] === null) {
            return false;
        }
        if ($this->container['deactivated'] === null) {
            return false;
        }
        if ($this->container['canceled'] === null) {
            return false;
        }
        if ($this->container['auto_charge'] === null) {
            return false;
        }
        if ($this->container['category_name'] === null) {
            return false;
        }
        if ($this->container['can_be_used'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets phone_id
     * @return int
     */
    public function getPhoneId()
    {
        return $this->container['phone_id'];
    }

    /**
     * Sets phone_id
     * @param int $phone_id The phone ID.
     * @return $this
     */
    public function setPhoneId($phone_id)
    {
        $this->container['phone_id'] = $phone_id;

        return $this;
    }

    /**
     * Gets phone_number
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phone_number'];
    }

    /**
     * Sets phone_number
     * @param string $phone_number The phone number.
     * @return $this
     */
    public function setPhoneNumber($phone_number)
    {
        $this->container['phone_number'] = $phone_number;

        return $this;
    }

    /**
     * Gets phone_price
     * @return int
     */
    public function getPhonePrice()
    {
        return $this->container['phone_price'];
    }

    /**
     * Sets phone_price
     * @param int $phone_price The periodic phone price.
     * @return $this
     */
    public function setPhonePrice($phone_price)
    {
        $this->container['phone_price'] = $phone_price;

        return $this;
    }

    /**
     * Gets phone_country_code
     * @return string
     */
    public function getPhoneCountryCode()
    {
        return $this->container['phone_country_code'];
    }

    /**
     * Sets phone_country_code
     * @param string $phone_country_code The phone country code (2 symbols).
     * @return $this
     */
    public function setPhoneCountryCode($phone_country_code)
    {
        $this->container['phone_country_code'] = $phone_country_code;

        return $this;
    }

    /**
     * Gets phone_next_renewal
     * @return string
     */
    public function getPhoneNextRenewal()
    {
        return $this->container['phone_next_renewal'];
    }

    /**
     * Sets phone_next_renewal
     * @param string $phone_next_renewal The next renewal date in format: YYYY-MM-DD
     * @return $this
     */
    public function setPhoneNextRenewal($phone_next_renewal)
    {
        $this->container['phone_next_renewal'] = $phone_next_renewal;

        return $this;
    }

    /**
     * Gets phone_purchase_date
     * @return string
     */
    public function getPhonePurchaseDate()
    {
        return $this->container['phone_purchase_date'];
    }

    /**
     * Sets phone_purchase_date
     * @param string $phone_purchase_date The purchase date in format: YYYY-MM-DD hh:mm:ss
     * @return $this
     */
    public function setPhonePurchaseDate($phone_purchase_date)
    {
        $this->container['phone_purchase_date'] = $phone_purchase_date;

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
     * @param bool $deactivated The flag of the frozen subscription.
     * @return $this
     */
    public function setDeactivated($deactivated)
    {
        $this->container['deactivated'] = $deactivated;

        return $this;
    }

    /**
     * Gets canceled
     * @return bool
     */
    public function getCanceled()
    {
        return $this->container['canceled'];
    }

    /**
     * Sets canceled
     * @param bool $canceled The flag of the deleted subscription.
     * @return $this
     */
    public function setCanceled($canceled)
    {
        $this->container['canceled'] = $canceled;

        return $this;
    }

    /**
     * Gets auto_charge
     * @return bool
     */
    public function getAutoCharge()
    {
        return $this->container['auto_charge'];
    }

    /**
     * Sets auto_charge
     * @param bool $auto_charge The auto_charge flag.
     * @return $this
     */
    public function setAutoCharge($auto_charge)
    {
        $this->container['auto_charge'] = $auto_charge;

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
     * @param int $application_id The bound application ID.
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
     * Gets category_name
     * @return string
     */
    public function getCategoryName()
    {
        return $this->container['category_name'];
    }

    /**
     * Sets category_name
     * @param string $category_name The phone category name (MOBILE, GEOGRAPHIC, TOLLFREE, MOSCOW495)
     * @return $this
     */
    public function setCategoryName($category_name)
    {
        $this->container['category_name'] = $category_name;

        return $this;
    }

    /**
     * Gets required_verification
     * @return string
     */
    public function getRequiredVerification()
    {
        return $this->container['required_verification'];
    }

    /**
     * Sets required_verification
     * @param string $required_verification The required account verification name.
     * @return $this
     */
    public function setRequiredVerification($required_verification)
    {
        $this->container['required_verification'] = $required_verification;

        return $this;
    }

    /**
     * Gets verification_status
     * @return string
     */
    public function getVerificationStatus()
    {
        return $this->container['verification_status'];
    }

    /**
     * Sets verification_status
     * @param string $verification_status The account verification status. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED
     * @return $this
     */
    public function setVerificationStatus($verification_status)
    {
        $this->container['verification_status'] = $verification_status;

        return $this;
    }

    /**
     * Gets unverified_hold_until
     * @return string
     */
    public function getUnverifiedHoldUntil()
    {
        return $this->container['unverified_hold_until'];
    }

    /**
     * Sets unverified_hold_until
     * @param string $unverified_hold_until Unverified phone hold until the date in format: YYYY-MM-DD (if the account verification is required). The number will be detached on that day automatically!
     * @return $this
     */
    public function setUnverifiedHoldUntil($unverified_hold_until)
    {
        $this->container['unverified_hold_until'] = $unverified_hold_until;

        return $this;
    }

    /**
     * Gets can_be_used
     * @return bool
     */
    public function getCanBeUsed()
    {
        return $this->container['can_be_used'];
    }

    /**
     * Sets can_be_used
     * @param bool $can_be_used Can the unverified account use the phone?
     * @return $this
     */
    public function setCanBeUsed($can_be_used)
    {
        $this->container['can_be_used'] = $can_be_used;

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


