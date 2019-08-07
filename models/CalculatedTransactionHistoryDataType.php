<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;


class CalculatedTransactionHistoryDataType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'CalculatedTransactionHistoryDataType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'transaction_count' => 'int',
        'total_transaction_count' => 'int',
        'start_balance' => 'string',
        'end_balance' => 'string',
        'account_id' => 'int',
        'user_id' => 'int',
        'user_name' => 'int',
        'is_checked' => 'bool',
        'timezone' => 'string'
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
        'transaction_count' => 'transaction_count',
        'total_transaction_count' => 'total_transaction_count',
        'start_balance' => 'start_balance',
        'end_balance' => 'end_balance',
        'account_id' => 'account_id',
        'user_id' => 'user_id',
        'user_name' => 'user_name',
        'is_checked' => 'is_checked',
        'timezone' => 'timezone'
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
        'transaction_count' => 'setTransactionCount',
        'total_transaction_count' => 'setTotalTransactionCount',
        'start_balance' => 'setStartBalance',
        'end_balance' => 'setEndBalance',
        'account_id' => 'setAccountId',
        'user_id' => 'setUserId',
        'user_name' => 'setUserName',
        'is_checked' => 'setIsChecked',
        'timezone' => 'setTimezone'
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
        'transaction_count' => 'getTransactionCount',
        'total_transaction_count' => 'getTotalTransactionCount',
        'start_balance' => 'getStartBalance',
        'end_balance' => 'getEndBalance',
        'account_id' => 'getAccountId',
        'user_id' => 'getUserId',
        'user_name' => 'getUserName',
        'is_checked' => 'getIsChecked',
        'timezone' => 'getTimezone'
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
        $this->container['transaction_count'] = isset($data['transaction_count']) ? $data['transaction_count'] : null;
        $this->container['total_transaction_count'] = isset($data['total_transaction_count']) ? $data['total_transaction_count'] : null;
        $this->container['start_balance'] = isset($data['start_balance']) ? $data['start_balance'] : null;
        $this->container['end_balance'] = isset($data['end_balance']) ? $data['end_balance'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['user_name'] = isset($data['user_name']) ? $data['user_name'] : null;
        $this->container['is_checked'] = isset($data['is_checked']) ? $data['is_checked'] : null;
        $this->container['timezone'] = isset($data['timezone']) ? $data['timezone'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['transaction_count'] === null) {
            $invalid_properties[] = "'transaction_count' can't be null";
        }
        if ($this->container['total_transaction_count'] === null) {
            $invalid_properties[] = "'total_transaction_count' can't be null";
        }
        if ($this->container['timezone'] === null) {
            $invalid_properties[] = "'timezone' can't be null";
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
        if ($this->container['transaction_count'] === null) {
            return false;
        }
        if ($this->container['total_transaction_count'] === null) {
            return false;
        }
        if ($this->container['timezone'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets transaction_count
     * @return int
     */
    public function getTransactionCount()
    {
        return $this->container['transaction_count'];
    }

    /**
     * Sets transaction_count
     * @param int $transaction_count The transaction count in the report.
     * @return $this
     */
    public function setTransactionCount($transaction_count)
    {
        $this->container['transaction_count'] = $transaction_count;

        return $this;
    }

    /**
     * Gets total_transaction_count
     * @return int
     */
    public function getTotalTransactionCount()
    {
        return $this->container['total_transaction_count'];
    }

    /**
     * Sets total_transaction_count
     * @param int $total_transaction_count The total found filtered transaction count.
     * @return $this
     */
    public function setTotalTransactionCount($total_transaction_count)
    {
        $this->container['total_transaction_count'] = $total_transaction_count;

        return $this;
    }

    /**
     * Gets start_balance
     * @return string
     */
    public function getStartBalance()
    {
        return $this->container['start_balance'];
    }

    /**
     * Sets start_balance
     * @param string $start_balance The start account/user balance with currency. Example: 2.3 USD
     * @return $this
     */
    public function setStartBalance($start_balance)
    {
        $this->container['start_balance'] = $start_balance;

        return $this;
    }

    /**
     * Gets end_balance
     * @return string
     */
    public function getEndBalance()
    {
        return $this->container['end_balance'];
    }

    /**
     * Sets end_balance
     * @param string $end_balance The end account/user balance with currency. Example: 12.5 RUR
     * @return $this
     */
    public function setEndBalance($end_balance)
    {
        $this->container['end_balance'] = $end_balance;

        return $this;
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
     * @param int $account_id The account ID.
     * @return $this
     */
    public function setAccountId($account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets user_id
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     * @param int $user_id The user ID.
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets user_name
     * @return int
     */
    public function getUserName()
    {
        return $this->container['user_name'];
    }

    /**
     * Sets user_name
     * @param int $user_name The user name.
     * @return $this
     */
    public function setUserName($user_name)
    {
        $this->container['user_name'] = $user_name;

        return $this;
    }

    /**
     * Gets is_checked
     * @return bool
     */
    public function getIsChecked()
    {
        return $this->container['is_checked'];
    }

    /**
     * Sets is_checked
     * @param bool $is_checked true if balance&transactions are valid.
     * @return $this
     */
    public function setIsChecked($is_checked)
    {
        $this->container['is_checked'] = $is_checked;

        return $this;
    }

    /**
     * Gets timezone
     * @return string
     */
    public function getTimezone()
    {
        return $this->container['timezone'];
    }

    /**
     * Sets timezone
     * @param string $timezone The selected timezone.
     * @return $this
     */
    public function setTimezone($timezone)
    {
        $this->container['timezone'] = $timezone;

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


