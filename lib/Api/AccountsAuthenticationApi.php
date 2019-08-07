<?php

namespace backend\modules\voximplant\lib\Api;

use backend\modules\voximplant\lib\ApiClient;
use backend\modules\voximplant\lib\ApiException;
use backend\modules\voximplant\models\ActivateCallerIDAPIResponse;
use backend\modules\voximplant\models\LogonAPIResponse;


class AccountsAuthenticationApi
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
     * @return AccountsAuthenticationApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation logon
     *
     * 
     *
     * @return LogonAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function logon()
    {
        list($response) = $this->logonWithHttpInfo();
        return $response;
    }

    /**
     * Operation logonWithHttpInfo
     *
     * 
     *
     * @return array of LogonAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function logonWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/Logon";
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
        // this endpoint requires email  authentication
        $account_name = $this->apiClient->getApiKeyWithPrefix('account_email');
        if (strlen($account_name) !== 0) {
            $queryParams['account_email'] = $account_name;
        }
        // this endpoint requires password  authentication
        $account_password = $this->apiClient->getApiKeyWithPrefix('account_password');
        if (strlen($account_password) !== 0) {
            $queryParams['account_password'] = $account_password;
        }
        $api_key  = $this->apiClient->getApiKeyWithPrefix('api_key');
        if (strlen($api_key) !== 0) {
            $queryParams['api_key'] = $api_key;
        }
        $account_id = $this->apiClient->getApiKeyWithPrefix('account_id');
        if (strlen($account_id) !== 0) {
            $queryParams['account_id'] = $account_id;
        }
        // this endpoint requires API key authentication


        // make the API Call

        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $resourcePath,
                'POST',
                $queryParams,
                $httpBody,
                $headerParams,
                '\backend\modules\voximplant\models\LogonAPIResponse',
                '/Logon'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\LogonAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\LogonAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation logout
     *
     * 
     *
     * @return ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function logout()
    {
        list($response) = $this->logoutWithHttpInfo();
        return $response;
    }

    /**
     * Operation logoutWithHttpInfo
     *
     * 
     *
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function logoutWithHttpInfo()
    {
        // parse inputs
        $resourcePath = "/Logout";
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
                '/Logout'
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
