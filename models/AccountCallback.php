<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class AccountCallback implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountCallback';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'callback_id' => 'int',
        'type' => 'string',
        'account_id' => 'int',
        'hash' => 'string',
        'account_name' => 'string',
        'account_email' => 'string',
        'language_code' => 'string',
        'account_first_name' => 'string',
        'account_last_name' => 'string',
        'balance' => 'int',
        'currency' => 'string',
        'account_document_verified' => '\backend\modules\voximplant\models\AccountDocumentVerifiedCallback',
        'account_is_frozen' => '\backend\modules\voximplant\models\AccountIsFrozenCallback',
        'activate_successful' => '\backend\modules\voximplant\models\ActivateSuccessfulCallback',
        'call_history_report' => '\backend\modules\voximplant\models\CallHistoryReportCallback',
        'card_expired' => '\backend\modules\voximplant\models\CardExpiredCallback',
        'card_expires_in_month' => '\backend\modules\voximplant\models\CardExpiresInMonthCallback',
        'card_payment' => '\backend\modules\voximplant\models\CardPaymentCallback',
        'card_payment_failed' => '\backend\modules\voximplant\models\CardPaymentFailedCallback',
        'js_fail' => '\backend\modules\voximplant\models\JSFailCallback',
        'min_balance' => '\backend\modules\voximplant\models\MinBalanceCallback',
        'regulation_address_verified' => '\backend\modules\voximplant\models\RegulationAddressVerifiedCallback',
        'renewed_subscriptions' => '\backend\modules\voximplant\models\RenewedSubscriptionsCallback',
        'reset_account_password_request' => '\backend\modules\voximplant\models\ResetAccountPasswordRequestCallback',
        'sip_registration_fail' => '\backend\modules\voximplant\models\SIPRegistrationFailCallback',
        'stagnant_account' => '\backend\modules\voximplant\models\StagnantAccountCallback',
        'subscription_is_frozen' => '\backend\modules\voximplant\models\SubscriptionIsFrozenCallback',
        'subscription_is_detached' => '\backend\modules\voximplant\models\SubscriptionIsDetachedCallback',
        'transaction_history_report' => '\backend\modules\voximplant\models\TransactionHistoryReportCallback',
        'uncharged_tariff' => '\backend\modules\voximplant\models\UnchargedTariffCallback',
        'unverified_subscription_detached' => '\backend\modules\voximplant\models\UnverifiedSubscriptionDetachedCallback'
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
        'callback_id' => 'callback_id',
        'type' => 'type',
        'account_id' => 'account_id',
        'hash' => 'hash',
        'account_name' => 'account_name',
        'account_email' => 'account_email',
        'language_code' => 'language_code',
        'account_first_name' => 'account_first_name',
        'account_last_name' => 'account_last_name',
        'balance' => 'balance',
        'currency' => 'currency',
        'account_document_verified' => 'account_document_verified',
        'account_is_frozen' => 'account_is_frozen',
        'activate_successful' => 'activate_successful',
        'call_history_report' => 'call_history_report',
        'card_expired' => 'card_expired',
        'card_expires_in_month' => 'card_expires_in_month',
        'card_payment' => 'card_payment',
        'card_payment_failed' => 'card_payment_failed',
        'js_fail' => 'js_fail',
        'min_balance' => 'min_balance',
        'regulation_address_verified' => 'regulation_address_verified',
        'renewed_subscriptions' => 'renewed_subscriptions',
        'reset_account_password_request' => 'reset_account_password_request',
        'sip_registration_fail' => 'sip_registration_fail',
        'stagnant_account' => 'stagnant_account',
        'subscription_is_frozen' => 'subscription_is_frozen',
        'subscription_is_detached' => 'subscription_is_detached',
        'transaction_history_report' => 'transaction_history_report',
        'uncharged_tariff' => 'uncharged_tariff',
        'unverified_subscription_detached' => 'unverified_subscription_detached'
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
        'callback_id' => 'setCallbackId',
        'type' => 'setType',
        'account_id' => 'setAccountId',
        'hash' => 'setHash',
        'account_name' => 'setAccountName',
        'account_email' => 'setAccountEmail',
        'language_code' => 'setLanguageCode',
        'account_first_name' => 'setAccountFirstName',
        'account_last_name' => 'setAccountLastName',
        'balance' => 'setBalance',
        'currency' => 'setCurrency',
        'account_document_verified' => 'setAccountDocumentVerified',
        'account_is_frozen' => 'setAccountIsFrozen',
        'activate_successful' => 'setActivateSuccessful',
        'call_history_report' => 'setCallHistoryReport',
        'card_expired' => 'setCardExpired',
        'card_expires_in_month' => 'setCardExpiresInMonth',
        'card_payment' => 'setCardPayment',
        'card_payment_failed' => 'setCardPaymentFailed',
        'js_fail' => 'setJsFail',
        'min_balance' => 'setMinBalance',
        'regulation_address_verified' => 'setRegulationAddressVerified',
        'renewed_subscriptions' => 'setRenewedSubscriptions',
        'reset_account_password_request' => 'setResetAccountPasswordRequest',
        'sip_registration_fail' => 'setSipRegistrationFail',
        'stagnant_account' => 'setStagnantAccount',
        'subscription_is_frozen' => 'setSubscriptionIsFrozen',
        'subscription_is_detached' => 'setSubscriptionIsDetached',
        'transaction_history_report' => 'setTransactionHistoryReport',
        'uncharged_tariff' => 'setUnchargedTariff',
        'unverified_subscription_detached' => 'setUnverifiedSubscriptionDetached'
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
        'callback_id' => 'getCallbackId',
        'type' => 'getType',
        'account_id' => 'getAccountId',
        'hash' => 'getHash',
        'account_name' => 'getAccountName',
        'account_email' => 'getAccountEmail',
        'language_code' => 'getLanguageCode',
        'account_first_name' => 'getAccountFirstName',
        'account_last_name' => 'getAccountLastName',
        'balance' => 'getBalance',
        'currency' => 'getCurrency',
        'account_document_verified' => 'getAccountDocumentVerified',
        'account_is_frozen' => 'getAccountIsFrozen',
        'activate_successful' => 'getActivateSuccessful',
        'call_history_report' => 'getCallHistoryReport',
        'card_expired' => 'getCardExpired',
        'card_expires_in_month' => 'getCardExpiresInMonth',
        'card_payment' => 'getCardPayment',
        'card_payment_failed' => 'getCardPaymentFailed',
        'js_fail' => 'getJsFail',
        'min_balance' => 'getMinBalance',
        'regulation_address_verified' => 'getRegulationAddressVerified',
        'renewed_subscriptions' => 'getRenewedSubscriptions',
        'reset_account_password_request' => 'getResetAccountPasswordRequest',
        'sip_registration_fail' => 'getSipRegistrationFail',
        'stagnant_account' => 'getStagnantAccount',
        'subscription_is_frozen' => 'getSubscriptionIsFrozen',
        'subscription_is_detached' => 'getSubscriptionIsDetached',
        'transaction_history_report' => 'getTransactionHistoryReport',
        'uncharged_tariff' => 'getUnchargedTariff',
        'unverified_subscription_detached' => 'getUnverifiedSubscriptionDetached'
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
        $this->container['callback_id'] = isset($data['callback_id']) ? $data['callback_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['account_id'] = isset($data['account_id']) ? $data['account_id'] : null;
        $this->container['hash'] = isset($data['hash']) ? $data['hash'] : null;
        $this->container['account_name'] = isset($data['account_name']) ? $data['account_name'] : null;
        $this->container['account_email'] = isset($data['account_email']) ? $data['account_email'] : null;
        $this->container['language_code'] = isset($data['language_code']) ? $data['language_code'] : null;
        $this->container['account_first_name'] = isset($data['account_first_name']) ? $data['account_first_name'] : null;
        $this->container['account_last_name'] = isset($data['account_last_name']) ? $data['account_last_name'] : null;
        $this->container['balance'] = isset($data['balance']) ? $data['balance'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['account_document_verified'] = isset($data['account_document_verified']) ? $data['account_document_verified'] : null;
        $this->container['account_is_frozen'] = isset($data['account_is_frozen']) ? $data['account_is_frozen'] : null;
        $this->container['activate_successful'] = isset($data['activate_successful']) ? $data['activate_successful'] : null;
        $this->container['call_history_report'] = isset($data['call_history_report']) ? $data['call_history_report'] : null;
        $this->container['card_expired'] = isset($data['card_expired']) ? $data['card_expired'] : null;
        $this->container['card_expires_in_month'] = isset($data['card_expires_in_month']) ? $data['card_expires_in_month'] : null;
        $this->container['card_payment'] = isset($data['card_payment']) ? $data['card_payment'] : null;
        $this->container['card_payment_failed'] = isset($data['card_payment_failed']) ? $data['card_payment_failed'] : null;
        $this->container['js_fail'] = isset($data['js_fail']) ? $data['js_fail'] : null;
        $this->container['min_balance'] = isset($data['min_balance']) ? $data['min_balance'] : null;
        $this->container['regulation_address_verified'] = isset($data['regulation_address_verified']) ? $data['regulation_address_verified'] : null;
        $this->container['renewed_subscriptions'] = isset($data['renewed_subscriptions']) ? $data['renewed_subscriptions'] : null;
        $this->container['reset_account_password_request'] = isset($data['reset_account_password_request']) ? $data['reset_account_password_request'] : null;
        $this->container['sip_registration_fail'] = isset($data['sip_registration_fail']) ? $data['sip_registration_fail'] : null;
        $this->container['stagnant_account'] = isset($data['stagnant_account']) ? $data['stagnant_account'] : null;
        $this->container['subscription_is_frozen'] = isset($data['subscription_is_frozen']) ? $data['subscription_is_frozen'] : null;
        $this->container['subscription_is_detached'] = isset($data['subscription_is_detached']) ? $data['subscription_is_detached'] : null;
        $this->container['transaction_history_report'] = isset($data['transaction_history_report']) ? $data['transaction_history_report'] : null;
        $this->container['uncharged_tariff'] = isset($data['uncharged_tariff']) ? $data['uncharged_tariff'] : null;
        $this->container['unverified_subscription_detached'] = isset($data['unverified_subscription_detached']) ? $data['unverified_subscription_detached'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['callback_id'] === null) {
            $invalid_properties[] = "'callback_id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        if ($this->container['account_id'] === null) {
            $invalid_properties[] = "'account_id' can't be null";
        }
        if ($this->container['hash'] === null) {
            $invalid_properties[] = "'hash' can't be null";
        }
        if ($this->container['account_name'] === null) {
            $invalid_properties[] = "'account_name' can't be null";
        }
        if ($this->container['account_email'] === null) {
            $invalid_properties[] = "'account_email' can't be null";
        }
        if ($this->container['language_code'] === null) {
            $invalid_properties[] = "'language_code' can't be null";
        }
        if ($this->container['account_first_name'] === null) {
            $invalid_properties[] = "'account_first_name' can't be null";
        }
        if ($this->container['account_last_name'] === null) {
            $invalid_properties[] = "'account_last_name' can't be null";
        }
        if ($this->container['balance'] === null) {
            $invalid_properties[] = "'balance' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalid_properties[] = "'currency' can't be null";
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
        if ($this->container['callback_id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        if ($this->container['account_id'] === null) {
            return false;
        }
        if ($this->container['hash'] === null) {
            return false;
        }
        if ($this->container['account_name'] === null) {
            return false;
        }
        if ($this->container['account_email'] === null) {
            return false;
        }
        if ($this->container['language_code'] === null) {
            return false;
        }
        if ($this->container['account_first_name'] === null) {
            return false;
        }
        if ($this->container['account_last_name'] === null) {
            return false;
        }
        if ($this->container['balance'] === null) {
            return false;
        }
        if ($this->container['currency'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets callback_id
     * @return int
     */
    public function getCallbackId()
    {
        return $this->container['callback_id'];
    }

    /**
     * Sets callback_id
     * @param int $callback_id The callback ID (sequence).
     * @return $this
     */
    public function setCallbackId($callback_id)
    {
        $this->container['callback_id'] = $callback_id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type The callback type. The following values are possible: account_document_verified, account_is_frozen, activate_successful, call_history_report, card_expired, card_expires_in_month, card_payment, card_payment_failed, js_fail, min_balance, regulation_address_verified, renewed_subscriptions, reset_account_password_request, sip_registration_fail, stagnant_account, subscription_is_detached, subscription_is_frozen, transaction_history_report, uncharged_tariff, unverified_subscription_detached.
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

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
     * Gets hash
     * @return string
     */
    public function getHash()
    {
        return $this->container['hash'];
    }

    /**
     * Sets hash
     * @param string $hash The security hash: hash = md5(account_salt + account_id + api_key + callback_id). Example: 50c5fe2290cd7409b37e673b8b05e495
     * @return $this
     */
    public function setHash($hash)
    {
        $this->container['hash'] = $hash;

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
     * @param string $account_name The account name.
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
     * @param string $account_email The account email.
     * @return $this
     */
    public function setAccountEmail($account_email)
    {
        $this->container['account_email'] = $account_email;

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
     * Gets account_document_verified
     * @return \backend\modules\voximplant\models\AccountDocumentVerifiedCallback
     */
    public function getAccountDocumentVerified()
    {
        return $this->container['account_document_verified'];
    }

    /**
     * Sets account_document_verified
     * @param \backend\modules\voximplant\models\AccountDocumentVerifiedCallback $account_document_verified
     * @return $this
     */
    public function setAccountDocumentVerified($account_document_verified)
    {
        $this->container['account_document_verified'] = $account_document_verified;

        return $this;
    }

    /**
     * Gets account_is_frozen
     * @return \backend\modules\voximplant\models\AccountIsFrozenCallback
     */
    public function getAccountIsFrozen()
    {
        return $this->container['account_is_frozen'];
    }

    /**
     * Sets account_is_frozen
     * @param \backend\modules\voximplant\models\AccountIsFrozenCallback $account_is_frozen
     * @return $this
     */
    public function setAccountIsFrozen($account_is_frozen)
    {
        $this->container['account_is_frozen'] = $account_is_frozen;

        return $this;
    }

    /**
     * Gets activate_successful
     * @return \backend\modules\voximplant\models\ActivateSuccessfulCallback
     */
    public function getActivateSuccessful()
    {
        return $this->container['activate_successful'];
    }

    /**
     * Sets activate_successful
     * @param \backend\modules\voximplant\models\ActivateSuccessfulCallback $activate_successful
     * @return $this
     */
    public function setActivateSuccessful($activate_successful)
    {
        $this->container['activate_successful'] = $activate_successful;

        return $this;
    }

    /**
     * Gets call_history_report
     * @return \backend\modules\voximplant\models\CallHistoryReportCallback
     */
    public function getCallHistoryReport()
    {
        return $this->container['call_history_report'];
    }

    /**
     * Sets call_history_report
     * @param \backend\modules\voximplant\models\CallHistoryReportCallback $call_history_report
     * @return $this
     */
    public function setCallHistoryReport($call_history_report)
    {
        $this->container['call_history_report'] = $call_history_report;

        return $this;
    }

    /**
     * Gets card_expired
     * @return \backend\modules\voximplant\models\CardExpiredCallback
     */
    public function getCardExpired()
    {
        return $this->container['card_expired'];
    }

    /**
     * Sets card_expired
     * @param \backend\modules\voximplant\models\CardExpiredCallback $card_expired
     * @return $this
     */
    public function setCardExpired($card_expired)
    {
        $this->container['card_expired'] = $card_expired;

        return $this;
    }

    /**
     * Gets card_expires_in_month
     * @return \backend\modules\voximplant\models\CardExpiresInMonthCallback
     */
    public function getCardExpiresInMonth()
    {
        return $this->container['card_expires_in_month'];
    }

    /**
     * Sets card_expires_in_month
     * @param \backend\modules\voximplant\models\CardExpiresInMonthCallback $card_expires_in_month
     * @return $this
     */
    public function setCardExpiresInMonth($card_expires_in_month)
    {
        $this->container['card_expires_in_month'] = $card_expires_in_month;

        return $this;
    }

    /**
     * Gets card_payment
     * @return \backend\modules\voximplant\models\CardPaymentCallback
     */
    public function getCardPayment()
    {
        return $this->container['card_payment'];
    }

    /**
     * Sets card_payment
     * @param \backend\modules\voximplant\models\CardPaymentCallback $card_payment
     * @return $this
     */
    public function setCardPayment($card_payment)
    {
        $this->container['card_payment'] = $card_payment;

        return $this;
    }

    /**
     * Gets card_payment_failed
     * @return \backend\modules\voximplant\models\CardPaymentFailedCallback
     */
    public function getCardPaymentFailed()
    {
        return $this->container['card_payment_failed'];
    }

    /**
     * Sets card_payment_failed
     * @param \backend\modules\voximplant\models\CardPaymentFailedCallback $card_payment_failed
     * @return $this
     */
    public function setCardPaymentFailed($card_payment_failed)
    {
        $this->container['card_payment_failed'] = $card_payment_failed;

        return $this;
    }

    /**
     * Gets js_fail
     * @return \backend\modules\voximplant\models\JSFailCallback
     */
    public function getJsFail()
    {
        return $this->container['js_fail'];
    }

    /**
     * Sets js_fail
     * @param \backend\modules\voximplant\models\JSFailCallback $js_fail
     * @return $this
     */
    public function setJsFail($js_fail)
    {
        $this->container['js_fail'] = $js_fail;

        return $this;
    }

    /**
     * Gets min_balance
     * @return \backend\modules\voximplant\models\MinBalanceCallback
     */
    public function getMinBalance()
    {
        return $this->container['min_balance'];
    }

    /**
     * Sets min_balance
     * @param \backend\modules\voximplant\models\MinBalanceCallback $min_balance
     * @return $this
     */
    public function setMinBalance($min_balance)
    {
        $this->container['min_balance'] = $min_balance;

        return $this;
    }

    /**
     * Gets regulation_address_verified
     * @return \backend\modules\voximplant\models\RegulationAddressVerifiedCallback
     */
    public function getRegulationAddressVerified()
    {
        return $this->container['regulation_address_verified'];
    }

    /**
     * Sets regulation_address_verified
     * @param \backend\modules\voximplant\models\RegulationAddressVerifiedCallback $regulation_address_verified
     * @return $this
     */
    public function setRegulationAddressVerified($regulation_address_verified)
    {
        $this->container['regulation_address_verified'] = $regulation_address_verified;

        return $this;
    }

    /**
     * Gets renewed_subscriptions
     * @return \backend\modules\voximplant\models\RenewedSubscriptionsCallback
     */
    public function getRenewedSubscriptions()
    {
        return $this->container['renewed_subscriptions'];
    }

    /**
     * Sets renewed_subscriptions
     * @param \backend\modules\voximplant\models\RenewedSubscriptionsCallback $renewed_subscriptions
     * @return $this
     */
    public function setRenewedSubscriptions($renewed_subscriptions)
    {
        $this->container['renewed_subscriptions'] = $renewed_subscriptions;

        return $this;
    }

    /**
     * Gets reset_account_password_request
     * @return \backend\modules\voximplant\models\ResetAccountPasswordRequestCallback
     */
    public function getResetAccountPasswordRequest()
    {
        return $this->container['reset_account_password_request'];
    }

    /**
     * Sets reset_account_password_request
     * @param \backend\modules\voximplant\models\ResetAccountPasswordRequestCallback $reset_account_password_request
     * @return $this
     */
    public function setResetAccountPasswordRequest($reset_account_password_request)
    {
        $this->container['reset_account_password_request'] = $reset_account_password_request;

        return $this;
    }

    /**
     * Gets sip_registration_fail
     * @return \backend\modules\voximplant\models\SIPRegistrationFailCallback
     */
    public function getSipRegistrationFail()
    {
        return $this->container['sip_registration_fail'];
    }

    /**
     * Sets sip_registration_fail
     * @param \backend\modules\voximplant\models\SIPRegistrationFailCallback $sip_registration_fail
     * @return $this
     */
    public function setSipRegistrationFail($sip_registration_fail)
    {
        $this->container['sip_registration_fail'] = $sip_registration_fail;

        return $this;
    }

    /**
     * Gets stagnant_account
     * @return \backend\modules\voximplant\models\StagnantAccountCallback
     */
    public function getStagnantAccount()
    {
        return $this->container['stagnant_account'];
    }

    /**
     * Sets stagnant_account
     * @param \backend\modules\voximplant\models\StagnantAccountCallback $stagnant_account
     * @return $this
     */
    public function setStagnantAccount($stagnant_account)
    {
        $this->container['stagnant_account'] = $stagnant_account;

        return $this;
    }

    /**
     * Gets subscription_is_frozen
     * @return \backend\modules\voximplant\models\SubscriptionIsFrozenCallback
     */
    public function getSubscriptionIsFrozen()
    {
        return $this->container['subscription_is_frozen'];
    }

    /**
     * Sets subscription_is_frozen
     * @param \backend\modules\voximplant\models\SubscriptionIsFrozenCallback $subscription_is_frozen
     * @return $this
     */
    public function setSubscriptionIsFrozen($subscription_is_frozen)
    {
        $this->container['subscription_is_frozen'] = $subscription_is_frozen;

        return $this;
    }

    /**
     * Gets subscription_is_detached
     * @return \backend\modules\voximplant\models\SubscriptionIsDetachedCallback
     */
    public function getSubscriptionIsDetached()
    {
        return $this->container['subscription_is_detached'];
    }

    /**
     * Sets subscription_is_detached
     * @param \backend\modules\voximplant\models\SubscriptionIsDetachedCallback $subscription_is_detached
     * @return $this
     */
    public function setSubscriptionIsDetached($subscription_is_detached)
    {
        $this->container['subscription_is_detached'] = $subscription_is_detached;

        return $this;
    }

    /**
     * Gets transaction_history_report
     * @return \backend\modules\voximplant\models\TransactionHistoryReportCallback
     */
    public function getTransactionHistoryReport()
    {
        return $this->container['transaction_history_report'];
    }

    /**
     * Sets transaction_history_report
     * @param \backend\modules\voximplant\models\TransactionHistoryReportCallback $transaction_history_report
     * @return $this
     */
    public function setTransactionHistoryReport($transaction_history_report)
    {
        $this->container['transaction_history_report'] = $transaction_history_report;

        return $this;
    }

    /**
     * Gets uncharged_tariff
     * @return \backend\modules\voximplant\models\UnchargedTariffCallback
     */
    public function getUnchargedTariff()
    {
        return $this->container['uncharged_tariff'];
    }

    /**
     * Sets uncharged_tariff
     * @param \backend\modules\voximplant\models\UnchargedTariffCallback $uncharged_tariff
     * @return $this
     */
    public function setUnchargedTariff($uncharged_tariff)
    {
        $this->container['uncharged_tariff'] = $uncharged_tariff;

        return $this;
    }

    /**
     * Gets unverified_subscription_detached
     * @return \backend\modules\voximplant\models\UnverifiedSubscriptionDetachedCallback
     */
    public function getUnverifiedSubscriptionDetached()
    {
        return $this->container['unverified_subscription_detached'];
    }

    /**
     * Sets unverified_subscription_detached
     * @param \backend\modules\voximplant\models\UnverifiedSubscriptionDetachedCallback $unverified_subscription_detached
     * @return $this
     */
    public function setUnverifiedSubscriptionDetached($unverified_subscription_detached)
    {
        $this->container['unverified_subscription_detached'] = $unverified_subscription_detached;

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


