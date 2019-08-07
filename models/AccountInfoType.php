<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class AccountInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_id' => 'int',
        'account_name' => 'string',
        'account_email' => 'string',
        'account_first_name' => 'string',
        'account_last_name' => 'string',
        'created' => 'string',
        'language_code' => 'string',
        'location' => 'string',
        'min_balance_to_notify' => 'float',
        'account_notifications' => 'bool',
        'tariff_changing_notifications' => 'bool',
        'news_notifications' => 'bool',
        'billing_address_name' => 'string',
        'billing_address_country_code' => 'string',
        'billing_address_address' => 'string',
        'billing_address_zip' => 'string',
        'billing_address_phone' => 'string',
        'active' => 'bool',
        'frozen' => 'bool',
        'balance' => 'float',
        'credit_limit' => 'float',
        'tariff_id' => 'int',
        'tariff_name' => 'string',
        'periodic_charge' => 'string',
        'next_charge' => 'string',
        'currency' => 'string',
        'support_robokassa' => 'bool',
        'support_bank_card' => 'bool',
        'support_invoice' => 'bool',
        'account_custom_data' => 'string',
        'access_entries' => 'string[]',
        'with_access_entries' => 'bool',
        'send_js_error' => 'bool'
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
        'account_name' => 'account_name',
        'account_email' => 'account_email',
        'account_first_name' => 'account_first_name',
        'account_last_name' => 'account_last_name',
        'created' => 'created',
        'language_code' => 'language_code',
        'location' => 'location',
        'min_balance_to_notify' => 'min_balance_to_notify',
        'account_notifications' => 'account_notifications',
        'tariff_changing_notifications' => 'tariff_changing_notifications',
        'news_notifications' => 'news_notifications',
        'billing_address_name' => 'billing_address_name',
        'billing_address_country_code' => 'billing_address_country_code',
        'billing_address_address' => 'billing_address_address',
        'billing_address_zip' => 'billing_address_zip',
        'billing_address_phone' => 'billing_address_phone',
        'active' => 'active',
        'frozen' => 'frozen',
        'balance' => 'balance',
        'credit_limit' => 'credit_limit',
        'tariff_id' => 'tariff_id',
        'tariff_name' => 'tariff_name',
        'periodic_charge' => 'periodic_charge',
        'next_charge' => 'next_charge',
        'currency' => 'currency',
        'support_robokassa' => 'support_robokassa',
        'support_bank_card' => 'support_bank_card',
        'support_invoice' => 'support_invoice',
        'account_custom_data' => 'account_custom_data',
        'access_entries' => 'access_entries',
        'with_access_entries' => 'with_access_entries',
        'send_js_error' => 'send_js_error'
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
        'account_name' => 'setAccountName',
        'account_email' => 'setAccountEmail',
        'account_first_name' => 'setAccountFirstName',
        'account_last_name' => 'setAccountLastName',
        'created' => 'setCreated',
        'language_code' => 'setLanguageCode',
        'location' => 'setLocation',
        'min_balance_to_notify' => 'setMinBalanceToNotify',
        'account_notifications' => 'setAccountNotifications',
        'tariff_changing_notifications' => 'setTariffChangingNotifications',
        'news_notifications' => 'setNewsNotifications',
        'billing_address_name' => 'setBillingAddressName',
        'billing_address_country_code' => 'setBillingAddressCountryCode',
        'billing_address_address' => 'setBillingAddressAddress',
        'billing_address_zip' => 'setBillingAddressZip',
        'billing_address_phone' => 'setBillingAddressPhone',
        'active' => 'setActive',
        'frozen' => 'setFrozen',
        'balance' => 'setBalance',
        'credit_limit' => 'setCreditLimit',
        'tariff_id' => 'setTariffId',
        'tariff_name' => 'setTariffName',
        'periodic_charge' => 'setPeriodicCharge',
        'next_charge' => 'setNextCharge',
        'currency' => 'setCurrency',
        'support_robokassa' => 'setSupportRobokassa',
        'support_bank_card' => 'setSupportBankCard',
        'support_invoice' => 'setSupportInvoice',
        'account_custom_data' => 'setAccountCustomData',
        'access_entries' => 'setAccessEntries',
        'with_access_entries' => 'setWithAccessEntries',
        'send_js_error' => 'setSendJsError'
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
        'account_name' => 'getAccountName',
        'account_email' => 'getAccountEmail',
        'account_first_name' => 'getAccountFirstName',
        'account_last_name' => 'getAccountLastName',
        'created' => 'getCreated',
        'language_code' => 'getLanguageCode',
        'location' => 'getLocation',
        'min_balance_to_notify' => 'getMinBalanceToNotify',
        'account_notifications' => 'getAccountNotifications',
        'tariff_changing_notifications' => 'getTariffChangingNotifications',
        'news_notifications' => 'getNewsNotifications',
        'billing_address_name' => 'getBillingAddressName',
        'billing_address_country_code' => 'getBillingAddressCountryCode',
        'billing_address_address' => 'getBillingAddressAddress',
        'billing_address_zip' => 'getBillingAddressZip',
        'billing_address_phone' => 'getBillingAddressPhone',
        'active' => 'getActive',
        'frozen' => 'getFrozen',
        'balance' => 'getBalance',
        'credit_limit' => 'getCreditLimit',
        'tariff_id' => 'getTariffId',
        'tariff_name' => 'getTariffName',
        'periodic_charge' => 'getPeriodicCharge',
        'next_charge' => 'getNextCharge',
        'currency' => 'getCurrency',
        'support_robokassa' => 'getSupportRobokassa',
        'support_bank_card' => 'getSupportBankCard',
        'support_invoice' => 'getSupportInvoice',
        'account_custom_data' => 'getAccountCustomData',
        'access_entries' => 'getAccessEntries',
        'with_access_entries' => 'getWithAccessEntries',
        'send_js_error' => 'getSendJsError'
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
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_email'] = isset($data['account_email']) ? $data['account_email'] : null;
        $this->container['account_first_name'] = isset($data['account_first_name']) ? $data['account_first_name'] : null;
        $this->container['account_last_name'] = isset($data['account_last_name']) ? $data['account_last_name'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['min_balance_to_notify'] = isset($data['min_balance_to_notify']) ? $data['min_balance_to_notify'] : null;
        $this->container['account_notifications'] = isset($data['account_notifications']) ? $data['account_notifications'] : null;
        $this->container['tariff_changing_notifications'] = isset($data['tariff_changing_notifications']) ? $data['tariff_changing_notifications'] : null;
        $this->container['news_notifications'] = isset($data['news_notifications']) ? $data['news_notifications'] : null;
        $this->container['billing_address_name'] = isset($data['billing_address_name']) ? $data['billing_address_name'] : null;
        $this->container['billing_address_country_code'] = isset($data['billing_address_country_code']) ? $data['billing_address_country_code'] : null;
        $this->container['billing_address_address'] = isset($data['billing_address_address']) ? $data['billing_address_address'] : null;
        $this->container['billing_address_zip'] = isset($data['billing_address_zip']) ? $data['billing_address_zip'] : null;
        $this->container['billing_address_phone'] = isset($data['billing_address_phone']) ? $data['billing_address_phone'] : null;
        $this->container['active'] = isset($data['active']) ? $data['active'] : null;
        $this->container['frozen'] = isset($data['frozen']) ? $data['frozen'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['credit_limit'] = isset($data['credit_limit']) ? $data['credit_limit'] : null;
        $this->container['tariff_id'] = isset($data['tariff_id']) ? $data['tariff_id'] : null;
        $this->container['tariff_name'] = isset($data['tariff_name']) ? $data['tariff_name'] : null;
        $this->container['periodic_charge'] = isset($data['periodic_charge']) ? $data['periodic_charge'] : null;
        $this->container['next_charge'] = isset($data['next_charge']) ? $data['next_charge'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['support_robokassa'] = isset($data['support_robokassa']) ? $data['support_robokassa'] : null;
        $this->container['support_bank_card'] = isset($data['support_bank_card']) ? $data['support_bank_card'] : null;
        $this->container['support_invoice'] = isset($data['support_invoice']) ? $data['support_invoice'] : null;
        $this->container['account_custom_data'] = isset($data['account_custom_data']) ? $data['account_custom_data'] : null;
        $this->container['access_entries'] = isset($data['access_entries']) ? $data['access_entries'] : null;
        $this->container['with_access_entries'] = isset($data['with_access_entries']) ? $data['with_access_entries'] : null;
        $this->container['send_js_error'] = isset($data['send_js_error']) ? $data['send_js_error'] : null;
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
        if ($this->container['account_name'] === null) {
            $invalid_properties[] = "'account_name' can't be null";
        }
        if ($this->container['account_email'] === null) {
            $invalid_properties[] = "'account_email' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        if ($this->container['active'] === null) {
            $invalid_properties[] = "'active' can't be null";
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
        if ($this->container['account_name'] === null) {
            return false;
        }
        if ($this->container['account_email'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['active'] === null) {
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
     * Gets account_name
     * @return string
     */
    public function getAccountName()
    {
        return $this->container['account_name'];
    }

    /**
     * Sets account_name
     * @param string $account_name The account's name.
     * @return $this
     */
    public function setAccountName($account_name)
    {
        $this->container['account_name'] = $account_name;

        return $this;
    }

    /**
     * Gets account_email
     * @return string
     */
    public function getAccountEmail()
    {
        return $this->container['account_email'];
    }

    /**
     * Sets account_email
     * @param string $account_email The account's email.
     * @return $this
     */
    public function setAccountEmail($account_email)
    {
        $this->container['account_email'] = $account_email;

        return $this;
    }

    /**
     * Gets account_first_name
     * @return string
     */
    public function getAccountFirstName()
    {
        return $this->container['account_first_name'];
    }

    /**
     * Sets account_first_name
     * @param string $account_first_name The first name.
     * @return $this
     */
    public function setAccountFirstName($account_first_name)
    {
        $this->container['account_first_name'] = $account_first_name;

        return $this;
    }

    /**
     * Gets account_last_name
     * @return string
     */
    public function getAccountLastName()
    {
        return $this->container['account_last_name'];
    }

    /**
     * Sets account_last_name
     * @param string $account_last_name The last name.
     * @return $this
     */
    public function setAccountLastName($account_last_name)
    {
        $this->container['account_last_name'] = $account_last_name;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created The UTC account created time in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets language_code
     * @return string
     */
    public function getLanguageCode()
    {
        return $this->container['language_code'];
    }

    /**
     * Sets language_code
     * @param string $language_code The notification language code (2 symbols, ISO639-1). Examples: en, ru
     * @return $this
     */
    public function setLanguageCode($language_code)
    {
        $this->container['language_code'] = $language_code;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location The account location (timezone). Examples: America/Los_Angeles, GMT-08:00
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets min_balance_to_notify
     * @return int
     */
    public function getMinBalanceToNotify()
    {
        return $this->container['min_balance_to_notify'];
    }

    /**
     * Sets min_balance_to_notify
     * @param int $min_balance_to_notify The min balance value to notify by email or SMS.
     * @return $this
     */
    public function setMinBalanceToNotify($min_balance_to_notify)
    {
        $this->container['min_balance_to_notify'] = $min_balance_to_notify;

        return $this;
    }

    /**
     * Gets account_notifications
     * @return bool
     */
    public function getAccountNotifications()
    {
        return $this->container['account_notifications'];
    }

    /**
     * Sets account_notifications
     * @param bool $account_notifications Are the VoxImplant notifications required?
     * @return $this
     */
    public function setAccountNotifications($account_notifications)
    {
        $this->container['account_notifications'] = $account_notifications;

        return $this;
    }

    /**
     * Gets tariff_changing_notifications
     * @return bool
     */
    public function getTariffChangingNotifications()
    {
        return $this->container['tariff_changing_notifications'];
    }

    /**
     * Sets tariff_changing_notifications
     * @param bool $tariff_changing_notifications Are the VoxImplant tariff changing notifications required?
     * @return $this
     */
    public function setTariffChangingNotifications($tariff_changing_notifications)
    {
        $this->container['tariff_changing_notifications'] = $tariff_changing_notifications;

        return $this;
    }

    /**
     * Gets news_notifications
     * @return bool
     */
    public function getNewsNotifications()
    {
        return $this->container['news_notifications'];
    }

    /**
     * Sets news_notifications
     * @param bool $news_notifications Are the VoxImplant news notifications required?
     * @return $this
     */
    public function setNewsNotifications($news_notifications)
    {
        $this->container['news_notifications'] = $news_notifications;

        return $this;
    }

    /**
     * Gets billing_address_name
     * @return string
     */
    public function getBillingAddressName()
    {
        return $this->container['billing_address_name'];
    }

    /**
     * Sets billing_address_name
     * @param string $billing_address_name The company or businessman name.
     * @return $this
     */
    public function setBillingAddressName($billing_address_name)
    {
        $this->container['billing_address_name'] = $billing_address_name;

        return $this;
    }

    /**
     * Gets billing_address_country_code
     * @return string
     */
    public function getBillingAddressCountryCode()
    {
        return $this->container['billing_address_country_code'];
    }

    /**
     * Sets billing_address_country_code
     * @param string $billing_address_country_code The billing address country code (2 symbols, ISO 3166-1 alpha-2). Examples: US, RU, GB
     * @return $this
     */
    public function setBillingAddressCountryCode($billing_address_country_code)
    {
        $this->container['billing_address_country_code'] = $billing_address_country_code;

        return $this;
    }

    /**
     * Gets billing_address_address
     * @return string
     */
    public function getBillingAddressAddress()
    {
        return $this->container['billing_address_address'];
    }

    /**
     * Sets billing_address_address
     * @param string $billing_address_address The office address.
     * @return $this
     */
    public function setBillingAddressAddress($billing_address_address)
    {
        $this->container['billing_address_address'] = $billing_address_address;

        return $this;
    }

    /**
     * Gets billing_address_zip
     * @return string
     */
    public function getBillingAddressZip()
    {
        return $this->container['billing_address_zip'];
    }

    /**
     * Sets billing_address_zip
     * @param string $billing_address_zip The office ZIP.
     * @return $this
     */
    public function setBillingAddressZip($billing_address_zip)
    {
        $this->container['billing_address_zip'] = $billing_address_zip;

        return $this;
    }

    /**
     * Gets billing_address_phone
     * @return string
     */
    public function getBillingAddressPhone()
    {
        return $this->container['billing_address_phone'];
    }

    /**
     * Sets billing_address_phone
     * @param string $billing_address_phone The office phone number.
     * @return $this
     */
    public function setBillingAddressPhone($billing_address_phone)
    {
        $this->container['billing_address_phone'] = $billing_address_phone;

        return $this;
    }

    /**
     * Gets active
     * @return bool
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     * @param bool $active The account activation flag.
     * @return $this
     */
    public function setActive($active)
    {
        $this->container['active'] = $active;

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
     * Gets credit_limit
     * @return int
     */
    public function getCreditLimit()
    {
        return $this->container['credit_limit'];
    }

    /**
     * Sets credit_limit
     * @param int $credit_limit The account's credit limit.
     * @return $this
     */
    public function setCreditLimit($credit_limit)
    {
        $this->container['credit_limit'] = $credit_limit;

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
     * Gets support_robokassa
     * @return bool
     */
    public function getSupportRobokassa()
    {
        return $this->container['support_robokassa'];
    }

    /**
     * Sets support_robokassa
     * @param bool $support_robokassa Is the robokassa payment system allowed?
     * @return $this
     */
    public function setSupportRobokassa($support_robokassa)
    {
        $this->container['support_robokassa'] = $support_robokassa;

        return $this;
    }

    /**
     * Gets support_bank_card
     * @return bool
     */
    public function getSupportBankCard()
    {
        return $this->container['support_bank_card'];
    }

    /**
     * Sets support_bank_card
     * @param bool $support_bank_card Is the bank card payments allowed?
     * @return $this
     */
    public function setSupportBankCard($support_bank_card)
    {
        $this->container['support_bank_card'] = $support_bank_card;

        return $this;
    }

    /**
     * Gets support_invoice
     * @return bool
     */
    public function getSupportInvoice()
    {
        return $this->container['support_invoice'];
    }

    /**
     * Sets support_invoice
     * @param bool $support_invoice Is the bank invoice allowed?
     * @return $this
     */
    public function setSupportInvoice($support_invoice)
    {
        $this->container['support_invoice'] = $support_invoice;

        return $this;
    }

    /**
     * Gets account_custom_data
     * @return string
     */
    public function getAccountCustomData()
    {
        return $this->container['account_custom_data'];
    }

    /**
     * Sets account_custom_data
     * @param string $account_custom_data The custom data.
     * @return $this
     */
    public function setAccountCustomData($account_custom_data)
    {
        $this->container['account_custom_data'] = $account_custom_data;

        return $this;
    }

    /**
     * Gets access_entries
     * @return string[]
     */
    public function getAccessEntries()
    {
        return $this->container['access_entries'];
    }

    /**
     * Sets access_entries
     * @param string[] $access_entries
     * @return $this
     */
    public function setAccessEntries($access_entries)
    {
        $this->container['access_entries'] = $access_entries;

        return $this;
    }

    /**
     * Gets with_access_entries
     * @return bool
     */
    public function getWithAccessEntries()
    {
        return $this->container['with_access_entries'];
    }

    /**
     * Sets with_access_entries
     * @param bool $with_access_entries Set true to get the admin user permissions.
     * @return $this
     */
    public function setWithAccessEntries($with_access_entries)
    {
        $this->container['with_access_entries'] = $with_access_entries;

        return $this;
    }

    /**
     * Gets send_js_error
     * @return bool
     */
    public function getSendJsError()
    {
        return $this->container['send_js_error'];
    }

    /**
     * Sets send_js_error
     * @param bool $send_js_error Is email sending on a JS error?
     * @return $this
     */
    public function setSendJsError($send_js_error)
    {
        $this->container['send_js_error'] = $send_js_error;

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
            return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


