<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class RegulationAddressVerifiedCallback implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RegulationAddressVerifiedCallback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'regulation_address_id' => 'int',
        'regulation_address_status' => 'string',
        'uploaded' => 'string',
        'is_individual' => 'bool',
        'comment' => 'string',
        'verification_name' => 'string'
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
        'regulation_address_id' => 'regulation_address_id',
        'regulation_address_status' => 'regulation_address_status',
        'uploaded' => 'uploaded',
        'is_individual' => 'is_individual',
        'comment' => 'comment',
        'verification_name' => 'verification_name'
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
        'regulation_address_id' => 'setRegulationAddressId',
        'regulation_address_status' => 'setRegulationAddressStatus',
        'uploaded' => 'setUploaded',
        'is_individual' => 'setIsIndividual',
        'comment' => 'setComment',
        'verification_name' => 'setVerificationName'
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
        'regulation_address_id' => 'getRegulationAddressId',
        'regulation_address_status' => 'getRegulationAddressStatus',
        'uploaded' => 'getUploaded',
        'is_individual' => 'getIsIndividual',
        'comment' => 'getComment',
        'verification_name' => 'getVerificationName'
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
        $this->container['regulation_address_id'] = isset($data['regulation_address_id']) ? $data['regulation_address_id'] : null;
        $this->container['regulation_address_status'] = isset($data['regulation_address_status']) ? $data['regulation_address_status'] : null;
        $this->container['uploaded'] = isset($data['uploaded']) ? $data['uploaded'] : null;
        $this->container['is_individual'] = isset($data['is_individual']) ? $data['is_individual'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['verification_name'] = isset($data['verification_name']) ? $data['verification_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['regulation_address_id'] === null) {
            $invalid_properties[] = "'regulation_address_id' can't be null";
        }
        if ($this->container['regulation_address_status'] === null) {
            $invalid_properties[] = "'regulation_address_status' can't be null";
        }
        if ($this->container['uploaded'] === null) {
            $invalid_properties[] = "'uploaded' can't be null";
        }
        if ($this->container['is_individual'] === null) {
            $invalid_properties[] = "'is_individual' can't be null";
        }
        if ($this->container['verification_name'] === null) {
            $invalid_properties[] = "'verification_name' can't be null";
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
        if ($this->container['regulation_address_id'] === null) {
            return false;
        }
        if ($this->container['regulation_address_status'] === null) {
            return false;
        }
        if ($this->container['uploaded'] === null) {
            return false;
        }
        if ($this->container['is_individual'] === null) {
            return false;
        }
        if ($this->container['verification_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets regulation_address_id
     * @return int
     */
    public function getRegulationAddressId()
    {
        return $this->container['regulation_address_id'];
    }

    /**
     * Sets regulation_address_id
     * @param int $regulation_address_id The uploaded document ID.
     * @return $this
     */
    public function setRegulationAddressId($regulation_address_id)
    {
        $this->container['regulation_address_id'] = $regulation_address_id;

        return $this;
    }

    /**
     * Gets regulation_address_status
     * @return string
     */
    public function getRegulationAddressStatus()
    {
        return $this->container['regulation_address_status'];
    }

    /**
     * Sets regulation_address_status
     * @param string $regulation_address_status The document verification status. The following values are possible: ACCEPTED, REJECTED
     * @return $this
     */
    public function setRegulationAddressStatus($regulation_address_status)
    {
        $this->container['regulation_address_status'] = $regulation_address_status;

        return $this;
    }

    /**
     * Gets uploaded
     * @return string
     */
    public function getUploaded()
    {
        return $this->container['uploaded'];
    }

    /**
     * Sets uploaded
     * @param string $uploaded The UTC date of the document upload in format: YYYY-MM-DD hh::mm:ss
     * @return $this
     */
    public function setUploaded($uploaded)
    {
        $this->container['uploaded'] = $uploaded;

        return $this;
    }

    /**
     * Gets is_individual
     * @return bool
     */
    public function getIsIndividual()
    {
        return $this->container['is_individual'];
    }

    /**
     * Sets is_individual
     * @param bool $is_individual Is individual, isn't legal entity?
     * @return $this
     */
    public function setIsIndividual($is_individual)
    {
        $this->container['is_individual'] = $is_individual;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment The reviewer's comment.
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
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
     * @param string $verification_name The verification name (type).
     * @return $this
     */
    public function setVerificationName($verification_name)
    {
        $this->container['verification_name'] = $verification_name;

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


