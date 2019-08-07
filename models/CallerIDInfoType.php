<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * CallerIDInfoType Class Doc Comment
 *
 * @category    Class */
 // @description The GetCallerIDs function result.
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class CallerIDInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CallerIDInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'callerid_id' => 'int',
        'callerid_number' => 'string',
        'active' => 'bool',
        'code_entering_attempts_left' => 'int',
        'verification_call_attempts_left' => 'int',
        'verified_until' => 'string',
        'verification_code_callin' => 'string'
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
        'callerid_id' => 'callerid_id',
        'callerid_number' => 'callerid_number',
        'active' => 'active',
        'code_entering_attempts_left' => 'code_entering_attempts_left',
        'verification_call_attempts_left' => 'verification_call_attempts_left',
        'verified_until' => 'verified_until',
        'verification_code_callin' => 'verification_code_callin'
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
        'callerid_id' => 'setCalleridId',
        'callerid_number' => 'setCalleridNumber',
        'active' => 'setActive',
        'code_entering_attempts_left' => 'setCodeEnteringAttemptsLeft',
        'verification_call_attempts_left' => 'setVerificationCallAttemptsLeft',
        'verified_until' => 'setVerifiedUntil',
        'verification_code_callin' => 'setVerificationCodeCallin'
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
        'callerid_id' => 'getCalleridId',
        'callerid_number' => 'getCalleridNumber',
        'active' => 'getActive',
        'code_entering_attempts_left' => 'getCodeEnteringAttemptsLeft',
        'verification_call_attempts_left' => 'getVerificationCallAttemptsLeft',
        'verified_until' => 'getVerifiedUntil',
        'verification_code_callin' => 'getVerificationCodeCallin'
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
        $this->container['callerid_id'] = isset($data['callerid_id']) ? $data['callerid_id'] : null;
        $this->container['callerid_number'] = isset($data['callerid_number']) ? $data['callerid_number'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['code_entering_attempts_left'] = isset($data['code_entering_attempts_left']) ? $data['code_entering_attempts_left'] : null;
        $this->container['verification_call_attempts_left'] = isset($data['verification_call_attempts_left']) ? $data['verification_call_attempts_left'] : null;
        $this->container['verified_until'] = isset($data['verified_until']) ? $data['verified_until'] : null;
        $this->container['verification_code_callin'] = isset($data['verification_code_callin']) ? $data['verification_code_callin'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['callerid_id'] === null) {
            $invalid_properties[] = "'callerid_id' can't be null";
        }
        if ($this->container['callerid_number'] === null) {
            $invalid_properties[] = "'callerid_number' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalid_properties[] = "'active' can't be null";
        }
        if ($this->container['verification_code_callin'] === null) {
            $invalid_properties[] = "'verification_code_callin' can't be null";
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
        if ($this->container['callerid_id'] === null) {
            return false;
        }
        if ($this->container['callerid_number'] === null) {
            return false;
        }
        if ($this->container['active'] === null) {
            return false;
        }
        if ($this->container['verification_code_callin'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets callerid_id
     * @return int
     */
    public function getCalleridId()
    {
        return $this->container['callerid_id'];
    }

    /**
     * Sets callerid_id
     * @param int $callerid_id The callerID id.
     * @return $this
     */
    public function setCalleridId($callerid_id)
    {
        $this->container['callerid_id'] = $callerid_id;

        return $this;
    }

    /**
     * Gets callerid_number
     * @return string
     */
    public function getCalleridNumber()
    {
        return $this->container['callerid_number'];
    }

    /**
     * Sets callerid_number
     * @param string $callerid_number The callerID number.
     * @return $this
     */
    public function setCalleridNumber($callerid_number)
    {
        $this->container['callerid_number'] = $callerid_number;

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
     * @param bool $active The active flag.
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets code_entering_attempts_left
     * @return int
     */
    public function getCodeEnteringAttemptsLeft()
    {
        return $this->container['code_entering_attempts_left'];
    }

    /**
     * Sets code_entering_attempts_left
     * @param int $code_entering_attempts_left The code entering attempts left for the unverified callerID.
     * @return $this
     */
    public function setCodeEnteringAttemptsLeft($code_entering_attempts_left)
    {
        $this->container['code_entering_attempts_left'] = $code_entering_attempts_left;

        return $this;
    }

    /**
     * Gets verification_call_attempts_left
     * @return int
     */
    public function getVerificationCallAttemptsLeft()
    {
        return $this->container['verification_call_attempts_left'];
    }

    /**
     * Sets verification_call_attempts_left
     * @param int $verification_call_attempts_left The verification call attempts left for the unverified callerID.
     * @return $this
     */
    public function setVerificationCallAttemptsLeft($verification_call_attempts_left)
    {
        $this->container['verification_call_attempts_left'] = $verification_call_attempts_left;

        return $this;
    }

    /**
     * Gets verified_until
     * @return string
     */
    public function getVerifiedUntil()
    {
        return $this->container['verified_until'];
    }

    /**
     * Sets verified_until
     * @param string $verified_until The verification ending date in format: YYYY-MM-DD (for the verified callerID).
     * @return $this
     */
    public function setVerifiedUntil($verified_until)
    {
        $this->container['verified_until'] = $verified_until;

        return $this;
    }

    /**
     * Gets verification_code_callin
     * @return string
     */
    public function getVerificationCodeCallin()
    {
        return $this->container['verification_code_callin'];
    }

    /**
     * Sets verification_code_callin
     * @param string $verification_code_callin Code that can be endered to verify after dialing one of our call in numbers
     * @return $this
     */
    public function setVerificationCodeCallin($verification_code_callin)
    {
        $this->container['verification_code_callin'] = $verification_code_callin;

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


