<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

class TransactionInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'TransactionInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'transaction_id' => 'int',
        'account_id' => 'string',
        'performed_at' => 'string',
        'amount' => 'int',
        'currency' => 'string',
        'transaction_type' => 'string',
        'transaction_description' => 'string',
        'payment_reference' => 'string'
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
        'transaction_id' => 'transaction_id',
        'account_id' => 'account_id',
        'performed_at' => 'performed_at',
        'amount' => 'amount',
        'currency' => 'currency',
        'transaction_type' => 'transaction_type',
        'transaction_description' => 'transaction_description',
        'payment_reference' => 'payment_reference'
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
        'transaction_id' => 'setTransactionId',
        'account_id' => 'setAccountId',
        'performed_at' => 'setPerformedAt',
        'amount' => 'setAmount',
        'currency' => 'setCurrency',
        'transaction_type' => 'setTransactionType',
        'transaction_description' => 'setTransactionDescription',
        'payment_reference' => 'setPaymentReference'
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
        'transaction_id' => 'getTransactionId',
        'account_id' => 'getAccountId',
        'performed_at' => 'getPerformedAt',
        'amount' => 'getAmount',
        'currency' => 'getCurrency',
        'transaction_type' => 'getTransactionType',
        'transaction_description' => 'getTransactionDescription',
        'payment_reference' => 'getPaymentReference'
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
        $this->container['transaction_id'] = isset($data['transaction_id']) ? $data['transaction_id'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['performed_at'] = isset($data['performed_at']) ? $data['performed_at'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['transaction_type'] = isset($data['transaction_type']) ? $data['transaction_type'] : null;
        $this->container['transaction_description'] = isset($data['transaction_description']) ? $data['transaction_description'] : null;
        $this->container['payment_reference'] = isset($data['payment_reference']) ? $data['payment_reference'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['transaction_id'] === null) {
            $invalid_properties[] = "'transaction_id' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['performed_at'] === null) {
            $invalid_properties[] = "'performed_at' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
        }
        if ($this->container['transaction_type'] === null) {
            $invalid_properties[] = "'transaction_type' can't be null";
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
        if ($this->container['transaction_id'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['performed_at'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        if ($this->container['transaction_type'] === null) {
            return false;
        }
        return true;
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
     * Gets account_id
     * @return string
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param string $account_id The account ID.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets performed_at
     * @return string
     */
    public function getPerformedAt()
    {
        return $this->container['performed_at'];
    }

    /**
     * Sets performed_at
     * @param string $performed_at The transaction date in the selected timezone in format YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setPerformedAt($performed_at)
    {
        $this->container['performed_at'] = $performed_at;

        return $this;
    }

    /**
     * Gets amount
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param int $amount The transaction amount, $.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency The amount currency (USD, RUR, EUR, ...).
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets transaction_type
     * @return string
     */
    public function getTransactionType()
    {
        return $this->container['transaction_type'];
    }

    /**
     * Sets transaction_type
     * @param string $transaction_type The transaction type. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund.
     * @return $this
     */
    public function setTransactionType($transaction_type)
    {
        $this->container['transaction_type'] = $transaction_type;

        return $this;
    }

    /**
     * Gets transaction_description
     * @return string
     */
    public function getTransactionDescription()
    {
        return $this->container['transaction_description'];
    }

    /**
     * Sets transaction_description
     * @param string $transaction_description The transaction description.
     * @return $this
     */
    public function setTransactionDescription($transaction_description)
    {
        $this->container['transaction_description'] = $transaction_description;

        return $this;
    }

    /**
     * Gets payment_reference
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     * @param string $payment_reference The external payment reference. See TransferMoneyToChildAccount
     * @return $this
     */
    public function setPaymentReference($payment_reference)
    {
        $this->container['payment_reference'] = $payment_reference;

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


