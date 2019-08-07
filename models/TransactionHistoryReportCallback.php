<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * TransactionHistoryReportCallback Class Doc Comment
 *
 * @category    Class */
 // @description The specific account callback details.
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class TransactionHistoryReportCallback implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TransactionHistoryReportCallback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'history_report_id' => 'int',
        'success' => 'bool',
        'order_date' => 'string'
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
        'history_report_id' => 'history_report_id',
        'success' => 'success',
        'order_date' => 'order_date'
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
        'history_report_id' => 'setHistoryReportId',
        'success' => 'setSuccess',
        'order_date' => 'setOrderDate'
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
        'history_report_id' => 'getHistoryReportId',
        'success' => 'getSuccess',
        'order_date' => 'getOrderDate'
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
        $this->container['history_report_id'] = isset($data['history_report_id']) ? $data['history_report_id'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['history_report_id'] === null) {
            $invalid_properties[] = "'history_report_id' can't be null";
        }
        if ($this->container['success'] === null) {
            $invalid_properties[] = "'success' can't be null";
        }
        if ($this->container['order_date'] === null) {
            $invalid_properties[] = "'order_date' can't be null";
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
        if ($this->container['history_report_id'] === null) {
            return false;
        }
        if ($this->container['success'] === null) {
            return false;
        }
        if ($this->container['order_date'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets history_report_id
     * @return int
     */
    public function getHistoryReportId()
    {
        return $this->container['history_report_id'];
    }

    /**
     * Sets history_report_id
     * @param int $history_report_id The history report ID.
     * @return $this
     */
    public function setHistoryReportId($history_report_id)
    {
        $this->container['history_report_id'] = $history_report_id;

        return $this;
    }

    /**
     * Gets success
     * @return bool
     */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
     * Sets success
     * @param bool $success Is success?
     * @return $this
     */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;

        return $this;
    }

    /**
     * Gets order_date
     * @return string
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     * @param string $order_date The UTC order date in format: YYYY-MM-DD hh::mm:ss
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

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


