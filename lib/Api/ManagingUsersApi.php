<?php

namespace backend\modules\voximplant\lib\Api;

use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;


class ManagingUsersApi
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
     * @return ManagingUsersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addUser
     *
     * 
     *
     * @param string $user_name The user name in format [a-z0-9][a-z0-9_-]{2,49} (required)
     * @param string $user_display_name The user display name. The length must be less than 256. (required)
     * @param string $user_password The user password. The length must be at least 6 symbols. (required)
     * @param bool $parent_accounting Is account money use? (optional)
     * @param bool $two_factor_auth_required Is two factor authorization required? (optional)
     * @param string $mobile_phone The user mobile phone. The length must be less than 50. (optional)
     * @param bool $user_active The user enable flag (optional)
     * @param string $user_custom_data Any string (optional)
     * @return backend\modules\voximplant\modelsAddUserAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function addUser($user_name, $user_display_name, $user_password, $parent_accounting = null, $two_factor_auth_required = null, $mobile_phone = null, $user_active = null, $user_custom_data = null)
    {
        list($response) = $this->addUserWithHttpInfo($user_name, $user_display_name, $user_password, $parent_accounting, $two_factor_auth_required, $mobile_phone, $user_active, $user_custom_data);
        return $response;
    }

    /**
     * Operation addUserWithHttpInfo
     *
     * 
     *
     * @param string $user_name The user name in format [a-z0-9][a-z0-9_-]{2,49} (required)
     * @param string $user_display_name The user display name. The length must be less than 256. (required)
     * @param string $user_password The user password. The length must be at least 6 symbols. (required)
     * @param bool $parent_accounting Is account money use? (optional)
     * @param bool $two_factor_auth_required Is two factor authorization required? (optional)
     * @param string $mobile_phone The user mobile phone. The length must be less than 50. (optional)
     * @param bool $user_active The user enable flag (optional)
     * @param string $user_custom_data Any string (optional)
     * @return Array of backend\modules\voximplant\models\AddUserAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function addUserWithHttpInfo($user_name, $user_display_name, $user_password, $parent_accounting = null, $two_factor_auth_required = null, $mobile_phone = null, $user_active = null, $user_custom_data = null)
    {
        // verify the required parameter 'user_name' is set
        if ($user_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_name when calling addUser');
        }
        // verify the required parameter 'user_display_name' is set
        if ($user_display_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_display_name when calling addUser');
        }
        // verify the required parameter 'user_password' is set
        if ($user_password === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_password when calling addUser');
        }
        // parse inputs
        $resourcePath = "/AddUser";
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
        if ($user_name !== null) {
            $formParams['user_name'] = $this->apiClient->getSerializer()->toFormValue($user_name);
        }
        // form params
        if ($user_display_name !== null) {
            $formParams['user_display_name'] = $this->apiClient->getSerializer()->toFormValue($user_display_name);
        }
        // form params
        if ($user_password !== null) {
            $formParams['user_password'] = $this->apiClient->getSerializer()->toFormValue($user_password);
        }
        // form params
        if ($parent_accounting !== null) {
            $formParams['parent_accounting'] = $this->apiClient->getSerializer()->toFormValue($parent_accounting);
        }
        // form params
        if ($two_factor_auth_required !== null) {
            $formParams['two_factor_auth_required'] = $this->apiClient->getSerializer()->toFormValue($two_factor_auth_required);
        }
        // form params
        if ($mobile_phone !== null) {
            $formParams['mobile_phone'] = $this->apiClient->getSerializer()->toFormValue($mobile_phone);
        }
        // form params
        if ($user_active !== null) {
            $formParams['user_active'] = $this->apiClient->getSerializer()->toFormValue($user_active);
        }
        // form params
        if ($user_custom_data !== null) {
            $formParams['user_custom_data'] = $this->apiClient->getSerializer()->toFormValue($user_custom_data);
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
                'backend\modules\voximplant\models\AddUserAPIResponse',
                '/AddUser'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\AddUserAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\AddUserAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation bindUser
     *
     * 
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $user_name Can be used instead of &lt;b&gt;user_id&lt;/b&gt;. The user name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $application_id The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $application_name Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. The application name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function bindUser($user_id = null, $user_name = null, $application_id = null, $application_name = null, $bind = null)
    {
        list($response) = $this->bindUserWithHttpInfo($user_id, $user_name, $application_id, $application_name, $bind);
        return $response;
    }

    /**
     * Operation bindUserWithHttpInfo
     *
     * 
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $user_name Can be used instead of &lt;b&gt;user_id&lt;/b&gt;. The user name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $application_id The application ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $application_name Can be used instead of &lt;b&gt;application_id&lt;/b&gt;. The application name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return Array of backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function bindUserWithHttpInfo($user_id = null, $user_name = null, $application_id = null, $application_name = null, $bind = null)
    {
        // parse inputs
        $resourcePath = "/BindUser";
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
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($user_name !== null) {
            $formParams['user_name'] = $this->apiClient->getSerializer()->toFormValue($user_name);
        }
        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($bind !== null) {
            $formParams['bind'] = $this->apiClient->getSerializer()->toFormValue($bind);
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
                'backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/BindUser'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delUser
     *
     * 
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $user_name The user name list separated by the &#x60;;&#x60; symbol that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. (optional)
     * @return backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function delUser($user_id = null, $user_name = null)
    {
        list($response) = $this->delUserWithHttpInfo($user_id, $user_name);
        return $response;
    }

    /**
     * Operation delUserWithHttpInfo
     *
     * 
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $user_name The user name list separated by the &#x60;;&#x60; symbol that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. (optional)
     * @return Array of backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function delUserWithHttpInfo($user_id = null, $user_name = null)
    {
        // parse inputs
        $resourcePath = "/DelUser";
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
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($user_name !== null) {
            $formParams['user_name'] = $this->apiClient->getSerializer()->toFormValue($user_name);
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
                'backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/DelUser'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getUsers
     *
     * 
     *
     * @param float $application_id The application ID to filter. (optional)
     * @param float $excluded_application_id The excluded application ID to filter. (optional)
     * @param string $excluded_application_name The excluded application name to filter. (optional)
     * @param float $skill_id The skill ID to filter. (optional)
     * @param float $excluded_skill_id The excluded skill ID to filter. (optional)
     * @param float $acd_queue_id The ACD queue ID to filter. (optional)
     * @param float $user_id The user ID to filter. (optional)
     * @param string $user_name The user name part to filter. (optional)
     * @param bool $user_active The user active flag to filter. (optional)
     * @param string $user_display_name The user display name part to filter. (optional)
     * @param string $application_name The application name part to filter. (optional)
     * @param bool $with_applications Set true to get the bound applications. (optional)
     * @param bool $with_skills Set true to get the bound skills. (optional)
     * @param bool $with_queues Set true to get the bound queues. (optional)
     * @param string $acd_status The ACD status list separated by the &#x60;;&#x60; symbol. (optional)
     * @param float $showing_application_id The application to show in the &#x60;applications&#x60; field output. (optional)
     * @param float $showing_skill_id The skill to show in the &#x60;skills&#x60; field output. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $order_by The following values are available: &#x60;user_id&#x60;, &#x60;user_name&#x60; and &#x60;user_display_name&#x60;. (optional)
     * @param bool $return_live_balance Set true to get the user live balance. (optional)
     * @return backend\modules\voximplant\models\GetUsersAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getUsers($application_id = null, $excluded_application_id = null, $excluded_application_name = null, $skill_id = null, $excluded_skill_id = null, $acd_queue_id = null, $user_id = null, $user_name = null, $user_active = null, $user_display_name = null, $application_name = null, $with_applications = null, $with_skills = null, $with_queues = null, $acd_status = null, $showing_application_id = null, $showing_skill_id = null, $count = null, $offset = null, $order_by = null, $return_live_balance = null)
    {
        list($response) = $this->getUsersWithHttpInfo($application_id, $excluded_application_id, $excluded_application_name, $skill_id, $excluded_skill_id, $acd_queue_id, $user_id, $user_name, $user_active, $user_display_name, $application_name, $with_applications, $with_skills, $with_queues, $acd_status, $showing_application_id, $showing_skill_id, $count, $offset, $order_by, $return_live_balance);
        return $response;
    }

    /**
     * Operation getUsersWithHttpInfo
     *
     * 
     *
     * @param float $application_id The application ID to filter. (optional)
     * @param float $excluded_application_id The excluded application ID to filter. (optional)
     * @param string $excluded_application_name The excluded application name to filter. (optional)
     * @param float $skill_id The skill ID to filter. (optional)
     * @param float $excluded_skill_id The excluded skill ID to filter. (optional)
     * @param float $acd_queue_id The ACD queue ID to filter. (optional)
     * @param float $user_id The user ID to filter. (optional)
     * @param string $user_name The user name part to filter. (optional)
     * @param bool $user_active The user active flag to filter. (optional)
     * @param string $user_display_name The user display name part to filter. (optional)
     * @param string $application_name The application name part to filter. (optional)
     * @param bool $with_applications Set true to get the bound applications. (optional)
     * @param bool $with_skills Set true to get the bound skills. (optional)
     * @param bool $with_queues Set true to get the bound queues. (optional)
     * @param string $acd_status The ACD status list separated by the &#x60;;&#x60; symbol. (optional)
     * @param float $showing_application_id The application to show in the &#x60;applications&#x60; field output. (optional)
     * @param float $showing_skill_id The skill to show in the &#x60;skills&#x60; field output. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $order_by The following values are available: &#x60;user_id&#x60;, &#x60;user_name&#x60; and &#x60;user_display_name&#x60;. (optional)
     * @param bool $return_live_balance Set true to get the user live balance. (optional)
     * @return Array of backend\modules\voximplant\models\GetUsersAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getUsersWithHttpInfo($application_id = null, $excluded_application_id = null, $excluded_application_name = null, $skill_id = null, $excluded_skill_id = null, $acd_queue_id = null, $user_id = null, $user_name = null, $user_active = null, $user_display_name = null, $application_name = null, $with_applications = null, $with_skills = null, $with_queues = null, $acd_status = null, $showing_application_id = null, $showing_skill_id = null, $count = null, $offset = null, $order_by = null, $return_live_balance = null)
    {
        // parse inputs
        $resourcePath = "/GetUsers";
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
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($excluded_application_id !== null) {
            $formParams['excluded_application_id'] = $this->apiClient->getSerializer()->toFormValue($excluded_application_id);
        }
        // form params
        if ($excluded_application_name !== null) {
            $formParams['excluded_application_name'] = $this->apiClient->getSerializer()->toFormValue($excluded_application_name);
        }
        // form params
        if ($skill_id !== null) {
            $formParams['skill_id'] = $this->apiClient->getSerializer()->toFormValue($skill_id);
        }
        // form params
        if ($excluded_skill_id !== null) {
            $formParams['excluded_skill_id'] = $this->apiClient->getSerializer()->toFormValue($excluded_skill_id);
        }
        // form params
        if ($acd_queue_id !== null) {
            $formParams['acd_queue_id'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_id);
        }
        // form params
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($user_name !== null) {
            $formParams['user_name'] = $this->apiClient->getSerializer()->toFormValue($user_name);
        }
        // form params
        if ($user_active !== null) {
            $formParams['user_active'] = $this->apiClient->getSerializer()->toFormValue($user_active);
        }
        // form params
        if ($user_display_name !== null) {
            $formParams['user_display_name'] = $this->apiClient->getSerializer()->toFormValue($user_display_name);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($with_applications !== null) {
            $formParams['with_applications'] = $this->apiClient->getSerializer()->toFormValue($with_applications);
        }
        // form params
        if ($with_skills !== null) {
            $formParams['with_skills'] = $this->apiClient->getSerializer()->toFormValue($with_skills);
        }
        // form params
        if ($with_queues !== null) {
            $formParams['with_queues'] = $this->apiClient->getSerializer()->toFormValue($with_queues);
        }
        // form params
        if ($acd_status !== null) {
            $formParams['acd_status'] = $this->apiClient->getSerializer()->toFormValue($acd_status);
        }
        // form params
        if ($showing_application_id !== null) {
            $formParams['showing_application_id'] = $this->apiClient->getSerializer()->toFormValue($showing_application_id);
        }
        // form params
        if ($showing_skill_id !== null) {
            $formParams['showing_skill_id'] = $this->apiClient->getSerializer()->toFormValue($showing_skill_id);
        }
        // form params
        if ($count !== null) {
            $formParams['count'] = $this->apiClient->getSerializer()->toFormValue($count);
        }
        // form params
        if ($offset !== null) {
            $formParams['offset'] = $this->apiClient->getSerializer()->toFormValue($offset);
        }
        // form params
        if ($order_by !== null) {
            $formParams['order_by'] = $this->apiClient->getSerializer()->toFormValue($order_by);
        }
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
                'backend\modules\voximplant\models\GetUsersAPIResponse',
                '/GetUsers'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\GetUsersAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\GetUsersAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setUserInfo
     *
     * 
     *
     * @param float $user_id The user to edit. (optional)
     * @param string $user_name Can be used instead of &lt;b&gt;user_id&lt;/b&gt;. (optional)
     * @param string $new_user_name The new user name in format [a-z0-9][a-z0-9_-]{2,49} (optional)
     * @param string $user_display_name The new user display name. The length must be less than 256. (optional)
     * @param string $user_password The new user password. The length must be at least 6 symbols. (optional)
     * @param bool $parent_accounting Is account money use? (optional)
     * @param bool $user_active The user enable flag (optional)
     * @param string $user_custom_data Any string (optional)
     * @param bool $two_factor_auth_required Is two factor authorization required? (optional)
     * @param string $mobile_phone The new user mobile phone. The length must be less than 50. (optional)
     * @return backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function setUserInfo($user_id = null, $user_name = null, $new_user_name = null, $user_display_name = null, $user_password = null, $parent_accounting = null, $user_active = null, $user_custom_data = null, $two_factor_auth_required = null, $mobile_phone = null)
    {
        list($response) = $this->setUserInfoWithHttpInfo($user_id, $user_name, $new_user_name, $user_display_name, $user_password, $parent_accounting, $user_active, $user_custom_data, $two_factor_auth_required, $mobile_phone);
        return $response;
    }

    /**
     * Operation setUserInfoWithHttpInfo
     *
     * 
     *
     * @param float $user_id The user to edit. (optional)
     * @param string $user_name Can be used instead of &lt;b&gt;user_id&lt;/b&gt;. (optional)
     * @param string $new_user_name The new user name in format [a-z0-9][a-z0-9_-]{2,49} (optional)
     * @param string $user_display_name The new user display name. The length must be less than 256. (optional)
     * @param string $user_password The new user password. The length must be at least 6 symbols. (optional)
     * @param bool $parent_accounting Is account money use? (optional)
     * @param bool $user_active The user enable flag (optional)
     * @param string $user_custom_data Any string (optional)
     * @param bool $two_factor_auth_required Is two factor authorization required? (optional)
     * @param string $mobile_phone The new user mobile phone. The length must be less than 50. (optional)
     * @return Array of backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setUserInfoWithHttpInfo($user_id = null, $user_name = null, $new_user_name = null, $user_display_name = null, $user_password = null, $parent_accounting = null, $user_active = null, $user_custom_data = null, $two_factor_auth_required = null, $mobile_phone = null)
    {
        // parse inputs
        $resourcePath = "/SetUserInfo";
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
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($user_name !== null) {
            $formParams['user_name'] = $this->apiClient->getSerializer()->toFormValue($user_name);
        }
        // form params
        if ($new_user_name !== null) {
            $formParams['new_user_name'] = $this->apiClient->getSerializer()->toFormValue($new_user_name);
        }
        // form params
        if ($user_display_name !== null) {
            $formParams['user_display_name'] = $this->apiClient->getSerializer()->toFormValue($user_display_name);
        }
        // form params
        if ($user_password !== null) {
            $formParams['user_password'] = $this->apiClient->getSerializer()->toFormValue($user_password);
        }
        // form params
        if ($parent_accounting !== null) {
            $formParams['parent_accounting'] = $this->apiClient->getSerializer()->toFormValue($parent_accounting);
        }
        // form params
        if ($user_active !== null) {
            $formParams['user_active'] = $this->apiClient->getSerializer()->toFormValue($user_active);
        }
        // form params
        if ($user_custom_data !== null) {
            $formParams['user_custom_data'] = $this->apiClient->getSerializer()->toFormValue($user_custom_data);
        }
        // form params
        if ($two_factor_auth_required !== null) {
            $formParams['two_factor_auth_required'] = $this->apiClient->getSerializer()->toFormValue($two_factor_auth_required);
        }
        // form params
        if ($mobile_phone !== null) {
            $formParams['mobile_phone'] = $this->apiClient->getSerializer()->toFormValue($mobile_phone);
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
                'backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/SetUserInfo'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\ActivateCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation transferMoneyToUser
     *
     * 
     *
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (required)
     * @param float $amount The money amount, $. The absolute amount value must be equal or greater than 0.01 (required)
     * @param string $currency The amount currency. Examples: RUR, EUR, USD. (required)
     * @param bool $strict_mode Returns error if strict_mode is true and an user or the account hasn&#x60;t enough money. (optional)
     * @param string $user_transaction_description The user transaction description. (optional)
     * @param string $account_transaction_description The account transaction description. The following macro available: ${user_id}, ${user_name} (optional)
     * @return \backend\modules\voximplant\models\TransferMoneyToUserAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function transferMoneyToUser($user_id, $amount, $currency, $strict_mode = null, $user_transaction_description = null, $account_transaction_description = null)
    {
        list($response) = $this->transferMoneyToUserWithHttpInfo($user_id, $amount, $currency, $strict_mode, $user_transaction_description, $account_transaction_description);
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
     * @return Array of backend\modules\voximplant\models\TransferMoneyToUserAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function transferMoneyToUserWithHttpInfo($user_id, $amount, $currency, $strict_mode = null, $user_transaction_description = null, $account_transaction_description = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $user_id when calling transferMoneyToUser');
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
        $resourcePath = "/TransferMoneyToUser";
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
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
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
        if ($user_transaction_description !== null) {
            $formParams['user_transaction_description'] = $this->apiClient->getSerializer()->toFormValue($user_transaction_description);
        }
        // form params
        if ($account_transaction_description !== null) {
            $formParams['account_transaction_description'] = $this->apiClient->getSerializer()->toFormValue($account_transaction_description);
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
                'backend\modules\voximplant\models\TransferMoneyToUserAPIResponse',
                '/TransferMoneyToUser'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\TransferMoneyToUserAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\TransferMoneyToUserAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
