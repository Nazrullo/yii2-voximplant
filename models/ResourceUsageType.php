<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * ResourceUsageType Class Doc Comment
 *
 * @category    Class */
 // @description The resource usage info.
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class ResourceUsageType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ResourceUsageType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'resource_usage_id' => 'int',
        'resource_type' => 'string',
        'cost' => 'int',
        'description' => 'string',
        'used_at' => 'string',
        'transaction_id' => 'int',
        'resource_quantity' => 'int',
        'unit' => 'string',
        'ref_call_id' => 'int'
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
        'resource_usage_id' => 'resource_usage_id',
        'resource_type' => 'resource_type',
        'cost' => 'cost',
        'description' => 'description',
        'used_at' => 'used_at',
        'transaction_id' => 'transaction_id',
        'resource_quantity' => 'resource_quantity',
        'unit' => 'unit',
        'ref_call_id' => 'ref_call_id'
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
        'resource_usage_id' => 'setResourceUsageId',
        'resource_type' => 'setResourceType',
        'cost' => 'setCost',
        'description' => 'setDescription',
        'used_at' => 'setUsedAt',
        'transaction_id' => 'setTransactionId',
        'resource_quantity' => 'setResourceQuantity',
        'unit' => 'setUnit',
        'ref_call_id' => 'setRefCallId'
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
        'resource_usage_id' => 'getResourceUsageId',
        'resource_type' => 'getResourceType',
        'cost' => 'getCost',
        'description' => 'getDescription',
        'used_at' => 'getUsedAt',
        'transaction_id' => 'getTransactionId',
        'resource_quantity' => 'getResourceQuantity',
        'unit' => 'getUnit',
        'ref_call_id' => 'getRefCallId'
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
        $this->container['resource_usage_id'] = isset($data['resource_usage_id']) ? $data['resource_usage_id'] : null;
        $this->container['resource_type'] = isset($data['resource_type']) ? $data['resource_type'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['used_at'] = isset($data['used_at']) ? $data['used_at'] : null;
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['resource_quantity'] = isset($data['resource_quantity']) ? $data['resource_quantity'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['ref_call_id'] = isset($data['ref_call_id']) ? $data['ref_call_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['resource_usage_id'] === null) {
            $invalid_properties[] = "'resource_usage_id' can't be null";
        }
        if ($this->container['resource_type'] === null) {
            $invalid_properties[] = "'resource_type' can't be null";
        }
        if ($this->container['used_at'] === null) {
            $invalid_properties[] = "'used_at' can't be null";
        }
        if ($this->container['transaction_id'] === null) {
            $invalid_properties[] = "'transaction_id' can't be null";
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
        if ($this->container['resource_usage_id'] === null) {
            return false;
        }
        if ($this->container['resource_type'] === null) {
            return false;
        }
        if ($this->container['used_at'] === null) {
            return false;
        }
        if ($this->container['transaction_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets resource_usage_id
     * @return int
     */
    public function getResourceUsageId()
    {
        return $this->container['resource_usage_id'];
    }

    /**
     * Sets resource_usage_id
     * @param int $resource_usage_id The resource usage ID.
     * @return $this
     */
    public function setResourceUsageId($resource_usage_id)
    {
        $this->container['resource_usage_id'] = $resource_usage_id;

        return $this;
    }

    /**
     * Gets resource_type
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     * @param string $resource_type The resource type.
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets cost
     * @return int
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     * @param int $cost The call cost.
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description The description.
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets used_at
     * @return string
     */
    public function getUsedAt()
    {
        return $this->container['used_at'];
    }

    /**
     * Sets used_at
     * @param string $used_at The start resource using time in the selected timezone in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setUsedAt($used_at)
    {
        $this->container['used_at'] = $used_at;

        return $this;
    }

    /**
     * Gets transaction_id
     * @return int
     */
    public function getTransactionId()
    {
        return $this->container['transaction_id'];
    }

    /**
     * Sets transaction_id
     * @param int $transaction_id The transaction ID.
     * @return $this
     */
    public function setTransactionId($transaction_id)
    {
        $this->container['transaction_id'] = $transaction_id;

        return $this;
    }

    /**
     * Gets resource_quantity
     * @return int
     */
    public function getResourceQuantity()
    {
        return $this->container['resource_quantity'];
    }

    /**
     * Sets resource_quantity
     * @param int $resource_quantity The resource quantity.
     * @return $this
     */
    public function setResourceQuantity($resource_quantity)
    {
        $this->container['resource_quantity'] = $resource_quantity;

        return $this;
    }

    /**
     * Gets unit
     * @return string
     */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
     * Sets unit
     * @param string $unit The resource unit.
     * @return $this
     */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;

        return $this;
    }

    /**
     * Gets ref_call_id
     * @return int
     */
    public function getRefCallId()
    {
        return $this->container['ref_call_id'];
    }

    /**
     * Sets ref_call_id
     * @param int $ref_call_id The reference to call.
     * @return $this
     */
    public function setRefCallId($ref_call_id)
    {
        $this->container['ref_call_id'] = $ref_call_id;

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


