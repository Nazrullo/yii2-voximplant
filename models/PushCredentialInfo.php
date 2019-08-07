<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class PushCredentialInfo implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PushCredentialInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'push_credential_id' => 'int',
        'push_provider_id' => 'int',
        'push_provider_name' => 'string',
        'external_app_name' => 'string',
        'cert_credential' => '\backend\modules\voximplant\models\CertCredentialType',
        'applications' => '\backend\modules\voximplant\models\ApplicationInfoType[]'
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
        'push_credential_id' => 'push_credential_id',
        'push_provider_id' => 'push_provider_id',
        'push_provider_name' => 'push_provider_name',
        'external_app_name' => 'external_app_name',
        'cert_credential' => 'cert_credential',
        'applications' => 'applications'
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
        'push_credential_id' => 'setPushCredentialId',
        'push_provider_id' => 'setPushProviderId',
        'push_provider_name' => 'setPushProviderName',
        'external_app_name' => 'setExternalAppName',
        'cert_credential' => 'setCertCredential',
        'applications' => 'setApplications'
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
        'push_credential_id' => 'getPushCredentialId',
        'push_provider_id' => 'getPushProviderId',
        'push_provider_name' => 'getPushProviderName',
        'external_app_name' => 'getExternalAppName',
        'cert_credential' => 'getCertCredential',
        'applications' => 'getApplications'
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
        $this->container['push_credential_id'] = isset($data['push_credential_id']) ? $data['push_credential_id'] : null;
        $this->container['push_provider_id'] = isset($data['push_provider_id']) ? $data['push_provider_id'] : null;
        $this->container['push_provider_name'] = isset($data['push_provider_name']) ? $data['push_provider_name'] : null;
        $this->container['external_app_name'] = isset($data['external_app_name']) ? $data['external_app_name'] : null;
        $this->container['cert_credential'] = isset($data['cert_credential']) ? $data['cert_credential'] : null;
        $this->container['applications'] = isset($data['applications']) ? $data['applications'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['push_credential_id'] === null) {
            $invalid_properties[] = "'push_credential_id' can't be null";
        }
        if ($this->container['push_provider_id'] === null) {
            $invalid_properties[] = "'push_provider_id' can't be null";
        }
        if ($this->container['push_provider_name'] === null) {
            $invalid_properties[] = "'push_provider_name' can't be null";
        }
        if ($this->container['external_app_name'] === null) {
            $invalid_properties[] = "'external_app_name' can't be null";
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
        if ($this->container['push_credential_id'] === null) {
            return false;
        }
        if ($this->container['push_provider_id'] === null) {
            return false;
        }
        if ($this->container['push_provider_name'] === null) {
            return false;
        }
        if ($this->container['external_app_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets push_credential_id
     * @return int
     */
    public function getPushCredentialId()
    {
        return $this->container['push_credential_id'];
    }

    /**
     * Sets push_credential_id
     * @param int $push_credential_id The push credential id
     * @return $this
     */
    public function setPushCredentialId($push_credential_id)
    {
        $this->container['push_credential_id'] = $push_credential_id;

        return $this;
    }

    /**
     * Gets push_provider_id
     * @return int
     */
    public function getPushProviderId()
    {
        return $this->container['push_provider_id'];
    }

    /**
     * Sets push_provider_id
     * @param int $push_provider_id The push provider id
     * @return $this
     */
    public function setPushProviderId($push_provider_id)
    {
        $this->container['push_provider_id'] = $push_provider_id;

        return $this;
    }

    /**
     * Gets push_provider_name
     * @return string
     */
    public function getPushProviderName()
    {
        return $this->container['push_provider_name'];
    }

    /**
     * Sets push_provider_name
     * @param string $push_provider_name The push provider name. Available values: APPLE, APPLE_VOIP, GOOGLE
     * @return $this
     */
    public function setPushProviderName($push_provider_name)
    {
        $this->container['push_provider_name'] = $push_provider_name;

        return $this;
    }

    /**
     * Gets external_app_name
     * @return string
     */
    public function getExternalAppName()
    {
        return $this->container['external_app_name'];
    }

    /**
     * Sets external_app_name
     * @param string $external_app_name The push provider's application name.
     * @return $this
     */
    public function setExternalAppName($external_app_name)
    {
        $this->container['external_app_name'] = $external_app_name;

        return $this;
    }

    /**
     * Gets cert_credential
     * @return \backend\modules\voximplant\models\CertCredentialType
     */
    public function getCertCredential()
    {
        return $this->container['cert_credential'];
    }

    /**
     * Sets cert_credential
     * @param \backend\modules\voximplant\models\CertCredentialType $cert_credential
     * @return $this
     */
    public function setCertCredential($cert_credential)
    {
        $this->container['cert_credential'] = $cert_credential;

        return $this;
    }

    /**
     * Gets applications
     * @return \backend\modules\voximplant\models\ApplicationInfoType[]
     */
    public function getApplications()
    {
        return $this->container['applications'];
    }

    /**
     * Sets applications
     * @param \backend\modules\voximplant\models\ApplicationInfoType[] $applications
     * @return $this
     */
    public function setApplications($applications)
    {
        $this->container['applications'] = $applications;

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


