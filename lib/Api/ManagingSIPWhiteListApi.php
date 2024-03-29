<?php
/**
 * ManagingSIPWhiteListApi
 * PHP version 5
 *
 * @category Class
 * @package  Voximplant
 * @author   https://www.weblancer.net/users/senior-prog/
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://www.weblancer.net/users/senior-prog/
 */

/**
 * Voximplant HTTP API
 *
 * Voximplant HTTP API description
 *
 * OpenAPI spec version: 1.0.0
 * Contact: teamlead@starttime.biz @narzikk weblancer:https://www.weblancer.net/users/senior-prog/
 * Generated by: https://www.weblancer.net/users/senior-prog/.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://www.weblancer.net/users/senior-prog/
 * Do not edit the class manually.
 */

namespace backend\modules\voximplant\lib\Api;

use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;

/**
 * ManagingSIPWhiteListApi Class Doc Comment
 *
 * @category Class
 * @package  Voximplant
 * @author   https://www.weblancer.net/users/senior-prog/
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://www.weblancer.net/users/senior-prog/
 */
class ManagingSIPWhiteListApi
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
     * @return ManagingSIPWhiteListApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addSipWhiteListItem
     *
     * 
     *
     * @param string $sip_whitelist_network The network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16). (required)
     * @return \backend\modules\voximplant\models\AddSipWhiteListItemAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function addSipWhiteListItem($sip_whitelist_network)
    {
        list($response) = $this->addSipWhiteListItemWithHttpInfo($sip_whitelist_network);
        return $response;
    }

    /**
     * Operation addSipWhiteListItemWithHttpInfo
     *
     * 
     *
     * @param string $sip_whitelist_network The network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16). (required)
     * @return Array of \backend\modules\voximplant\models\AddSipWhiteListItemAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function addSipWhiteListItemWithHttpInfo($sip_whitelist_network)
    {
        // verify the required parameter 'sip_whitelist_network' is set
        if ($sip_whitelist_network === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sip_whitelist_network when calling addSipWhiteListItem');
        }
        // parse inputs
        $resourcePath = "/AddSipWhiteListItem";
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
        if ($sip_whitelist_network !== null) {
            $formParams['sip_whitelist_network'] = $this->apiClient->getSerializer()->toFormValue($sip_whitelist_network);
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
                '\backend\modules\voximplant\models\AddSipWhiteListItemAPIResponse',
                '/AddSipWhiteListItem'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AddSipWhiteListItemAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AddSipWhiteListItemAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delSipWhiteListItem
     *
     * 
     *
     * @param float $sip_whitelist_id The SIP white list item ID to delete. (required)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function delSipWhiteListItem($sip_whitelist_id)
    {
        list($response) = $this->delSipWhiteListItemWithHttpInfo($sip_whitelist_id);
        return $response;
    }

    /**
     * Operation delSipWhiteListItemWithHttpInfo
     *
     * 
     *
     * @param float $sip_whitelist_id The SIP white list item ID to delete. (required)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function delSipWhiteListItemWithHttpInfo($sip_whitelist_id)
    {
        // verify the required parameter 'sip_whitelist_id' is set
        if ($sip_whitelist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sip_whitelist_id when calling delSipWhiteListItem');
        }
        // parse inputs
        $resourcePath = "/DelSipWhiteListItem";
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
        if ($sip_whitelist_id !== null) {
            $formParams['sip_whitelist_id'] = $this->apiClient->getSerializer()->toFormValue($sip_whitelist_id);
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
                '/DelSipWhiteListItem'
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
     * Operation getSipWhiteList
     *
     * 
     *
     * @param float $sip_whitelist_id The SIP white list item ID to filter (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetSipWhiteListAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getSipWhiteList($sip_whitelist_id = null, $count = null, $offset = null)
    {
        list($response) = $this->getSipWhiteListWithHttpInfo($sip_whitelist_id, $count, $offset);
        return $response;
    }

    /**
     * Operation getSipWhiteListWithHttpInfo
     *
     * 
     *
     * @param float $sip_whitelist_id The SIP white list item ID to filter (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \backend\modules\voximplant\models\GetSipWhiteListAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getSipWhiteListWithHttpInfo($sip_whitelist_id = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetSipWhiteList";
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
        if ($sip_whitelist_id !== null) {
            $formParams['sip_whitelist_id'] = $this->apiClient->getSerializer()->toFormValue($sip_whitelist_id);
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
                '\backend\modules\voximplant\models\GetSipWhiteListAPIResponse',
                '/GetSipWhiteList'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetSipWhiteListAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetSipWhiteListAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setSipWhiteListItem
     *
     * 
     *
     * @param float $sip_whitelist_id The SIP white list item ID (required)
     * @param string $sip_whitelist_network The new network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16) (required)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function setSipWhiteListItem($sip_whitelist_id, $sip_whitelist_network)
    {
        list($response) = $this->setSipWhiteListItemWithHttpInfo($sip_whitelist_id, $sip_whitelist_network);
        return $response;
    }

    /**
     * Operation setSipWhiteListItemWithHttpInfo
     *
     * 
     *
     * @param float $sip_whitelist_id The SIP white list item ID (required)
     * @param string $sip_whitelist_network The new network address in format A.B.C.D/L or A.B.C.D/a.b.c.d (example 192.168.1.5/16) (required)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setSipWhiteListItemWithHttpInfo($sip_whitelist_id, $sip_whitelist_network)
    {
        // verify the required parameter 'sip_whitelist_id' is set
        if ($sip_whitelist_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sip_whitelist_id when calling setSipWhiteListItem');
        }
        // verify the required parameter 'sip_whitelist_network' is set
        if ($sip_whitelist_network === null) {
            throw new \InvalidArgumentException('Missing the required parameter $sip_whitelist_network when calling setSipWhiteListItem');
        }
        // parse inputs
        $resourcePath = "/SetSipWhiteListItem";
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
        if ($sip_whitelist_id !== null) {
            $formParams['sip_whitelist_id'] = $this->apiClient->getSerializer()->toFormValue($sip_whitelist_id);
        }
        // form params
        if ($sip_whitelist_network !== null) {
            $formParams['sip_whitelist_network'] = $this->apiClient->getSerializer()->toFormValue($sip_whitelist_network);
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
                '/SetSipWhiteListItem'
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
