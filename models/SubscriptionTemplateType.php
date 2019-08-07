<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class SubscriptionTemplateType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionTemplateType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'subscription_template_id' => 'int',
        'installation_price' => 'int',
        'period' => 'string',
        'subscription_template_type' => 'string',
        'subscription_template_name' => 'string'
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
        'subscription_template_id' => 'subscription_template_id',
        'installation_price' => 'installation_price',
        'period' => 'period',
        'subscription_template_type' => 'subscription_template_type',
        'subscription_template_name' => 'subscription_template_name'
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
        'subscription_template_id' => 'setSubscriptionTemplateId',
        'installation_price' => 'setInstallationPrice',
        'period' => 'setPeriod',
        'subscription_template_type' => 'setSubscriptionTemplateType',
        'subscription_template_name' => 'setSubscriptionTemplateName'
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
        'subscription_template_id' => 'getSubscriptionTemplateId',
        'installation_price' => 'getInstallationPrice',
        'period' => 'getPeriod',
        'subscription_template_type' => 'getSubscriptionTemplateType',
        'subscription_template_name' => 'getSubscriptionTemplateName'
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
        $this->container['subscription_template_id'] = isset($data['subscription_template_id']) ? $data['subscription_template_id'] : null;
        $this->container['installation_price'] = isset($data['installation_price']) ? $data['installation_price'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['subscription_template_type'] = isset($data['subscription_template_type']) ? $data['subscription_template_type'] : null;
        $this->container['subscription_template_name'] = isset($data['subscription_template_name']) ? $data['subscription_template_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['subscription_template_id'] === null) {
            $invalid_properties[] = "'subscription_template_id' can't be null";
        }
        if ($this->container['installation_price'] === null) {
            $invalid_properties[] = "'installation_price' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalid_properties[] = "'period' can't be null";
        }
        if ($this->container['subscription_template_type'] === null) {
            $invalid_properties[] = "'subscription_template_type' can't be null";
        }
        if ($this->container['subscription_template_name'] === null) {
            $invalid_properties[] = "'subscription_template_name' can't be null";
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
        if ($this->container['subscription_template_id'] === null) {
            return false;
        }
        if ($this->container['installation_price'] === null) {
            return false;
        }
        if ($this->container['period'] === null) {
            return false;
        }
        if ($this->container['subscription_template_type'] === null) {
            return false;
        }
        if ($this->container['subscription_template_name'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets subscription_template_id
     * @return int
     */
    public function getSubscriptionTemplateId()
    {
        return $this->container['subscription_template_id'];
    }

    /**
     * Sets subscription_template_id
     * @param int $subscription_template_id The subscription template ID.
     * @return $this
     */
    public function setSubscriptionTemplateId($subscription_template_id)
    {
        $this->container['subscription_template_id'] = $subscription_template_id;

        return $this;
    }

    /**
     * Gets installation_price
     * @return int
     */
    public function getInstallationPrice()
    {
        return $this->container['installation_price'];
    }

    /**
     * Sets installation_price
     * @param int $installation_price The subscription installation price (without the first periodic price).
     * @return $this
     */
    public function setInstallationPrice($installation_price)
    {
        $this->container['installation_price'] = $installation_price;

        return $this;
    }

    /**
     * Gets period
     * @return string
     */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
     * Sets period
     * @param string $period The charge period in format: YYYY-MM-DD HH:mm:SS. Example: 0-1-0 0:0:0 is 1 month.
     * @return $this
     */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;

        return $this;
    }

    /**
     * Gets subscription_template_type
     * @return string
     */
    public function getSubscriptionTemplateType()
    {
        return $this->container['subscription_template_type'];
    }

    /**
     * Sets subscription_template_type
     * @param string $subscription_template_type The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION.
     * @return $this
     */
    public function setSubscriptionTemplateType($subscription_template_type)
    {
        $this->container['subscription_template_type'] = $subscription_template_type;

        return $this;
    }

    /**
     * Gets subscription_template_name
     * @return string
     */
    public function getSubscriptionTemplateName()
    {
        return $this->container['subscription_template_name'];
    }

    /**
     * Sets subscription_template_name
     * @param string $subscription_template_name The subscription template name (example: SIP registration, Phone GB, Phone RU 495, ...).
     * @return $this
     */
    public function setSubscriptionTemplateName($subscription_template_name)
    {
        $this->container['subscription_template_name'] = $subscription_template_name;

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


