<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class StartScenariosAPIResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'StartScenarios API Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'result' => 'int',
        'media_session_access_url' => 'string',
        'media_session_check_url' => 'string'
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
        'media_session_access_url' => 'media_session_access_url',
        'media_session_check_url' => 'media_session_check_url'
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
        'media_session_access_url' => 'setMediaSessionAccessUrl',
        'media_session_check_url' => 'setMediaSessionCheckUrl'
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
        'media_session_access_url' => 'getMediaSessionAccessUrl',
        'media_session_check_url' => 'getMediaSessionCheckUrl'
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
        $this->container['media_session_access_url'] = isset($data['media_session_access_url']) ? $data['media_session_access_url'] : null;
        $this->container['media_session_check_url'] = isset($data['media_session_check_url']) ? $data['media_session_check_url'] : null;
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
     * Gets media_session_access_url
     * @return string
     */
    public function getMediaSessionAccessUrl()
    {
        return $this->container['media_session_access_url'];
    }

    /**
     * Sets media_session_access_url
     * @param string $media_session_access_url The URL to control a created media session. It can be used for arbitrary tasks such as stopping scenario or passing additional data to it. Making HTTP request on this URL will result in AppEvents.HttpRequest VoxEngine event being emitted for scenario, with HTTP request data passed to it.
     * @return $this
     */
    public function setMediaSessionAccessUrl($media_session_access_url)
    {
        $this->container['media_session_access_url'] = $media_session_access_url;

        return $this;
    }

    /**
     * Gets media_session_check_url
     * @return string
     */
    public function getMediaSessionCheckUrl()
    {
        return $this->container['media_session_check_url'];
    }

    /**
     * Sets media_session_check_url
     * @param string $media_session_check_url The URL to check media session
     * @return $this
     */
    public function setMediaSessionCheckUrl($media_session_check_url)
    {
        $this->container['media_session_check_url'] = $media_session_check_url;

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


