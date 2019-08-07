<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class SipWhiteListInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SipWhiteListInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'sip_whitelist_id' => 'int',
        'sip_whitelist_network' => 'string'
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
        'sip_whitelist_id' => 'sip_whitelist_id',
        'sip_whitelist_network' => 'sip_whitelist_network'
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
        'sip_whitelist_id' => 'setSipWhitelistId',
        'sip_whitelist_network' => 'setSipWhitelistNetwork'
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
        'sip_whitelist_id' => 'getSipWhitelistId',
        'sip_whitelist_network' => 'getSipWhitelistNetwork'
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
        $this->container['sip_whitelist_id'] = isset($data['sip_whitelist_id']) ? $data['sip_whitelist_id'] : null;
        $this->container['sip_whitelist_network'] = isset($data['sip_whitelist_network']) ? $data['sip_whitelist_network'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['sip_whitelist_id'] === null) {
            $invalid_properties[] = "'sip_whitelist_id' can't be null";
        }
        if ($this->container['sip_whitelist_network'] === null) {
            $invalid_properties[] = "'sip_whitelist_network' can't be null";
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
        if ($this->container['sip_whitelist_id'] === null) {
            return false;
        }
        if ($this->container['sip_whitelist_network'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets sip_whitelist_id
     * @return int
     */
    public function getSipWhitelistId()
    {
        return $this->container['sip_whitelist_id'];
    }

    /**
     * Sets sip_whitelist_id
     * @param int $sip_whitelist_id The SIP white list item ID.
     * @return $this
     */
    public function setSipWhitelistId($sip_whitelist_id)
    {
        $this->container['sip_whitelist_id'] = $sip_whitelist_id;

        return $this;
    }

    /**
     * Gets sip_whitelist_network
     * @return string
     */
    public function getSipWhitelistNetwork()
    {
        return $this->container['sip_whitelist_network'];
    }

    /**
     * Sets sip_whitelist_network
     * @param string $sip_whitelist_network The network address in format A.B.C.D/L
     * @return $this
     */
    public function setSipWhitelistNetwork($sip_whitelist_network)
    {
        $this->container['sip_whitelist_network'] = $sip_whitelist_network;

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


