<?php

namespace backend\modules\voximplant\lib\Api;

use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;


class ManagingCallerIDsApi
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
     * @return ManagingCallerIDsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation activateCallerID
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object. (optional)
     * @param string $callerid_number The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. (optional)
     * @param string $verification_code The verification code, see the VerifyCallerID function. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function activateCallerID($callerid_id = null, $callerid_number = null, $verification_code = null)
    {
        list($response) = $this->activateCallerIDWithHttpInfo($callerid_id, $callerid_number, $verification_code);
        return $response;
    }

    /**
     * Operation activateCallerIDWithHttpInfo
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object. (optional)
     * @param string $callerid_number The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. (optional)
     * @param string $verification_code The verification code, see the VerifyCallerID function. (optional)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function activateCallerIDWithHttpInfo($callerid_id = null, $callerid_number = null, $verification_code = null)
    {
        // parse inputs
        $resourcePath = "/ActivateCallerID";
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
        if ($callerid_id !== null) {
            $formParams['callerid_id'] = $this->apiClient->getSerializer()->toFormValue($callerid_id);
        }
        // form params
        if ($callerid_number !== null) {
            $formParams['callerid_number'] = $this->apiClient->getSerializer()->toFormValue($callerid_number);
        }
        // form params
        if ($verification_code !== null) {
            $formParams['verification_code'] = $this->apiClient->getSerializer()->toFormValue($verification_code);
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
                '/ActivateCallerID'
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
     * Operation addCallerID
     *
     * 
     *
     * @param string $callerid_number The callerID number. (optional)
     * @return \backend\modules\voximplant\models\AddCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function addCallerID($callerid_number = null)
    {
        list($response) = $this->addCallerIDWithHttpInfo($callerid_number);
        return $response;
    }

    /**
     * Operation addCallerIDWithHttpInfo
     *
     * 
     *
     * @param string $callerid_number The callerID number. (optional)
     * @return Array of \backend\modules\voximplant\models\AddCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function addCallerIDWithHttpInfo($callerid_number = null)
    {
        // parse inputs
        $resourcePath = "/AddCallerID";
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
        if ($callerid_number !== null) {
            $formParams['callerid_number'] = $this->apiClient->getSerializer()->toFormValue($callerid_number);
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
                '\backend\modules\voximplant\models\AddCallerIDAPIResponse',
                '/AddCallerID'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AddCallerIDAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AddCallerIDAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delCallerID
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object. (optional)
     * @param string $callerid_number The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function delCallerID($callerid_id = null, $callerid_number = null)
    {
        list($response) = $this->delCallerIDWithHttpInfo($callerid_id, $callerid_number);
        return $response;
    }

    /**
     * Operation delCallerIDWithHttpInfo
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object. (optional)
     * @param string $callerid_number The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. (optional)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function delCallerIDWithHttpInfo($callerid_id = null, $callerid_number = null)
    {
        // parse inputs
        $resourcePath = "/DelCallerID";
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
        if ($callerid_id !== null) {
            $formParams['callerid_id'] = $this->apiClient->getSerializer()->toFormValue($callerid_id);
        }
        // form params
        if ($callerid_number !== null) {
            $formParams['callerid_number'] = $this->apiClient->getSerializer()->toFormValue($callerid_number);
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
                '/DelCallerID'
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
     * Operation getCallerIDs
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object to filter. (optional)
     * @param string $callerid_number The phone number to filter. (optional)
     * @param bool $active The active flag to filter. (optional)
     * @param string $order_by The following values are available: &#x60;caller_number&#x60; (ascent order), &#x60;verified_until&#x60; (ascent order). (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetCallerIDsAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getCallerIDs($callerid_id = null, $callerid_number = null, $active = null, $order_by = null, $count = null, $offset = null)
    {
        list($response) = $this->getCallerIDsWithHttpInfo($callerid_id, $callerid_number, $active, $order_by, $count, $offset);
        return $response;
    }

    /**
     * Operation getCallerIDsWithHttpInfo
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object to filter. (optional)
     * @param string $callerid_number The phone number to filter. (optional)
     * @param bool $active The active flag to filter. (optional)
     * @param string $order_by The following values are available: &#x60;caller_number&#x60; (ascent order), &#x60;verified_until&#x60; (ascent order). (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \backend\modules\voximplant\models\GetCallerIDsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getCallerIDsWithHttpInfo($callerid_id = null, $callerid_number = null, $active = null, $order_by = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetCallerIDs";
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
        if ($callerid_id !== null) {
            $formParams['callerid_id'] = $this->apiClient->getSerializer()->toFormValue($callerid_id);
        }
        // form params
        if ($callerid_number !== null) {
            $formParams['callerid_number'] = $this->apiClient->getSerializer()->toFormValue($callerid_number);
        }
        // form params
        if ($active !== null) {
            $formParams['active'] = $this->apiClient->getSerializer()->toFormValue($active);
        }
        // form params
        if ($order_by !== null) {
            $formParams['order_by'] = $this->apiClient->getSerializer()->toFormValue($order_by);
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
                '\backend\modules\voximplant\models\GetCallerIDsAPIResponse',
                '/GetCallerIDs'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetCallerIDsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetCallerIDsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation verifyCallerID
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object. (optional)
     * @param string $callerid_number The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function verifyCallerID($callerid_id = null, $callerid_number = null)
    {
        list($response) = $this->verifyCallerIDWithHttpInfo($callerid_id, $callerid_number);
        return $response;
    }

    /**
     * Operation verifyCallerIDWithHttpInfo
     *
     * 
     *
     * @param float $callerid_id The id of the callerID object. (optional)
     * @param string $callerid_number The callerID number that can be used instead of &lt;b&gt;callerid_id&lt;/b&gt;. (optional)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function verifyCallerIDWithHttpInfo($callerid_id = null, $callerid_number = null)
    {
        // parse inputs
        $resourcePath = "/VerifyCallerID";
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
        if ($callerid_id !== null) {
            $formParams['callerid_id'] = $this->apiClient->getSerializer()->toFormValue($callerid_id);
        }
        // form params
        if ($callerid_number !== null) {
            $formParams['callerid_number'] = $this->apiClient->getSerializer()->toFormValue($callerid_number);
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
                '/VerifyCallerID'
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
