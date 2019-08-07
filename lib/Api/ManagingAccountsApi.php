<?php


namespace backend\modules\voximplant\lib\Api;

use backend\modules\voximplant\lib\ApiClient;
use backend\modules\voximplant\lib\ApiException;


class ManagingAccountsApi
{

    /**
     * API Client
     *
     * @var ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param ApiClient|null $apiClient The api client to use
     */
    public function __construct(ApiClient $apiClient = null)
    {
        if ($apiClient == null) {
            $apiClient = new ApiClient();
            $apiClient->getConfig()->setHost('https://api.voximplant.com/platform_api/');
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param ApiClient $apiClient set the API client
     *
     * @return ManagingAccountsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }


    public function addAccount($new_user_name, $new_user_email, $new_user_password, $new_user_active = null)
    {
        list($response) = $this->addAccountWithHttpInfo($new_user_name, $new_user_email, $new_user_password, $new_user_active);
        return $response;
    }

    public function addAccountWithHttpInfo($new_user_name, $new_user_email, $new_user_password, $new_user_active = null)
    {
        // verify the required parameter 'new_admin_user_name' is set
        if ($new_user_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new__user_name when calling addUser');
        }
        // verify the required parameter 'admin_user_display_name' is set
        if ($new_user_email === null) {
            throw new \InvalidArgumentException('Missing the required parameter $admin__display_name when calling addUser');
        }
        // verify the required parameter 'new_admin_user_password' is set
        if ($new_user_password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $new__user_password when calling addUser');
        }
        // parse inputs
        $resourcePath = "/AddAccount";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($new_user_name !== null) {
            $queryParams['account_name'] = $new_user_name;
        }
        // form params
        if ($new_user_email !== null) {
            $queryParams['account_email'] = $new_user_email;
        }
        // form params
        if ($new_user_password !== null) {
            $queryParams['account_password'] = $new_user_password;
        }
        // form params
        if ($new_user_active !== null) {
            $queryParams['active'] = $new_user_active;
        }
        // form params
        $parent_account_api_key = $this->apiClient->getApiKeyWithPrefix('api_key');
        if ($parent_account_api_key !== null) {
            $queryParams['parent_account_api_key'] = $parent_account_api_key;
        }
        // form params
        $parent_account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if ($parent_account_id !== null) {
            $queryParams['parent_account_id'] = $parent_account_id;
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\AddAccountApiResponse',
                '/AddAccount'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AddAccountApiResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AddAccountApiResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }



    /**
     * Operation chargeAccount
     *
     * 
     *
     * @param string $phone_id The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. You should specify the phones having the auto_charge&#x3D;false. (optional)
     * @param string $phone_number Can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. The phone number list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. You should specify the phones having the auto_charge&#x3D;false. (optional)
     * @return \backend\modules\voximplant\models\ChargeAccountAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function chargeAccount($phone_id = null, $phone_number = null)
    {
        list($response) = $this->chargeAccountWithHttpInfo($phone_id, $phone_number);
        return $response;
    }

    /**
     * Operation chargeAccountWithHttpInfo
     *
     * 
     *
     * @param string $phone_id The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. You should specify the phones having the auto_charge&#x3D;false. (optional)
     * @param string $phone_number Can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. The phone number list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. You should specify the phones having the auto_charge&#x3D;false. (optional)
     * @return array of \backend\modules\voximplant\models\ChargeAccountAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function chargeAccountWithHttpInfo($phone_id = null, $phone_number = null)
    {
        // parse inputs
        $resourcePath = "/ChargeAccount";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($phone_id !== null) {
            $formParams['phone_id'] = $this->apiClient->getSerializer()->toFormValue($phone_id);
        }
        // form params
        if ($phone_number !== null) {
            $formParams['phone_number'] = $this->apiClient->getSerializer()->toFormValue($phone_number);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        // this endpoint requires API key authentication
        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\ChargeAccountAPIResponse',
                '/ChargeAccount'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\ChargeAccountAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\ChargeAccountAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation confirmAccountPasswordChange
     *
     * 
     *
     * @param string $code The verification code (auth token). (required)
     * @param string $new_account_password The password length must be at least 6 symbols. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function confirmAccountPasswordChange($code, $new_account_password = null)
    {
        list($response) = $this->confirmAccountPasswordChangeWithHttpInfo($code, $new_account_password);
        return $response;
    }

    /**
     * Operation confirmAccountPasswordChangeWithHttpInfo
     *
     * 
     *
     * @param string $code The verification code (auth token). (required)
     * @param string $new_account_password The password length must be at least 6 symbols. (optional)
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function confirmAccountPasswordChangeWithHttpInfo($code, $new_account_password = null)
    {
        // verify the required parameter 'code' is set
        if ($code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $code when calling confirmAccountPasswordChange');
        }
        // parse inputs
        $resourcePath = "/ConfirmAccountPasswordChange";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($new_account_password !== null) {
            $formParams['new_account_password'] = $this->apiClient->getSerializer()->toFormValue($new_account_password);
        }
        // form params
        if ($code !== null) {
            $formParams['code'] = $this->apiClient->getSerializer()->toFormValue($code);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/ConfirmAccountPasswordChange'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountDocuments
     *
     * 
     *
     * @param bool $with_details Set true to view the uploaded document statuses. (The flag is ignored with the child_account_id&#x3D;all) (optional)
     * @param string $verification_name The required account verification name to filter. (optional)
     * @param string $verification_status The account verification status list separated by the &#x60;;&#x60; symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED (optional)
     * @param string $from_unverified_hold_until Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD (optional)
     * @param string $to_unverified_hold_until Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_verifications_only Set true to get the children account verifications only. (optional)
     * @return \backend\modules\voximplant\models\GetAccountDocumentsAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getAccountDocuments($with_details = null, $verification_name = null, $verification_status = null, $from_unverified_hold_until = null, $to_unverified_hold_until = null, $child_account_id = null, $children_verifications_only = null)
    {
        list($response) = $this->getAccountDocumentsWithHttpInfo($with_details, $verification_name, $verification_status, $from_unverified_hold_until, $to_unverified_hold_until, $child_account_id, $children_verifications_only);
        return $response;
    }

    /**
     * Operation getAccountDocumentsWithHttpInfo
     *
     * 
     *
     * @param bool $with_details Set true to view the uploaded document statuses. (The flag is ignored with the child_account_id&#x3D;all) (optional)
     * @param string $verification_name The required account verification name to filter. (optional)
     * @param string $verification_status The account verification status list separated by the &#x60;;&#x60; symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED (optional)
     * @param string $from_unverified_hold_until Unverified subscriptions hold until the date (from ...) in format: YYYY-MM-DD (optional)
     * @param string $to_unverified_hold_until Unverified subscriptions hold until the date (... to) in format: YYYY-MM-DD (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_verifications_only Set true to get the children account verifications only. (optional)
     * @return array of \backend\modules\voximplant\models\GetAccountDocumentsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getAccountDocumentsWithHttpInfo($with_details = null, $verification_name = null, $verification_status = null, $from_unverified_hold_until = null, $to_unverified_hold_until = null, $child_account_id = null, $children_verifications_only = null)
    {
        // parse inputs
        $resourcePath = "/GetAccountDocuments";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($with_details !== null) {
            $formParams['with_details'] = $this->apiClient->getSerializer()->toFormValue($with_details);
        }
        // form params
        if ($verification_name !== null) {
            $formParams['verification_name'] = $this->apiClient->getSerializer()->toFormValue($verification_name);
        }
        // form params
        if ($verification_status !== null) {
            $formParams['verification_status'] = $this->apiClient->getSerializer()->toFormValue($verification_status);
        }
        // form params
        if ($from_unverified_hold_until !== null) {
            $formParams['from_unverified_hold_until'] = $this->apiClient->getSerializer()->toFormValue($from_unverified_hold_until);
        }
        // form params
        if ($to_unverified_hold_until !== null) {
            $formParams['to_unverified_hold_until'] = $this->apiClient->getSerializer()->toFormValue($to_unverified_hold_until);
        }
        // form params
        if ($child_account_id !== null) {
            $formParams['child_account_id'] = $this->apiClient->getSerializer()->toFormValue($child_account_id);
        }
        // form params
        if ($children_verifications_only !== null) {
            $formParams['children_verifications_only'] = $this->apiClient->getSerializer()->toFormValue($children_verifications_only);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\GetAccountDocumentsAPIResponse',
                '/GetAccountDocuments'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetAccountDocumentsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetAccountDocumentsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getAccountInfo
     *
     * 
     *
     * @param bool $return_live_balance Set true to get the account&#x60;s live balance. (optional)
     * @return \backend\modules\voximplant\models\GetAccountInfoAPIResponse
     * @throws  ApiException on non-2xx response
     */
    public function getAccountInfo($return_live_balance = null)
    {
        list($response) = $this->getAccountInfoWithHttpInfo($return_live_balance);
        return $response;
    }

    /**
     * Operation getAccountInfoWithHttpInfo
     *
     * 
     *
     * @param bool $return_live_balance Set true to get the account&#x60;s live balance. (optional)
     * @return array of \backend\modules\voximplant\models\GetAccountInfoAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getAccountInfoWithHttpInfo($return_live_balance = null)
    {
        // parse inputs
        $resourcePath = "/GetAccountInfo";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($return_live_balance !== null) {
            $formParams['return_live_balance'] = $this->apiClient->getSerializer()->toFormValue($return_live_balance);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\GetAccountInfoAPIResponse',
                '/GetAccountInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetAccountInfoAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetAccountInfoAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCurrencyRate
     *
     * 
     *
     * @param string $currency The currency code list separated by the &#x60;;&#x60; symbol. Examples: RUR, EUR, USD (required)
     * @param string $date The date, format: YYYY-MM-DD (optional)
     * @return \backend\modules\voximplant\models\GetCurrencyRateAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getCurrencyRate($currency, $date = null)
    {
        list($response) = $this->getCurrencyRateWithHttpInfo($currency, $date);
        return $response;
    }

    /**
     * Operation getCurrencyRateWithHttpInfo
     *
     * 
     *
     * @param string $currency The currency code list separated by the &#x60;;&#x60; symbol. Examples: RUR, EUR, USD (required)
     * @param string $date The date, format: YYYY-MM-DD (optional)
     * @return array of \backend\modules\voximplant\models\GetCurrencyRateAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getCurrencyRateWithHttpInfo($currency, $date = null)
    {
        // verify the required parameter 'currency' is set
        if ($currency === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency when calling getCurrencyRate');
        }
        // parse inputs
        $resourcePath = "/GetCurrencyRate";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($currency !== null) {
            $formParams['currency'] = $this->apiClient->getSerializer()->toFormValue($currency);
        }
        // form params
        if ($date !== null) {
            $formParams['date'] = $this->apiClient->getSerializer()->toFormValue($date);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\GetCurrencyRateAPIResponse',
                '/GetCurrencyRate'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetCurrencyRateAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetCurrencyRateAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getMoneyAmountToCharge
     *
     * 
     *
     * @param string $currency The currency name. Examples: USD, RUR, EUR. (optional)
     * @param string $charge_date The next charge date, format: YYYY-MM-DD (optional)
     * @return \backend\modules\voximplant\models\GetMoneyAmountToChargeAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getMoneyAmountToCharge($currency = null, $charge_date = null)
    {
        list($response) = $this->getMoneyAmountToChargeWithHttpInfo($currency, $charge_date);
        return $response;
    }

    /**
     * Operation getMoneyAmountToChargeWithHttpInfo
     *
     * 
     *
     * @param string $currency The currency name. Examples: USD, RUR, EUR. (optional)
     * @param string $charge_date The next charge date, format: YYYY-MM-DD (optional)
     * @return array of \backend\modules\voximplant\models\GetMoneyAmountToChargeAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getMoneyAmountToChargeWithHttpInfo($currency = null, $charge_date = null)
    {
        // parse inputs
        $resourcePath = "/GetMoneyAmountToCharge";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($currency !== null) {
            $formParams['currency'] = $this->apiClient->getSerializer()->toFormValue($currency);
        }
        // form params
        if ($charge_date !== null) {
            $formParams['charge_date'] = $this->apiClient->getSerializer()->toFormValue($charge_date);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\GetMoneyAmountToChargeAPIResponse',
                '/GetMoneyAmountToCharge'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetMoneyAmountToChargeAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetMoneyAmountToChargeAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation transferMoneyToChildAccount
     *
     *
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (required)
     * @param float $amount The money amount, $. The absolute amount value must be equal or greater than 0.01 (required)
     * @param string $currency The amount currency. Examples: RUR, EUR, USD. (required)
     * @param bool $strict_mode Returns error if strict_mode is true and an user or the account hasn&#x60;t enough money. (optional)
     * @param string $user_transaction_description The user transaction description. (optional)
     * @param string $account_transaction_description The account transaction description. The following macro available: ${user_id}, ${user_name} (optional)
     * @return \backend\modules\voximplant\models\TransferMoneyToChildAccountResponse
     * @throws ApiException on non-2xx response
     */
    public function transferMoneyToChildAccount($child_account_id, $amount, $currency, $strict_mode = null, $child_transaction_description = null, $parent_transaction_description = null,$payment_reference = null,$check_duplicate_reference_from = null)
    {
        list($response) = $this->transferMoneyToChildAccountWithHttpInfo($child_account_id, $amount, $currency, $strict_mode = null, $child_transaction_description = null, $parent_transaction_description = null,$payment_reference = null,$check_duplicate_reference_from = null);
        return $response;
    }
    /**
     * Operation transferMoneyToUserWithHttpInfo
     *
     *
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (required)
     * @param float $amount The money amount, $. The absolute amount value must be equal or greater than 0.01 (required)
     * @param string $currency The amount currency. Examples: RUR, EUR, USD. (required)
     * @param bool $strict_mode Returns error if strict_mode is true and an user or the account hasn&#x60;t enough money. (optional)
     * @param string $user_transaction_description The user transaction description. (optional)
     * @param string $account_transaction_description The account transaction description. The following macro available: ${user_id}, ${user_name} (optional)
     * @return array of \backend\modules\voximplant\models\TransferMoneyToChildAccountResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */

    public function transferMoneyToChildAccountWithHttpInfo($child_account_id, $amount, $currency, $strict_mode = null, $child_transaction_description = null, $parent_transaction_description = null,$payment_reference = null,$check_duplicate_reference_from = null)
    {
        // verify the required parameter 'user_id' is set
        if ($child_account_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $child_account_id when calling transferMoneyToUser');
        }
        // verify the required parameter 'amount' is set
        if ($amount === null) {
            throw new \InvalidArgumentException('Missing the required parameter $amount when calling transferMoneyToUser');
        }
        // verify the required parameter 'currency' is set
        if ($currency === null) {
            throw new \InvalidArgumentException('Missing the required parameter $currency when calling transferMoneyToUser');
        }
        // parse inputs
        $resourcePath = "/TransferMoneyToChildAccount";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($child_account_id !== null) {
            $formParams['child_account_id'] = $this->apiClient->getSerializer()->toFormValue($child_account_id);
        }
        // form params
        if ($amount !== null) {
            $formParams['amount'] = $this->apiClient->getSerializer()->toFormValue($amount);
        }
        // form params
        if ($currency !== null) {
            $formParams['currency'] = $this->apiClient->getSerializer()->toFormValue($currency);
        }
        // form params
        if ($strict_mode !== null) {
            $formParams['strict_mode'] = $this->apiClient->getSerializer()->toFormValue($strict_mode);
        }
        // form params
        if ($child_transaction_description !== null) {
            $formParams['child_transaction_description'] = $this->apiClient->getSerializer()->toFormValue($child_transaction_description);
        }
        // form params
        if ($parent_transaction_description !== null) {
            $formParams['parent_transaction_description'] = $this->apiClient->getSerializer()->toFormValue($parent_transaction_description);
        }
        // form params
        if ($payment_reference !== null) {
            $formParams['payment_reference'] = $this->apiClient->getSerializer()->toFormValue($payment_reference);
        }

        // form params
        if ($check_duplicate_reference_from !== null) {
            $formParams['check_duplicate_reference_from'] = $this->apiClient->getSerializer()->toFormValue($check_duplicate_reference_from);
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }


        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                'backend\modules\voximplant\models\TransferMoneyToChildAccountResponse',
                '/TransferMoneyToChildAccount'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\TransferMoneyToChildAccountResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\TransferMoneyToChildAccountResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }



    /**
     * Operation getResourcePrice
     *
     * 
     *
     * @param string $resource_type The resource type list separated by the &#x60;;&#x60; symbol. The following values are possible: ASR, AUDIORECORD, PSTN_IN_GB, PSTN_IN_GEOGRAPHIC, PSTN_IN_RU, PSTN_IN_RU_TOLLFREE, PSTN_IN_US, PSTN_IN_US_TF, PSTNOUT, SIPOUT, SIPOUTVIDEO, VOIPIN, VOIPOUT, VOIPOUTVIDEO (optional)
     * @param string $price_group_id The price group ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $price_group_name The price group name template to filter. (optional)
     * @param string $resource_param The resource parameter list separated by the &#x60;;&#x60; symbol. Example: a phone number list. (optional)
     * @return \backend\modules\voximplant\models\GetResourcePriceAPIResponse
     * @throws  ApiException on non-2xx response
     */
    public function getResourcePrice($resource_type = null, $price_group_id = null, $price_group_name = null, $resource_param = null)
    {
        list($response) = $this->getResourcePriceWithHttpInfo($resource_type, $price_group_id, $price_group_name, $resource_param);
        return $response;
    }

    /**
     * Operation getResourcePriceWithHttpInfo
     *
     * 
     *
     * @param string $resource_type The resource type list separated by the &#x60;;&#x60; symbol. The following values are possible: ASR, AUDIORECORD, PSTN_IN_GB, PSTN_IN_GEOGRAPHIC, PSTN_IN_RU, PSTN_IN_RU_TOLLFREE, PSTN_IN_US, PSTN_IN_US_TF, PSTNOUT, SIPOUT, SIPOUTVIDEO, VOIPIN, VOIPOUT, VOIPOUTVIDEO (optional)
     * @param string $price_group_id The price group ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $price_group_name The price group name template to filter. (optional)
     * @param string $resource_param The resource parameter list separated by the &#x60;;&#x60; symbol. Example: a phone number list. (optional)
     * @return array of \backend\modules\voximplant\models\GetResourcePriceAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getResourcePriceWithHttpInfo($resource_type = null, $price_group_id = null, $price_group_name = null, $resource_param = null)
    {
        // parse inputs
        $resourcePath = "/GetResourcePrice";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($resource_type !== null) {
            $formParams['resource_type'] = $this->apiClient->getSerializer()->toFormValue($resource_type);
        }
        // form params
        if ($price_group_id !== null) {
            $formParams['price_group_id'] = $this->apiClient->getSerializer()->toFormValue($price_group_id);
        }
        // form params
        if ($price_group_name !== null) {
            $formParams['price_group_name'] = $this->apiClient->getSerializer()->toFormValue($price_group_name);
        }
        // form params
        if ($resource_param !== null) {
            $formParams['resource_param'] = $this->apiClient->getSerializer()->toFormValue($resource_param);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\GetResourcePriceAPIResponse',
                '/GetResourcePrice'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetResourcePriceAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetResourcePriceAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getSubscriptionPrice
     *
     * 
     *
     * @param string $subscription_template_id The subscription template ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $subscription_template_type The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION. (optional)
     * @param string $subscription_template_name The subscription template name  (example: SIP registration, Phone GB, Phone RU 495, ...). (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetSubscriptionPriceAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getSubscriptionPrice($subscription_template_id = null, $subscription_template_type = null, $subscription_template_name = null, $count = null, $offset = null)
    {
        list($response) = $this->getSubscriptionPriceWithHttpInfo($subscription_template_id, $subscription_template_type, $subscription_template_name, $count, $offset);
        return $response;
    }

    /**
     * Operation getSubscriptionPriceWithHttpInfo
     *
     * 
     *
     * @param string $subscription_template_id The subscription template ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $subscription_template_type The subscription template type. The following values are possible: PHONE_NUM, SIP_REGISTRATION. (optional)
     * @param string $subscription_template_name The subscription template name  (example: SIP registration, Phone GB, Phone RU 495, ...). (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return array of \backend\modules\voximplant\models\GetSubscriptionPriceAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getSubscriptionPriceWithHttpInfo($subscription_template_id = null, $subscription_template_type = null, $subscription_template_name = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetSubscriptionPrice";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($subscription_template_id !== null) {
            $formParams['subscription_template_id'] = $this->apiClient->getSerializer()->toFormValue($subscription_template_id);
        }
        // form params
        if ($subscription_template_type !== null) {
            $formParams['subscription_template_type'] = $this->apiClient->getSerializer()->toFormValue($subscription_template_type);
        }
        // form params
        if ($subscription_template_name !== null) {
            $formParams['subscription_template_name'] = $this->apiClient->getSerializer()->toFormValue($subscription_template_name);
        }
        // form params
        if ($count !== null) {
            $formParams['count'] = $this->apiClient->getSerializer()->toFormValue($count);
        }
        // form params
        if ($offset !== null) {
            $formParams['offset'] = $this->apiClient->getSerializer()->toFormValue($offset);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }

        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\GetSubscriptionPriceAPIResponse',
                '/GetSubscriptionPrice'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetSubscriptionPriceAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetSubscriptionPriceAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation sendAccountPasswordChangeRequest
     *
     * 
     *
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws  ApiException on non-2xx response
     */
    public function sendAccountPasswordChangeRequest()
    {
        list($response) = $this->sendAccountPasswordChangeRequestWithHttpInfo();
        return $response;
    }

    /**
     * Operation sendAccountPasswordChangeRequestWithHttpInfo
     *
     * 
     *
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function sendAccountPasswordChangeRequestWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/SendAccountPasswordChangeRequest";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/SendAccountPasswordChangeRequest'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setAccountDocument
     *
     * 
     *
     * @param string $account_document The document data. You should post the data with the &#x60;application/octet-stream&#x60; or &#x60;multipart/form-data&#x60; content type! (required)
     * @param string $verification_name The account verification name. (required)
     * @param bool $is_individual Is individual, isn&#x60;t legal entity? (optional)
     * @param string $individual_full_name The full name of the individual. (optional)
     * @param string $individual_birth_date The birth date in format: YYYY-MM-DD (optional)
     * @param string $individual_passport_series The passport series of the individual. (optional)
     * @param string $individual_passport_number The passport number of the individual. (optional)
     * @param string $individual_passport_issue_date The passport issue date in format: YYYY-MM-DD (optional)
     * @param string $individual_passport_issued_by The passport issued by. (optional)
     * @param string $individual_registration_address The registration address of the individual. (optional)
     * @param string $legal_entry_full_name The full name of the legal entry. (optional)
     * @param string $legal_entry_phone The phone of the legal entry. (optional)
     * @param string $legal_entry_address The legal address of the legal entry. (optional)
     * @param string $legal_entry_actual_address The address of the legal entry. (optional)
     * @param string $ogrn The OGRN of the legal entry. (optional)
     * @param string $inn The INN of the legal entry. (optional)
     * @return \backend\modules\voximplant\models\SetAccountDocumentAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function setAccountDocument($account_document, $verification_name, $is_individual = null, $individual_full_name = null, $individual_birth_date = null, $individual_passport_series = null, $individual_passport_number = null, $individual_passport_issue_date = null, $individual_passport_issued_by = null, $individual_registration_address = null, $legal_entry_full_name = null, $legal_entry_phone = null, $legal_entry_address = null, $legal_entry_actual_address = null, $ogrn = null, $inn = null)
    {
        list($response) = $this->setAccountDocumentWithHttpInfo($account_document, $verification_name, $is_individual, $individual_full_name, $individual_birth_date, $individual_passport_series, $individual_passport_number, $individual_passport_issue_date, $individual_passport_issued_by, $individual_registration_address, $legal_entry_full_name, $legal_entry_phone, $legal_entry_address, $legal_entry_actual_address, $ogrn, $inn);
        return $response;
    }

    /**
     * Operation setAccountDocumentWithHttpInfo
     *
     * 
     *
     * @param string $account_document The document data. You should post the data with the &#x60;application/octet-stream&#x60; or &#x60;multipart/form-data&#x60; content type! (required)
     * @param string $verification_name The account verification name. (required)
     * @param bool $is_individual Is individual, isn&#x60;t legal entity? (optional)
     * @param string $individual_full_name The full name of the individual. (optional)
     * @param string $individual_birth_date The birth date in format: YYYY-MM-DD (optional)
     * @param string $individual_passport_series The passport series of the individual. (optional)
     * @param string $individual_passport_number The passport number of the individual. (optional)
     * @param string $individual_passport_issue_date The passport issue date in format: YYYY-MM-DD (optional)
     * @param string $individual_passport_issued_by The passport issued by. (optional)
     * @param string $individual_registration_address The registration address of the individual. (optional)
     * @param string $legal_entry_full_name The full name of the legal entry. (optional)
     * @param string $legal_entry_phone The phone of the legal entry. (optional)
     * @param string $legal_entry_address The legal address of the legal entry. (optional)
     * @param string $legal_entry_actual_address The address of the legal entry. (optional)
     * @param string $ogrn The OGRN of the legal entry. (optional)
     * @param string $inn The INN of the legal entry. (optional)
     * @return array of \backend\modules\voximplant\models\SetAccountDocumentAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setAccountDocumentWithHttpInfo($account_document, $verification_name, $is_individual = null, $individual_full_name = null, $individual_birth_date = null, $individual_passport_series = null, $individual_passport_number = null, $individual_passport_issue_date = null, $individual_passport_issued_by = null, $individual_registration_address = null, $legal_entry_full_name = null, $legal_entry_phone = null, $legal_entry_address = null, $legal_entry_actual_address = null, $ogrn = null, $inn = null)
    {
        // verify the required parameter 'account_document' is set
        if ($account_document === null) {
            throw new \InvalidArgumentException('Missing the required parameter $account_document when calling setAccountDocument');
        }
        // verify the required parameter 'verification_name' is set
        if ($verification_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $verification_name when calling setAccountDocument');
        }
        // parse inputs
        $resourcePath = "/SetAccountDocument";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($is_individual !== null) {
            $formParams['is_individual'] = $this->apiClient->getSerializer()->toFormValue($is_individual);
        }
        // form params
        if ($account_document !== null) {
            $formParams['account_document'] = $this->apiClient->getSerializer()->toFormValue($account_document);
        }
        // form params
        if ($verification_name !== null) {
            $formParams['verification_name'] = $this->apiClient->getSerializer()->toFormValue($verification_name);
        }
        // form params
        if ($individual_full_name !== null) {
            $formParams['individual_full_name'] = $this->apiClient->getSerializer()->toFormValue($individual_full_name);
        }
        // form params
        if ($individual_birth_date !== null) {
            $formParams['individual_birth_date'] = $this->apiClient->getSerializer()->toFormValue($individual_birth_date);
        }
        // form params
        if ($individual_passport_series !== null) {
            $formParams['individual_passport_series'] = $this->apiClient->getSerializer()->toFormValue($individual_passport_series);
        }
        // form params
        if ($individual_passport_number !== null) {
            $formParams['individual_passport_number'] = $this->apiClient->getSerializer()->toFormValue($individual_passport_number);
        }
        // form params
        if ($individual_passport_issue_date !== null) {
            $formParams['individual_passport_issue_date'] = $this->apiClient->getSerializer()->toFormValue($individual_passport_issue_date);
        }
        // form params
        if ($individual_passport_issued_by !== null) {
            $formParams['individual_passport_issued_by'] = $this->apiClient->getSerializer()->toFormValue($individual_passport_issued_by);
        }
        // form params
        if ($individual_registration_address !== null) {
            $formParams['individual_registration_address'] = $this->apiClient->getSerializer()->toFormValue($individual_registration_address);
        }
        // form params
        if ($legal_entry_full_name !== null) {
            $formParams['legal_entry_full_name'] = $this->apiClient->getSerializer()->toFormValue($legal_entry_full_name);
        }
        // form params
        if ($legal_entry_phone !== null) {
            $formParams['legal_entry_phone'] = $this->apiClient->getSerializer()->toFormValue($legal_entry_phone);
        }
        // form params
        if ($legal_entry_address !== null) {
            $formParams['legal_entry_address'] = $this->apiClient->getSerializer()->toFormValue($legal_entry_address);
        }
        // form params
        if ($legal_entry_actual_address !== null) {
            $formParams['legal_entry_actual_address'] = $this->apiClient->getSerializer()->toFormValue($legal_entry_actual_address);
        }
        // form params
        if ($ogrn !== null) {
            $formParams['ogrn'] = $this->apiClient->getSerializer()->toFormValue($ogrn);
        }
        // form params
        if ($inn !== null) {
            $formParams['inn'] = $this->apiClient->getSerializer()->toFormValue($inn);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\SetAccountDocumentAPIResponse',
                '/SetAccountDocument'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\SetAccountDocumentAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\SetAccountDocumentAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setAccountInfo
     *
     * 
     *
     * @param string $new_account_email Description in progress... (optional)
     * @param string $new_account_password The password length must be at least 6 symbols. (optional)
     * @param string $language_code The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Byelorussian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu) (optional)
     * @param string $location The account location (timezone). Examples: America/Los_Angeles, GMT-8, GMT-08:00, GMT+10 (optional)
     * @param string $account_first_name The first name. (optional)
     * @param string $account_last_name The last name. (optional)
     * @param float $min_balance_to_notify The min balance value to notify by email or SMS. (optional)
     * @param bool $account_notifications Are the VoxImplant notifications required? (optional)
     * @param bool $tariff_changing_notifications Set to true to receive the emails about the VoxImplant tariff changing. (optional)
     * @param bool $news_notifications Set to true to receive the emails about the VoxImplant news. (optional)
     * @param bool $send_js_error Set to true to receive the emails about a JS scenario error. (optional)
     * @param string $billing_address_name The company or businessman name. (optional)
     * @param string $billing_address_country_code The billing address country code (2 symbols, ISO 3166-1 alpha-2). The following values are available: AF (Afghanistan), AL (Albania), DZ (Algeria), AS (American Samoa), AD (Andorra), AO (Angola), AI (Anguilla), AQ (Antarctica), AG (Antigua and Barbuda), AR (Argentina), AM (Armenia), AW (Aruba), AU (Australia), AT (Austria), AZ (Azerbaijan), BH (Bahrain), BD (Bangladesh), BB (Barbados), BY (Belarus), BE (Belgium), BZ (Belize), BJ (Benin), BM (Bermuda), BT (Bhutan), BO (Bolivia), BA (Bosnia and Herzegovina), BW (Botswana), BV (Bouvet Island), BR (Brazil), IO (British Indian Ocean Territory), BN (Brunei), BG (Bulgaria), BF (Burkina Faso), BI (Burundi), KH (Cambodia), CM (Cameroon), CA (Canada), CV (Cape Verde), KY (Cayman Islands), CF (Central African Republic), TD (Chad), CL (Chile), CN (China), CX (Christmas Island), CO (Colombia), KM (Comoros), CG (Congo), CK (Cook Islands), CR (Costa Rica), HR (Croatia), CU (Cuba), CY (Cyprus), CZ (Czech Republic), DK (Denmark), DJ (Djibouti), DM (Dominica), DO (Dominican Republic), EC (Ecuador), EG (Egypt), SV (El Salvador), GQ (Equatorial Guinea), ER (Eritrea), EE (Estonia), ET (Ethiopia), FO (Faroe Islands), FJ (Fiji Islands), FI (Finland), FR (France), GF (French Guiana), PF (French Polynesia), TF (French Southern and Antarctic Lands), GA (Gabon), GE (Georgia), DE (Germany), GH (Ghana), GI (Gibraltar), GR (Greece), GL (Greenland), GD (Grenada), GP (Guadeloupe), GU (Guam), GT (Guatemala), GG (Guernsey), GN (Guinea), GY (Guyana), HT (Haiti), HM (Heard Island and McDonald Islands), HN (Honduras), HU (Hungary), IS (Iceland), IN (India), ID (Indonesia), IR (Iran), IQ (Iraq), IE (Ireland), IL (Israel), IT (Italy), JM (Jamaica), JP (Japan), JE (Jersey), JO (Jordan), KZ (Kazakhstan), KE (Kenya), KI (Kiribati), KR (Korea), KW (Kuwait), KG (Kyrgyzstan), LA (Laos), LV (Latvia), LB (Lebanon), LS (Lesotho), LR (Liberia), LY (Libya), LI (Liechtenstein), LT (Lithuania), LU (Luxembourg), MG (Madagascar), MW (Malawi), MY (Malaysia), MV (Maldives), ML (Mali), MT (Malta), MH (Marshall Islands), MQ (Martinique), MR (Mauritania), MU (Mauritius), YT (Mayotte), MX (Mexico), FM (Micronesia), MD (Moldova), MC (Monaco), MN (Mongolia), ME (Montenegro), MS (Montserrat), MA (Morocco), MZ (Mozambique), MM (Myanmar), NA (Namibia), NR (Nauru), NP (Nepal), NL (Netherlands), AN (Netherlands Antilles), NC (New Caledonia), NZ (New Zealand), NI (Nicaragua), NE (Niger), NG (Nigeria), NU (Niue), NF (Norfolk Island), KP (North Korea), MP (Northern Mariana Islands), NO (Norway), OM (Oman), PK (Pakistan), PW (Palau), PS (Palestinian Authority), PA (Panama), PG (Papua New Guinea), PY (Paraguay), PE (Peru), PH (Philippines), PN (Pitcairn Islands), PL (Poland), PT (Portugal), PR (Puerto Rico), QA (Qatar), RE (Reunion), RO (Romania), RU (Russia), RW (Rwanda), WS (Samoa), SM (San Marino), SA (Saudi Arabia), SN (Senegal), CS (Serbia), SC (Seychelles), SL (Sierra Leone), SG (Singapore), SK (Slovakia), SI (Slovenia), SB (Solomon Islands), SO (Somalia), ZA (South Africa), GS (South Georgia and the South Sandwich Islands), ES (Spain), LK (Sri Lanka), SD (Sudan), SR (Suriname), SZ (Swaziland), SE (Sweden), CH (Switzerland), SY (Syria), ST (Sao Tome and Principe), TW (Taiwan), TJ (Tajikistan), TZ (Tanzania), TH (Thailand), TG (Togo), TK (Tokelau), TO (Tonga), TT (Trinidad and Tobago), TN (Tunisia), TR (Turkey), TM (Turkmenistan), TC (Turks and Caicos Islands), TV (Tuvalu), UG (Uganda), UA (Ukraine), AE (United Arab Emirates), GB (United Kingdom), US (United States), UY (Uruguay), UZ (Uzbekistan), VU (Vanuatu), VA (Vatican City), VE (Venezuela), VN (Vietnam), VI (Virgin Islands), WF (Wallis and Futuna), EH (Western Sahara), YE (Yemen), ZM (Zambia), ZW (Zimbabwe), AX (Aland Islands) (optional)
     * @param string $billing_address_address The office address. (optional)
     * @param string $billing_address_zip The office ZIP. (optional)
     * @param string $billing_address_phone The office phone number. (optional)
     * @param string $account_custom_data The custom data. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws  ApiException on non-2xx response
     */
    public function setAccountInfo($new_account_email = null, $new_account_password = null, $language_code = null, $location = null, $account_first_name = null, $account_last_name = null, $min_balance_to_notify = null, $account_notifications = null, $tariff_changing_notifications = null, $news_notifications = null, $send_js_error = null, $billing_address_name = null, $billing_address_country_code = null, $billing_address_address = null, $billing_address_zip = null, $billing_address_phone = null, $account_custom_data = null)
    {
        list($response) = $this->setAccountInfoWithHttpInfo($new_account_email, $new_account_password, $language_code, $location, $account_first_name, $account_last_name, $min_balance_to_notify, $account_notifications, $tariff_changing_notifications, $news_notifications, $send_js_error, $billing_address_name, $billing_address_country_code, $billing_address_address, $billing_address_zip, $billing_address_phone, $account_custom_data);
        return $response;
    }

    /**
     * Operation setAccountInfoWithHttpInfo
     *
     * 
     *
     * @param string $new_account_email Description in progress... (optional)
     * @param string $new_account_password The password length must be at least 6 symbols. (optional)
     * @param string $language_code The notification language code (2 symbols, ISO639-1). The following values are available: aa (Afar), ab (Abkhazian), af (Afrikaans), am (Amharic), ar (Arabic), as (Assamese), ay (Aymara), az (Azerbaijani), ba (Bashkir), be (Byelorussian), bg (Bulgarian), bh (Bihari), bi (Bislama), bn (Bengali), bo (Tibetan), br (Breton), ca (Catalan), co (Corsican), cs (Czech), cy (Welch), da (Danish), de (German), dz (Bhutani), el (Greek), en (English), eo (Esperanto), es (Spanish), et (Estonian), eu (Basque), fa (Persian), fi (Finnish), fj (Fiji), fo (Faeroese), fr (French), fy (Frisian), ga (Irish), gd (Scots Gaelic), gl (Galician), gn (Guarani), gu (Gujarati), ha (Hausa), hi (Hindi), he (Hebrew), hr (Croatian), hu (Hungarian), hy (Armenian), ia (Interlingua), id (Indonesian), ie (Interlingue), ik (Inupiak), in (Indonesian), is (Icelandic), it (Italian), iu (Inuktitut), iw (Hebrew), ja (Japanese), ji (Yiddish), jw (Javanese), ka (Georgian), kk (Kazakh), kl (Greenlandic), km (Cambodian), kn (Kannada), ko (Korean), ks (Kashmiri), ku (Kurdish), ky (Kirghiz), la (Latin), ln (Lingala), lo (Laothian), lt (Lithuanian), lv (Latvian), mg (Malagasy), mi (Maori), mk (Macedonian), ml (Malayalam), mn (Mongolian), mo (Moldavian), mr (Marathi), ms (Malay), mt (Maltese), my (Burmese), na (Nauru), ne (Nepali), nl (Dutch), no (Norwegian), oc (Occitan), om (Oromo), or (Oriya), pa (Punjabi), pl (Polish), ps (Pashto), pt (Portuguese), qu (Quechua), rm (Rhaeto-Romance), rn (Kirundi), ro (Romanian), ru (Russian), rw (Kinyarwanda), sa (Sanskrit), sd (Sindhi), sg (Sangro), sh (Serbo-Croatian), si (Singhalese), sk (Slovak), sl (Slovenian), sm (Samoan), sn (Shona), so (Somali), sq (Albanian), sr (Serbian), ss (Siswati), st (Sesotho), su (Sudanese), sv (Swedish), sw (Swahili), ta (Tamil), te (Tegulu), tg (Tajik), th (Thai), ti (Tigrinya), tk (Turkmen), tl (Tagalog), tn (Setswana), to (Tonga), tr (Turkish), ts (Tsonga), tt (Tatar), tw (Twi), ug (Uigur), uk (Ukrainian), ur (Urdu), uz (Uzbek), vi (Vietnamese), vo (Volapuk), wo (Wolof), xh (Xhosa), yi (Yiddish), yo (Yoruba), za (Zhuang), zh (Chinese), zu (Zulu) (optional)
     * @param string $location The account location (timezone). Examples: America/Los_Angeles, GMT-8, GMT-08:00, GMT+10 (optional)
     * @param string $account_first_name The first name. (optional)
     * @param string $account_last_name The last name. (optional)
     * @param float $min_balance_to_notify The min balance value to notify by email or SMS. (optional)
     * @param bool $account_notifications Are the VoxImplant notifications required? (optional)
     * @param bool $tariff_changing_notifications Set to true to receive the emails about the VoxImplant tariff changing. (optional)
     * @param bool $news_notifications Set to true to receive the emails about the VoxImplant news. (optional)
     * @param bool $send_js_error Set to true to receive the emails about a JS scenario error. (optional)
     * @param string $billing_address_name The company or businessman name. (optional)
     * @param string $billing_address_country_code The billing address country code (2 symbols, ISO 3166-1 alpha-2). The following values are available: AF (Afghanistan), AL (Albania), DZ (Algeria), AS (American Samoa), AD (Andorra), AO (Angola), AI (Anguilla), AQ (Antarctica), AG (Antigua and Barbuda), AR (Argentina), AM (Armenia), AW (Aruba), AU (Australia), AT (Austria), AZ (Azerbaijan), BH (Bahrain), BD (Bangladesh), BB (Barbados), BY (Belarus), BE (Belgium), BZ (Belize), BJ (Benin), BM (Bermuda), BT (Bhutan), BO (Bolivia), BA (Bosnia and Herzegovina), BW (Botswana), BV (Bouvet Island), BR (Brazil), IO (British Indian Ocean Territory), BN (Brunei), BG (Bulgaria), BF (Burkina Faso), BI (Burundi), KH (Cambodia), CM (Cameroon), CA (Canada), CV (Cape Verde), KY (Cayman Islands), CF (Central African Republic), TD (Chad), CL (Chile), CN (China), CX (Christmas Island), CO (Colombia), KM (Comoros), CG (Congo), CK (Cook Islands), CR (Costa Rica), HR (Croatia), CU (Cuba), CY (Cyprus), CZ (Czech Republic), DK (Denmark), DJ (Djibouti), DM (Dominica), DO (Dominican Republic), EC (Ecuador), EG (Egypt), SV (El Salvador), GQ (Equatorial Guinea), ER (Eritrea), EE (Estonia), ET (Ethiopia), FO (Faroe Islands), FJ (Fiji Islands), FI (Finland), FR (France), GF (French Guiana), PF (French Polynesia), TF (French Southern and Antarctic Lands), GA (Gabon), GE (Georgia), DE (Germany), GH (Ghana), GI (Gibraltar), GR (Greece), GL (Greenland), GD (Grenada), GP (Guadeloupe), GU (Guam), GT (Guatemala), GG (Guernsey), GN (Guinea), GY (Guyana), HT (Haiti), HM (Heard Island and McDonald Islands), HN (Honduras), HU (Hungary), IS (Iceland), IN (India), ID (Indonesia), IR (Iran), IQ (Iraq), IE (Ireland), IL (Israel), IT (Italy), JM (Jamaica), JP (Japan), JE (Jersey), JO (Jordan), KZ (Kazakhstan), KE (Kenya), KI (Kiribati), KR (Korea), KW (Kuwait), KG (Kyrgyzstan), LA (Laos), LV (Latvia), LB (Lebanon), LS (Lesotho), LR (Liberia), LY (Libya), LI (Liechtenstein), LT (Lithuania), LU (Luxembourg), MG (Madagascar), MW (Malawi), MY (Malaysia), MV (Maldives), ML (Mali), MT (Malta), MH (Marshall Islands), MQ (Martinique), MR (Mauritania), MU (Mauritius), YT (Mayotte), MX (Mexico), FM (Micronesia), MD (Moldova), MC (Monaco), MN (Mongolia), ME (Montenegro), MS (Montserrat), MA (Morocco), MZ (Mozambique), MM (Myanmar), NA (Namibia), NR (Nauru), NP (Nepal), NL (Netherlands), AN (Netherlands Antilles), NC (New Caledonia), NZ (New Zealand), NI (Nicaragua), NE (Niger), NG (Nigeria), NU (Niue), NF (Norfolk Island), KP (North Korea), MP (Northern Mariana Islands), NO (Norway), OM (Oman), PK (Pakistan), PW (Palau), PS (Palestinian Authority), PA (Panama), PG (Papua New Guinea), PY (Paraguay), PE (Peru), PH (Philippines), PN (Pitcairn Islands), PL (Poland), PT (Portugal), PR (Puerto Rico), QA (Qatar), RE (Reunion), RO (Romania), RU (Russia), RW (Rwanda), WS (Samoa), SM (San Marino), SA (Saudi Arabia), SN (Senegal), CS (Serbia), SC (Seychelles), SL (Sierra Leone), SG (Singapore), SK (Slovakia), SI (Slovenia), SB (Solomon Islands), SO (Somalia), ZA (South Africa), GS (South Georgia and the South Sandwich Islands), ES (Spain), LK (Sri Lanka), SD (Sudan), SR (Suriname), SZ (Swaziland), SE (Sweden), CH (Switzerland), SY (Syria), ST (Sao Tome and Principe), TW (Taiwan), TJ (Tajikistan), TZ (Tanzania), TH (Thailand), TG (Togo), TK (Tokelau), TO (Tonga), TT (Trinidad and Tobago), TN (Tunisia), TR (Turkey), TM (Turkmenistan), TC (Turks and Caicos Islands), TV (Tuvalu), UG (Uganda), UA (Ukraine), AE (United Arab Emirates), GB (United Kingdom), US (United States), UY (Uruguay), UZ (Uzbekistan), VU (Vanuatu), VA (Vatican City), VE (Venezuela), VN (Vietnam), VI (Virgin Islands), WF (Wallis and Futuna), EH (Western Sahara), YE (Yemen), ZM (Zambia), ZW (Zimbabwe), AX (Aland Islands) (optional)
     * @param string $billing_address_address The office address. (optional)
     * @param string $billing_address_zip The office ZIP. (optional)
     * @param string $billing_address_phone The office phone number. (optional)
     * @param string $account_custom_data The custom data. (optional)
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setAccountInfoWithHttpInfo($new_account_email = null, $new_account_password = null, $language_code = null, $location = null, $account_first_name = null, $account_last_name = null, $min_balance_to_notify = null, $account_notifications = null, $tariff_changing_notifications = null, $news_notifications = null, $send_js_error = null, $billing_address_name = null, $billing_address_country_code = null, $billing_address_address = null, $billing_address_zip = null, $billing_address_phone = null, $account_custom_data = null)
    {
        // parse inputs
        $resourcePath = "/SetAccountInfo";
        $httpBody = '';
        $queryParams = array();
        $headerParams = array();
        $formParams = array();
        $_header_accept = $this->apiClient->selectHeaderAccept(array('application/json'));
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(array('application/x-www-form-urlencoded'));

        // default format to json
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        // form params
        if ($new_account_email !== null) {
            $formParams['new_account_email'] = $this->apiClient->getSerializer()->toFormValue($new_account_email);
        }
        // form params
        if ($new_account_password !== null) {
            $formParams['new_account_password'] = $this->apiClient->getSerializer()->toFormValue($new_account_password);
        }
        // form params
        if ($language_code !== null) {
            $formParams['language_code'] = $this->apiClient->getSerializer()->toFormValue($language_code);
        }
        // form params
        if ($location !== null) {
            $formParams['location'] = $this->apiClient->getSerializer()->toFormValue($location);
        }
        // form params
        if ($account_first_name !== null) {
            $formParams['account_first_name'] = $this->apiClient->getSerializer()->toFormValue($account_first_name);
        }
        // form params
        if ($account_last_name !== null) {
            $formParams['account_last_name'] = $this->apiClient->getSerializer()->toFormValue($account_last_name);
        }
        // form params
        if ($min_balance_to_notify !== null) {
            $formParams['min_balance_to_notify'] = $this->apiClient->getSerializer()->toFormValue($min_balance_to_notify);
        }
        // form params
        if ($account_notifications !== null) {
            $formParams['account_notifications'] = $this->apiClient->getSerializer()->toFormValue($account_notifications);
        }
        // form params
        if ($tariff_changing_notifications !== null) {
            $formParams['tariff_changing_notifications'] = $this->apiClient->getSerializer()->toFormValue($tariff_changing_notifications);
        }
        // form params
        if ($news_notifications !== null) {
            $formParams['news_notifications'] = $this->apiClient->getSerializer()->toFormValue($news_notifications);
        }
        // form params
        if ($send_js_error !== null) {
            $formParams['send_js_error'] = $this->apiClient->getSerializer()->toFormValue($send_js_error);
        }
        // form params
        if ($billing_address_name !== null) {
            $formParams['billing_address_name'] = $this->apiClient->getSerializer()->toFormValue($billing_address_name);
        }
        // form params
        if ($billing_address_country_code !== null) {
            $formParams['billing_address_country_code'] = $this->apiClient->getSerializer()->toFormValue($billing_address_country_code);
        }
        // form params
        if ($billing_address_address !== null) {
            $formParams['billing_address_address'] = $this->apiClient->getSerializer()->toFormValue($billing_address_address);
        }
        // form params
        if ($billing_address_zip !== null) {
            $formParams['billing_address_zip'] = $this->apiClient->getSerializer()->toFormValue($billing_address_zip);
        }
        // form params
        if ($billing_address_phone !== null) {
            $formParams['billing_address_phone'] = $this->apiClient->getSerializer()->toFormValue($billing_address_phone);
        }
        // form params
        if ($account_custom_data !== null) {
            $formParams['account_custom_data'] = $this->apiClient->getSerializer()->toFormValue($account_custom_data);
        }
        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($apiKey) !== 0) {
            $queryParams['api_key'] = $apiKey;
        }
        // this endpoint requires API key authentication
        $apiKey = $this->apiClient->getApiKeyWithPrefix('account_name');
        if (strlen($apiKey) !== 0) {
            $queryParams['account_name'] = $apiKey;
        }
        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/SetAccountInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
