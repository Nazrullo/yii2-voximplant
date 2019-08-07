<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class CertCredentialType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CertCredentialType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'cert_file_name' => 'string',
        'cert_password' => 'string',
        'cert_content' => 'string',
        'is_dev_mode' => 'bool'
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
        'cert_file_name' => 'cert_file_name',
        'cert_password' => 'cert_password',
        'cert_content' => 'cert_content',
        'is_dev_mode' => 'is_dev_mode'
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
        'cert_file_name' => 'setCertFileName',
        'cert_password' => 'setCertPassword',
        'cert_content' => 'setCertContent',
        'is_dev_mode' => 'setIsDevMode'
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
        'cert_file_name' => 'getCertFileName',
        'cert_password' => 'getCertPassword',
        'cert_content' => 'getCertContent',
        'is_dev_mode' => 'getIsDevMode'
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
        $this->container['cert_file_name'] = isset($data['cert_file_name']) ? $data['cert_file_name'] : null;
        $this->container['cert_password'] = isset($data['cert_password']) ? $data['cert_password'] : null;
        $this->container['cert_content'] = isset($data['cert_content']) ? $data['cert_content'] : null;
        $this->container['is_dev_mode'] = isset($data['is_dev_mode']) ? $data['is_dev_mode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['cert_file_name'] === null) {
            $invalid_properties[] = "'cert_file_name' can't be null";
        }
        if ($this->container['is_dev_mode'] === null) {
            $invalid_properties[] = "'is_dev_mode' can't be null";
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
        if ($this->container['cert_file_name'] === null) {
            return false;
        }
        if ($this->container['is_dev_mode'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets cert_file_name
     * @return string
     */
    public function getCertFileName()
    {
        return $this->container['cert_file_name'];
    }

    /**
     * Sets cert_file_name
     * @param string $cert_file_name The file name
     * @return $this
     */
    public function setCertFileName($cert_file_name)
    {
        $this->container['cert_file_name'] = $cert_file_name;

        return $this;
    }

    /**
     * Gets cert_password
     * @return string
     */
    public function getCertPassword()
    {
        return $this->container['cert_password'];
    }

    /**
     * Sets cert_password
     * @param string $cert_password The password for private key.
     * @return $this
     */
    public function setCertPassword($cert_password)
    {
        $this->container['cert_password'] = $cert_password;

        return $this;
    }

    /**
     * Gets cert_content
     * @return string
     */
    public function getCertContent()
    {
        return $this->container['cert_content'];
    }

    /**
     * Sets cert_content
     * @param string $cert_content The certificate content in BASE64.
     * @return $this
     */
    public function setCertContent($cert_content)
    {
        $this->container['cert_content'] = $cert_content;

        return $this;
    }

    /**
     * Gets is_dev_mode
     * @return bool
     */
    public function getIsDevMode()
    {
        return $this->container['is_dev_mode'];
    }

    /**
     * Sets is_dev_mode
     * @param bool $is_dev_mode The use in a Apple sandbox environment.
     * @return $this
     */
    public function setIsDevMode($is_dev_mode)
    {
        $this->container['is_dev_mode'] = $is_dev_mode;

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


