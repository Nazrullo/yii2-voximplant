<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

class BankCardType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'BankCardType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'auto_charge' => 'bool',
        'min_balance_' => 'int',
        'card_overrun_value' => 'int',
        'expiration_year' => 'int',
        'expiration_month' => 'int',
        'acct' => 'int'
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
        'auto_charge' => 'auto_charge',
        'min_balance_' => 'min_balance ',
        'card_overrun_value' => 'card_overrun_value',
        'expiration_year' => 'expiration_year',
        'expiration_month' => 'expiration_month',
        'acct' => 'acct'
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
        'auto_charge' => 'setAutoCharge',
        'min_balance_' => 'setMinBalance_',
        'card_overrun_value' => 'setCardOverrunValue',
        'expiration_year' => 'setExpirationYear',
        'expiration_month' => 'setExpirationMonth',
        'acct' => 'setAcct'
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
        'auto_charge' => 'getAutoCharge',
        'min_balance_' => 'getMinBalance_',
        'card_overrun_value' => 'getCardOverrunValue',
        'expiration_year' => 'getExpirationYear',
        'expiration_month' => 'getExpirationMonth',
        'acct' => 'getAcct'
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
        $this->container['auto_charge'] = isset($data['auto_charge']) ? $data['auto_charge'] : null;
        $this->container['min_balance_'] = isset($data['min_balance_']) ? $data['min_balance_'] : null;
        $this->container['card_overrun_value'] = isset($data['card_overrun_value']) ? $data['card_overrun_value'] : null;
        $this->container['expiration_year'] = isset($data['expiration_year']) ? $data['expiration_year'] : null;
        $this->container['expiration_month'] = isset($data['expiration_month']) ? $data['expiration_month'] : null;
        $this->container['acct'] = isset($data['acct']) ? $data['acct'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['auto_charge'] === null) {
            $invalid_properties[] = "'auto_charge' can't be null";
        }
        if ($this->container['min_balance_'] === null) {
            $invalid_properties[] = "'min_balance_' can't be null";
        }
        if ($this->container['card_overrun_value'] === null) {
            $invalid_properties[] = "'card_overrun_value' can't be null";
        }
        if ($this->container['expiration_year'] === null) {
            $invalid_properties[] = "'expiration_year' can't be null";
        }
        if ($this->container['expiration_month'] === null) {
            $invalid_properties[] = "'expiration_month' can't be null";
        }
        if ($this->container['acct'] === null) {
            $invalid_properties[] = "'acct' can't be null";
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
        if ($this->container['auto_charge'] === null) {
            return false;
        }
        if ($this->container['min_balance_'] === null) {
            return false;
        }
        if ($this->container['card_overrun_value'] === null) {
            return false;
        }
        if ($this->container['expiration_year'] === null) {
            return false;
        }
        if ($this->container['expiration_month'] === null) {
            return false;
        }
        if ($this->container['acct'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets auto_charge
     * @return bool
     */
    public function getAutoCharge()
    {
        return $this->container['auto_charge'];
    }

    /**
     * Sets auto_charge
     * @param bool $auto_charge The auto charging flag.
     * @return $this
     */
    public function setAutoCharge($auto_charge)
    {
        $this->container['auto_charge'] = $auto_charge;

        return $this;
    }

    /**
     * Gets min_balance_
     * @return int
     */
    public function getMinBalance_()
    {
        return $this->container['min_balance_'];
    }

    /**
     * Sets min_balance_
     * @param int $min_balance_ The min account balance to trigger the auto charging.
     * @return $this
     */
    public function setMinBalance_($min_balance_)
    {
        $this->container['min_balance_'] = $min_balance_;

        return $this;
    }

    /**
     * Gets card_overrun_value
     * @return int
     */
    public function getCardOverrunValue()
    {
        return $this->container['card_overrun_value'];
    }

    /**
     * Sets card_overrun_value
     * @param int $card_overrun_value The card overrun value in the account currency.
     * @return $this
     */
    public function setCardOverrunValue($card_overrun_value)
    {
        $this->container['card_overrun_value'] = $card_overrun_value;

        return $this;
    }

    /**
     * Gets expiration_year
     * @return int
     */
    public function getExpirationYear()
    {
        return $this->container['expiration_year'];
    }

    /**
     * Sets expiration_year
     * @param int $expiration_year The card expiration year.
     * @return $this
     */
    public function setExpirationYear($expiration_year)
    {
        $this->container['expiration_year'] = $expiration_year;

        return $this;
    }

    /**
     * Gets expiration_month
     * @return int
     */
    public function getExpirationMonth()
    {
        return $this->container['expiration_month'];
    }

    /**
     * Sets expiration_month
     * @param int $expiration_month The card expiration month.
     * @return $this
     */
    public function setExpirationMonth($expiration_month)
    {
        $this->container['expiration_month'] = $expiration_month;

        return $this;
    }

    /**
     * Gets acct
     * @return int
     */
    public function getAcct()
    {
        return $this->container['acct'];
    }

    /**
     * Sets acct
     * @param int $acct The last card number digits.
     * @return $this
     */
    public function setAcct($acct)
    {
        $this->container['acct'] = $acct;

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


