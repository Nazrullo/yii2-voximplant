<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

class CreateSipRegistrationAPIResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CreateSipRegistration API Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'result' => 'int',
        'sip_registration_id' => 'int',
        'account_info' => '\backend\modules\voximplant\models\ShortAccountInfoType'
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
        'result' => 'result',
        'sip_registration_id' => 'sip_registration_id',
        'account_info' => 'account_info'
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
        'result' => 'setResult',
        'sip_registration_id' => 'setSipRegistrationId',
        'account_info' => 'setAccountInfo'
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
        'result' => 'getResult',
        'sip_registration_id' => 'getSipRegistrationId',
        'account_info' => 'getAccountInfo'
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
        $this->container['result'] = isset($data['result']) ? $data['result'] : null;
        $this->container['sip_registration_id'] = isset($data['sip_registration_id']) ? $data['sip_registration_id'] : null;
        $this->container['account_info'] = isset($data['account_info']) ? $data['account_info'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets result
     * @return int
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param int $result 1
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
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
     * @param int $sip_registration_id The sip registration id.
     * @return $this
     */
    public function setSipRegistrationId($sip_registration_id)
    {
        $this->container['sip_registration_id'] = $sip_registration_id;

        return $this;
    }

    /**
     * Gets account_info
     * @return \backend\modules\voximplant\models\ShortAccountInfoType
     */
    public function getAccountInfo()
    {
        return $this->container['account_info'];
    }

    /**
     * Sets account_info
     * @param \backend\modules\voximplant\models\ShortAccountInfoType $account_info
     * @return $this
     */
    public function setAccountInfo($account_info)
    {
        $this->container['account_info'] = $account_info;

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


