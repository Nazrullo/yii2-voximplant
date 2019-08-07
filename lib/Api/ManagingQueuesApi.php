<?php

namespace backend\modules\voximplant\lib\Api;

use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;

/**
 * ManagingQueuesApi Class Doc Comment
 *
 * @category Class
 * @package  Voximplant
 * @author   https://www.weblancer.net/users/senior-prog/
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://www.weblancer.net/users/senior-prog/
 */
class ManagingQueuesApi
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
     * @return ManagingQueuesApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addQueue
     *
     * 
     *
     * @param string $acd_queue_name The queue name. The length must be less than 100. (required)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param float $acd_queue_priority The integer queue priority. The highest priority is 0. (optional)
     * @param bool $auto_binding Set false to disable the auto operators binding by skills comparing. (optional)
     * @param float $service_probability The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. (optional)
     * @param float $max_queue_size The max queue size. (optional)
     * @param float $max_waiting_time The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. (optional)
     * @param float $average_service_time The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction. (optional)
     * @return backend\modules\voximplant\models\AddQueueAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function addQueue($acd_queue_name, $application_id = null, $application_name = null, $acd_queue_priority = null, $auto_binding = null, $service_probability = null, $max_queue_size = null, $max_waiting_time = null, $average_service_time = null)
    {
        list($response) = $this->addQueueWithHttpInfo($acd_queue_name, $application_id, $application_name, $acd_queue_priority, $auto_binding, $service_probability, $max_queue_size, $max_waiting_time, $average_service_time);
        return $response;
    }

    /**
     * Operation addQueueWithHttpInfo
     *
     * 
     *
     * @param string $acd_queue_name The queue name. The length must be less than 100. (required)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param float $acd_queue_priority The integer queue priority. The highest priority is 0. (optional)
     * @param bool $auto_binding Set false to disable the auto operators binding by skills comparing. (optional)
     * @param float $service_probability The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. (optional)
     * @param float $max_queue_size The max queue size. (optional)
     * @param float $max_waiting_time The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. (optional)
     * @param float $average_service_time The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction. (optional)
     * @return Array of backend\modules\voximplant\models\AddQueueAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function addQueueWithHttpInfo($acd_queue_name, $application_id = null, $application_name = null, $acd_queue_priority = null, $auto_binding = null, $service_probability = null, $max_queue_size = null, $max_waiting_time = null, $average_service_time = null)
    {
        // verify the required parameter 'acd_queue_name' is set
        if ($acd_queue_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $acd_queue_name when calling addQueue');
        }
        // parse inputs
        $resourcePath = "/AddQueue";
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
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($acd_queue_name !== null) {
            $formParams['acd_queue_name'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_name);
        }
        // form params
        if ($acd_queue_priority !== null) {
            $formParams['acd_queue_priority'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_priority);
        }
        // form params
        if ($auto_binding !== null) {
            $formParams['auto_binding'] = $this->apiClient->getSerializer()->toFormValue($auto_binding);
        }
        // form params
        if ($service_probability !== null) {
            $formParams['service_probability'] = $this->apiClient->getSerializer()->toFormValue($service_probability);
        }
        // form params
        if ($max_queue_size !== null) {
            $formParams['max_queue_size'] = $this->apiClient->getSerializer()->toFormValue($max_queue_size);
        }
        // form params
        if ($max_waiting_time !== null) {
            $formParams['max_waiting_time'] = $this->apiClient->getSerializer()->toFormValue($max_waiting_time);
        }
        // form params
        if ($average_service_time !== null) {
            $formParams['average_service_time'] = $this->apiClient->getSerializer()->toFormValue($average_service_time);
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
                'backend\modules\voximplant\models\AddQueueAPIResponse',
                '/AddQueue'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\AddQueueAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\AddQueueAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation delQueue
     *
     * 
     *
     * @param float $acd_queue_id The ACD queue ID. (optional)
     * @param string $acd_queue_name The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. The ACD queue name list separated by the &#x60;;&#x60; symbol. (optional)
     * @return backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function delQueue($acd_queue_id = null, $acd_queue_name = null)
    {
        list($response) = $this->delQueueWithHttpInfo($acd_queue_id, $acd_queue_name);
        return $response;
    }

    /**
     * Operation delQueueWithHttpInfo
     *
     * 
     *
     * @param float $acd_queue_id The ACD queue ID. (optional)
     * @param string $acd_queue_name The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. The ACD queue name list separated by the &#x60;;&#x60; symbol. (optional)
     * @return Array of backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function delQueueWithHttpInfo($acd_queue_id = null, $acd_queue_name = null)
    {
        // parse inputs
        $resourcePath = "/DelQueue";
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
        if ($acd_queue_id !== null) {
            $formParams['acd_queue_id'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_id);
        }
        // form params
        if ($acd_queue_name !== null) {
            $formParams['acd_queue_name'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_name);
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
                '/DelQueue'
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
     * Operation getACDState
     *
     * 
     *
     * @param string $acd_queue_id The ACD queue ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @return backend\modules\voximplant\models\GetACDStateAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getACDState($acd_queue_id = null)
    {
        list($response) = $this->getACDStateWithHttpInfo($acd_queue_id);
        return $response;
    }

    /**
     * Operation getACDStateWithHttpInfo
     *
     * 
     *
     * @param string $acd_queue_id The ACD queue ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @return Array of backend\modules\voximplant\models\GetACDStateAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getACDStateWithHttpInfo($acd_queue_id = null)
    {
        // parse inputs
        $resourcePath = "/GetACDState";
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
        if ($acd_queue_id !== null) {
            $formParams['acd_queue_id'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_id);
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
                'backend\modules\voximplant\models\GetACDStateAPIResponse',
                '/GetACDState'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\GetACDStateAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\GetACDStateAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getQueues
     *
     * 
     *
     * @param float $acd_queue_id The ACD queue ID to filter. (optional)
     * @param string $acd_queue_name The ACD queue name part to filter. (optional)
     * @param float $application_id The application ID to filter. (optional)
     * @param float $skill_id The skill ID to filter. (optional)
     * @param float $excluded_skill_id The excluded skill ID to filter. (optional)
     * @param bool $with_skills Set true to get the bound skills. (optional)
     * @param float $showing_skill_id The skill to show in the &#x60;skills&#x60; field output. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return backend\modules\voximplant\models\GetQueuesAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getQueues($acd_queue_id = null, $acd_queue_name = null, $application_id = null, $skill_id = null, $excluded_skill_id = null, $with_skills = null, $showing_skill_id = null, $count = null, $offset = null)
    {
        list($response) = $this->getQueuesWithHttpInfo($acd_queue_id, $acd_queue_name, $application_id, $skill_id, $excluded_skill_id, $with_skills, $showing_skill_id, $count, $offset);
        return $response;
    }

    /**
     * Operation getQueuesWithHttpInfo
     *
     * 
     *
     * @param float $acd_queue_id The ACD queue ID to filter. (optional)
     * @param string $acd_queue_name The ACD queue name part to filter. (optional)
     * @param float $application_id The application ID to filter. (optional)
     * @param float $skill_id The skill ID to filter. (optional)
     * @param float $excluded_skill_id The excluded skill ID to filter. (optional)
     * @param bool $with_skills Set true to get the bound skills. (optional)
     * @param float $showing_skill_id The skill to show in the &#x60;skills&#x60; field output. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of backend\modules\voximplant\models\GetQueuesAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getQueuesWithHttpInfo($acd_queue_id = null, $acd_queue_name = null, $application_id = null, $skill_id = null, $excluded_skill_id = null, $with_skills = null, $showing_skill_id = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetQueues";
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
        if ($acd_queue_id !== null) {
            $formParams['acd_queue_id'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_id);
        }
        // form params
        if ($acd_queue_name !== null) {
            $formParams['acd_queue_name'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_name);
        }
        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
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
        if ($with_skills !== null) {
            $formParams['with_skills'] = $this->apiClient->getSerializer()->toFormValue($with_skills);
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
                'backend\modules\voximplant\models\GetQueuesAPIResponse',
                '/GetQueues'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'backend\modules\voximplant\models\GetQueuesAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'backend\modules\voximplant\models\GetQueuesAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setQueueInfo
     *
     * 
     *
     * @param float $acd_queue_id The ACD queue ID. (optional)
     * @param string $acd_queue_name The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. (optional)
     * @param string $new_acd_queue_name The new queue name. The length must be less than 100. (optional)
     * @param float $acd_queue_priority The integer queue priority. The highest priority is 0. (optional)
     * @param bool $auto_binding Set false to disable the auto operators binding to the queue by skills comparing. (optional)
     * @param float $service_probability The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. (optional)
     * @param float $max_queue_size The max queue size. (optional)
     * @param float $max_waiting_time The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. (optional)
     * @param float $average_service_time The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction. (optional)
     * @param float $application_id The new application ID. (optional)
     * @return backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function setQueueInfo($acd_queue_id = null, $acd_queue_name = null, $new_acd_queue_name = null, $acd_queue_priority = null, $auto_binding = null, $service_probability = null, $max_queue_size = null, $max_waiting_time = null, $average_service_time = null, $application_id = null)
    {
        list($response) = $this->setQueueInfoWithHttpInfo($acd_queue_id, $acd_queue_name, $new_acd_queue_name, $acd_queue_priority, $auto_binding, $service_probability, $max_queue_size, $max_waiting_time, $average_service_time, $application_id);
        return $response;
    }

    /**
     * Operation setQueueInfoWithHttpInfo
     *
     * 
     *
     * @param float $acd_queue_id The ACD queue ID. (optional)
     * @param string $acd_queue_name The ACD queue name that can be used instead of &lt;b&gt;acd_queue_id&lt;/b&gt;. (optional)
     * @param string $new_acd_queue_name The new queue name. The length must be less than 100. (optional)
     * @param float $acd_queue_priority The integer queue priority. The highest priority is 0. (optional)
     * @param bool $auto_binding Set false to disable the auto operators binding to the queue by skills comparing. (optional)
     * @param float $service_probability The value in range [0.5 ... 1.0]. The value 1.0 means the service probability 100% in challenge with a lower priority queue. (optional)
     * @param float $max_queue_size The max queue size. (optional)
     * @param float $max_waiting_time The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time. (optional)
     * @param float $average_service_time The average service time in seconds. Specify the parameter to correct or initialize the waiting time prediction. (optional)
     * @param float $application_id The new application ID. (optional)
     * @return Array of backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setQueueInfoWithHttpInfo($acd_queue_id = null, $acd_queue_name = null, $new_acd_queue_name = null, $acd_queue_priority = null, $auto_binding = null, $service_probability = null, $max_queue_size = null, $max_waiting_time = null, $average_service_time = null, $application_id = null)
    {
        // parse inputs
        $resourcePath = "/SetQueueInfo";
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
        if ($acd_queue_id !== null) {
            $formParams['acd_queue_id'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_id);
        }
        // form params
        if ($acd_queue_name !== null) {
            $formParams['acd_queue_name'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_name);
        }
        // form params
        if ($new_acd_queue_name !== null) {
            $formParams['new_acd_queue_name'] = $this->apiClient->getSerializer()->toFormValue($new_acd_queue_name);
        }
        // form params
        if ($acd_queue_priority !== null) {
            $formParams['acd_queue_priority'] = $this->apiClient->getSerializer()->toFormValue($acd_queue_priority);
        }
        // form params
        if ($auto_binding !== null) {
            $formParams['auto_binding'] = $this->apiClient->getSerializer()->toFormValue($auto_binding);
        }
        // form params
        if ($service_probability !== null) {
            $formParams['service_probability'] = $this->apiClient->getSerializer()->toFormValue($service_probability);
        }
        // form params
        if ($max_queue_size !== null) {
            $formParams['max_queue_size'] = $this->apiClient->getSerializer()->toFormValue($max_queue_size);
        }
        // form params
        if ($max_waiting_time !== null) {
            $formParams['max_waiting_time'] = $this->apiClient->getSerializer()->toFormValue($max_waiting_time);
        }
        // form params
        if ($average_service_time !== null) {
            $formParams['average_service_time'] = $this->apiClient->getSerializer()->toFormValue($average_service_time);
        }
        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
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
                '/SetQueueInfo'
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

}
