<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class PriceGroup implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'PriceGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'price_group_name' => 'string',
        'price_group_id' => 'int',
        'price' => 'int',
        'num_resources_per_price' => 'int',
        'quantum' => 'int',
        'params' => '\backend\modules\voximplant\models\ResourceParams'
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
        'price_group_name' => 'price_group_name',
        'price_group_id' => 'price_group_id',
        'price' => 'price',
        'num_resources_per_price' => 'num_resources_per_price',
        'quantum' => 'quantum',
        'params' => 'params'
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
        'price_group_name' => 'setPriceGroupName',
        'price_group_id' => 'setPriceGroupId',
        'price' => 'setPrice',
        'num_resources_per_price' => 'setNumResourcesPerPrice',
        'quantum' => 'setQuantum',
        'params' => 'setParams'
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
        'price_group_name' => 'getPriceGroupName',
        'price_group_id' => 'getPriceGroupId',
        'price' => 'getPrice',
        'num_resources_per_price' => 'getNumResourcesPerPrice',
        'quantum' => 'getQuantum',
        'params' => 'getParams'
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
        $this->container['price_group_name'] = isset($data['price_group_name']) ? $data['price_group_name'] : null;
        $this->container['price_group_id'] = isset($data['price_group_id']) ? $data['price_group_id'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['num_resources_per_price'] = isset($data['num_resources_per_price']) ? $data['num_resources_per_price'] : null;
        $this->container['quantum'] = isset($data['quantum']) ? $data['quantum'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['price_group_name'] === null) {
            $invalid_properties[] = "'price_group_name' can't be null";
        }
        if ($this->container['price_group_id'] === null) {
            $invalid_properties[] = "'price_group_id' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalid_properties[] = "'price' can't be null";
        }
        if ($this->container['num_resources_per_price'] === null) {
            $invalid_properties[] = "'num_resources_per_price' can't be null";
        }
        if ($this->container['quantum'] === null) {
            $invalid_properties[] = "'quantum' can't be null";
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
        if ($this->container['price_group_name'] === null) {
            return false;
        }
        if ($this->container['price_group_id'] === null) {
            return false;
        }
        if ($this->container['price'] === null) {
            return false;
        }
        if ($this->container['num_resources_per_price'] === null) {
            return false;
        }
        if ($this->container['quantum'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets price_group_name
     * @return string
     */
    public function getPriceGroupName()
    {
        return $this->container['price_group_name'];
    }

    /**
     * Sets price_group_name
     * @param string $price_group_name The price group name. Example: Russia Mobile
     * @return $this
     */
    public function setPriceGroupName($price_group_name)
    {
        $this->container['price_group_name'] = $price_group_name;

        return $this;
    }

    /**
     * Gets price_group_id
     * @return int
     */
    public function getPriceGroupId()
    {
        return $this->container['price_group_id'];
    }

    /**
     * Sets price_group_id
     * @param int $price_group_id The price group ID.
     * @return $this
     */
    public function setPriceGroupId($price_group_id)
    {
        $this->container['price_group_id'] = $price_group_id;

        return $this;
    }

    /**
     * Gets price
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param int $price The price for the 'num_resources_per_price' resource count.
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets num_resources_per_price
     * @return int
     */
    public function getNumResourcesPerPrice()
    {
        return $this->container['num_resources_per_price'];
    }

    /**
     * Sets num_resources_per_price
     * @param int $num_resources_per_price The resource count per price.
     * @return $this
     */
    public function setNumResourcesPerPrice($num_resources_per_price)
    {
        $this->container['num_resources_per_price'] = $num_resources_per_price;

        return $this;
    }

    /**
     * Gets quantum
     * @return int
     */
    public function getQuantum()
    {
        return $this->container['quantum'];
    }

    /**
     * Sets quantum
     * @param int $quantum The resource rounding quantum.
     * @return $this
     */
    public function setQuantum($quantum)
    {
        $this->container['quantum'] = $quantum;

        return $this;
    }

    /**
     * Gets params
     * @return \backend\modules\voximplant\models\ResourceParams
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     * @param \backend\modules\voximplant\models\ResourceParams $params
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

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


