<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class NewAttachedPhoneInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'NewAttachedPhoneInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'phone_id' => 'int',
        'phone_number' => 'string',
        'required_verification' => 'string',
        'verification_status' => 'string',
        'unverified_hold_until' => 'string'
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
        'required_verification' => 'required_verification',
        'verification_status' => 'verification_status',
        'unverified_hold_until' => 'unverified_hold_until'
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
        'required_verification' => 'setRequiredVerification',
        'verification_status' => 'setVerificationStatus',
        'unverified_hold_until' => 'setUnverifiedHoldUntil'
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
        'required_verification' => 'getRequiredVerification',
        'verification_status' => 'getVerificationStatus',
        'unverified_hold_until' => 'getUnverifiedHoldUntil'
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
        $this->container['required_verification'] = isset($data['required_verification']) ? $data['required_verification'] : null;
        $this->container['verification_status'] = isset($data['verification_status']) ? $data['verification_status'] : null;
        $this->container['unverified_hold_until'] = isset($data['unverified_hold_until']) ? $data['unverified_hold_until'] : null;
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


