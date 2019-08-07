<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;

class AccountVerificationType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountVerificationType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'verification_name' => 'string',
        'verification_status' => 'string',
        'unverified_hold_until' => 'string',
        'documents' => '\backend\modules\voximplant\models\AccountVerificationDocument[]'
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
        'verification_name' => 'verification_name',
        'verification_status' => 'verification_status',
        'unverified_hold_until' => 'unverified_hold_until',
        'documents' => 'documents'
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
        'verification_name' => 'setVerificationName',
        'verification_status' => 'setVerificationStatus',
        'unverified_hold_until' => 'setUnverifiedHoldUntil',
        'documents' => 'setDocuments'
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
        'verification_name' => 'getVerificationName',
        'verification_status' => 'getVerificationStatus',
        'unverified_hold_until' => 'getUnverifiedHoldUntil',
        'documents' => 'getDocuments'
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
        $this->container['verification_name'] = isset($data['verification_name']) ? $data['verification_name'] : null;
        $this->container['verification_status'] = isset($data['verification_status']) ? $data['verification_status'] : null;
        $this->container['unverified_hold_until'] = isset($data['unverified_hold_until']) ? $data['unverified_hold_until'] : null;
        $this->container['documents'] = isset($data['documents']) ? $data['documents'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['verification_name'] === null) {
            $invalid_properties[] = "'verification_name' can't be null";
        }
        if ($this->container['verification_status'] === null) {
            $invalid_properties[] = "'verification_status' can't be null";
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
        if ($this->container['verification_name'] === null) {
            return false;
        }
        if ($this->container['verification_status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets verification_name
     * @return string
     */
    public function getVerificationName()
    {
        return $this->container['verification_name'];
    }

    /**
     * Sets verification_name
     * @param string $verification_name The verification name.
     * @return $this
     */
    public function setVerificationName($verification_name)
    {
        $this->container['verification_name'] = $verification_name;

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
     * @param string $verification_status The account verification status. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED, NOT_REQUIRED
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
     * @param string $unverified_hold_until Unverified subscriptions hold until the date in format: YYYY-MM-DD (if the account verification is required). Some subscriptions will be detached on that day automatically!
     * @return $this
     */
    public function setUnverifiedHoldUntil($unverified_hold_until)
    {
        $this->container['unverified_hold_until'] = $unverified_hold_until;

        return $this;
    }

    /**
     * Gets documents
     * @return \backend\modules\voximplant\models\AccountVerificationDocument[]
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     * @param \backend\modules\voximplant\models\AccountVerificationDocument[] $documents
     * @return $this
     */
    public function setDocuments($documents)
    {
        $this->container['documents'] = $documents;

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


