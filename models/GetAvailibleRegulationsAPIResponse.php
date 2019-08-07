<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

class GetAvailibleRegulationsAPIResponse implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GetAvailibleRegulations API Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'result' => 'bool',
        'availible_address' => '\backend\modules\voximplant\models\RegulationAddress[]',
        'count_in_progress' => 'int'
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
        'availible_address' => 'availible_address',
        'count_in_progress' => 'count_in_progress'
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
        'availible_address' => 'setAvailibleAddress',
        'count_in_progress' => 'setCountInProgress'
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
        'availible_address' => 'getAvailibleAddress',
        'count_in_progress' => 'getCountInProgress'
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
        $this->container['availible_address'] = isset($data['availible_address']) ? $data['availible_address'] : null;
        $this->container['count_in_progress'] = isset($data['count_in_progress']) ? $data['count_in_progress'] : null;
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
     * @return bool
     */
    public function getResult()
    {
        return $this->container['result'];
    }

    /**
     * Sets result
     * @param bool $result If result equal 1 then user has more regulation address or they did not wanted. Otherwise, you need to create regulations address.
     * @return $this
     */
    public function setResult($result)
    {
        $this->container['result'] = $result;

        return $this;
    }

    /**
     * Gets availible_address
     * @return \backend\modules\voximplant\models\RegulationAddress[]
     */
    public function getAvailibleAddress()
    {
        return $this->container['availible_address'];
    }

    /**
     * Sets availible_address
     * @param \backend\modules\voximplant\models\RegulationAddress[] $availible_address
     * @return $this
     */
    public function setAvailibleAddress($availible_address)
    {
        $this->container['availible_address'] = $availible_address;

        return $this;
    }

    /**
     * Gets count_in_progress
     * @return int
     */
    public function getCountInProgress()
    {
        return $this->container['count_in_progress'];
    }

    /**
     * Sets count_in_progress
     * @param int $count_in_progress The count of RegulationAddress in progress status.
     * @return $this
     */
    public function setCountInProgress($count_in_progress)
    {
        $this->container['count_in_progress'] = $count_in_progress;

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


