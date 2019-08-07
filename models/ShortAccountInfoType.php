<?php

class ShortAccountInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ShortAccountInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_id' => 'int',
        'frozen' => 'bool',
        'balance' => 'int',
        'tariff_id' => 'int',
        'tariff_name' => 'string',
        'periodic_charge' => 'string',
        'next_charge' => 'string',
        'currency' => 'string'
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
        'account_id' => 'account_id',
        'frozen' => 'frozen',
        'balance' => 'balance',
        'tariff_id' => 'tariff_id',
        'tariff_name' => 'tariff_name',
        'periodic_charge' => 'periodic_charge',
        'next_charge' => 'next_charge',
        'currency' => 'currency'
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
        'account_id' => 'setAccountId',
        'frozen' => 'setFrozen',
        'balance' => 'setBalance',
        'tariff_id' => 'setTariffId',
        'tariff_name' => 'setTariffName',
        'periodic_charge' => 'setPeriodicCharge',
        'next_charge' => 'setNextCharge',
        'currency' => 'setCurrency'
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
        'account_id' => 'getAccountId',
        'frozen' => 'getFrozen',
        'balance' => 'getBalance',
        'tariff_id' => 'getTariffId',
        'tariff_name' => 'getTariffName',
        'periodic_charge' => 'getPeriodicCharge',
        'next_charge' => 'getNextCharge',
        'currency' => 'getCurrency'
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
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['tariff_id'] = isset($data['tariff_id']) ? $data['tariff_id'] : null;
        $this->container['tariff_name'] = isset($data['tariff_name']) ? $data['tariff_name'] : null;
        $this->container['periodic_charge'] = isset($data['periodic_charge']) ? $data['periodic_charge'] : null;
        $this->container['next_charge'] = isset($data['next_charge']) ? $data['next_charge'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
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
        if ($this->container['account_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_id
     * @return int
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     * @param int $account_id The account's ID.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets frozen
     * @return bool
     */
    public function getFrozen()
    {
        return $this->container['frozen'];
    }

    /**
     * Sets frozen
     * @param bool $frozen The no money flag.
     * @return $this
     */
    public function setFrozen($frozen)
    {
        $this->container['frozen'] = $frozen;

        return $this;
    }

    /**
     * Gets balance
     * @return int
     */
    public function getBalance()
    {
        return $this->container['balance'];
    }

    /**
     * Sets balance
     * @param int $balance The account's money.
     * @return $this
     */
    public function setBalance($balance)
    {
        $this->container['balance'] = $balance;

        return $this;
    }

    /**
     * Gets tariff_id
     * @return int
     */
    public function getTariffId()
    {
        return $this->container['tariff_id'];
    }

    /**
     * Sets tariff_id
     * @param int $tariff_id The account's tariff ID.
     * @return $this
     */
    public function setTariffId($tariff_id)
    {
        $this->container['tariff_id'] = $tariff_id;

        return $this;
    }

    /**
     * Gets tariff_name
     * @return string
     */
    public function getTariffName()
    {
        return $this->container['tariff_name'];
    }

    /**
     * Sets tariff_name
     * @param string $tariff_name The account's tariff name.
     * @return $this
     */
    public function setTariffName($tariff_name)
    {
        $this->container['tariff_name'] = $tariff_name;

        return $this;
    }

    /**
     * Gets periodic_charge
     * @return string
     */
    public function getPeriodicCharge()
    {
        return $this->container['periodic_charge'];
    }

    /**
     * Sets periodic_charge
     * @param string $periodic_charge The tariff interval, format: YYYY-MM-DD 00:00:00
     * @return $this
     */
    public function setPeriodicCharge($periodic_charge)
    {
        $this->container['periodic_charge'] = $periodic_charge;

        return $this;
    }

    /**
     * Gets next_charge
     * @return string
     */
    public function getNextCharge()
    {
        return $this->container['next_charge'];
    }

    /**
     * Sets next_charge
     * @param string $next_charge The next charge date, format: YYYY-MM-DD
     * @return $this
     */
    public function setNextCharge($next_charge)
    {
        $this->container['next_charge'] = $next_charge;

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
     * @param string $currency The currency code (USD, RUR, EUR, ...).
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


