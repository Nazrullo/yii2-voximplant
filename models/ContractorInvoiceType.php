<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * ContractorInvoiceType Class Doc Comment
 *
 * @category    Class */
 // @description The GetContractorInvoices result.
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class ContractorInvoiceType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContractorInvoiceType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'invoice_number' => 'string',
        'invoice_date' => 'string',
        'is_post_payment' => 'bool',
        'from_date' => 'string',
        'to_date' => 'string',
        'total_amount' => 'int',
        'paid_amount' => 'int',
        'services' => 'backend\modules\voximplant\models\ContractorInvoiceServiceType'
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
        'invoice_number' => 'invoice_number',
        'invoice_date' => 'invoice_date',
        'is_post_payment' => 'is_post_payment',
        'from_date' => 'from_date',
        'to_date' => 'to_date',
        'total_amount' => 'total_amount',
        'paid_amount' => 'paid_amount',
        'services' => 'services'
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
        'invoice_number' => 'setInvoiceNumber',
        'invoice_date' => 'setInvoiceDate',
        'is_post_payment' => 'setIsPostPayment',
        'from_date' => 'setFromDate',
        'to_date' => 'setToDate',
        'total_amount' => 'setTotalAmount',
        'paid_amount' => 'setPaidAmount',
        'services' => 'setServices'
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
        'invoice_number' => 'getInvoiceNumber',
        'invoice_date' => 'getInvoiceDate',
        'is_post_payment' => 'getIsPostPayment',
        'from_date' => 'getFromDate',
        'to_date' => 'getToDate',
        'total_amount' => 'getTotalAmount',
        'paid_amount' => 'getPaidAmount',
        'services' => 'getServices'
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
        $this->container['invoice_number'] = isset($data['invoice_number']) ? $data['invoice_number'] : null;
        $this->container['invoice_date'] = isset($data['invoice_date']) ? $data['invoice_date'] : null;
        $this->container['is_post_payment'] = isset($data['is_post_payment']) ? $data['is_post_payment'] : null;
        $this->container['from_date'] = isset($data['from_date']) ? $data['from_date'] : null;
        $this->container['to_date'] = isset($data['to_date']) ? $data['to_date'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['paid_amount'] = isset($data['paid_amount']) ? $data['paid_amount'] : null;
        $this->container['services'] = isset($data['services']) ? $data['services'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['invoice_number'] === null) {
            $invalid_properties[] = "'invoice_number' can't be null";
        }
        if ($this->container['invoice_date'] === null) {
            $invalid_properties[] = "'invoice_date' can't be null";
        }
        if ($this->container['is_post_payment'] === null) {
            $invalid_properties[] = "'is_post_payment' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalid_properties[] = "'total_amount' can't be null";
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
        if ($this->container['invoice_number'] === null) {
            return false;
        }
        if ($this->container['invoice_date'] === null) {
            return false;
        }
        if ($this->container['is_post_payment'] === null) {
            return false;
        }
        if ($this->container['total_amount'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets invoice_number
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoice_number'];
    }

    /**
     * Sets invoice_number
     * @param string $invoice_number The invoice number.
     * @return $this
     */
    public function setInvoiceNumber($invoice_number)
    {
        $this->container['invoice_number'] = $invoice_number;

        return $this;
    }

    /**
     * Gets invoice_date
     * @return string
     */
    public function getInvoiceDate()
    {
        return $this->container['invoice_date'];
    }

    /**
     * Sets invoice_date
     * @param string $invoice_date The invoice date in format: YYYY-MM-DD
     * @return $this
     */
    public function setInvoiceDate($invoice_date)
    {
        $this->container['invoice_date'] = $invoice_date;

        return $this;
    }

    /**
     * Gets is_post_payment
     * @return bool
     */
    public function getIsPostPayment()
    {
        return $this->container['is_post_payment'];
    }

    /**
     * Sets is_post_payment
     * @param bool $is_post_payment The post payment flag
     * @return $this
     */
    public function setIsPostPayment($is_post_payment)
    {
        $this->container['is_post_payment'] = $is_post_payment;

        return $this;
    }

    /**
     * Gets from_date
     * @return string
     */
    public function getFromDate()
    {
        return $this->container['from_date'];
    }

    /**
     * Sets from_date
     * @param string $from_date The from date in format: YYYY-MM-DD
     * @return $this
     */
    public function setFromDate($from_date)
    {
        $this->container['from_date'] = $from_date;

        return $this;
    }

    /**
     * Gets to_date
     * @return string
     */
    public function getToDate()
    {
        return $this->container['to_date'];
    }

    /**
     * Sets to_date
     * @param string $to_date The to date in format: YYYY-MM-DD
     * @return $this
     */
    public function setToDate($to_date)
    {
        $this->container['to_date'] = $to_date;

        return $this;
    }

    /**
     * Gets total_amount
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     * @param int $total_amount The total invoice amount (RUR).
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets paid_amount
     * @return int
     */
    public function getPaidAmount()
    {
        return $this->container['paid_amount'];
    }

    /**
     * Sets paid_amount
     * @param int $paid_amount The paid amount (RUR).
     * @return $this
     */
    public function setPaidAmount($paid_amount)
    {
        $this->container['paid_amount'] = $paid_amount;

        return $this;
    }

    /**
     * Gets services
     * @return backend\modules\voximplant\models\ContractorInvoiceServiceType
     */
    public function getServices()
    {
        return $this->container['services'];
    }

    /**
     * Sets services
     * @param backend\modules\voximplant\models\ContractorInvoiceServiceType $services
     * @return $this
     */
    public function setServices($services)
    {
        $this->container['services'] = $services;

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


