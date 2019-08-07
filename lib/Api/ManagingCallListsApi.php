<?php


namespace backend\modules\voximplant\lib\Api;

use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;

class ManagingCallListsApi
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
     * @return ManagingCallListsApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation appendToCallList
     *
     * 
     *
     * @param string $file_content Send as Body Request or multiform. (required)
     * @param float $list_id The call list ID (optional)
     * @param string $list_name Can be used instead of &lt;b&gt;list_id&lt;/b&gt;. The unique name call list (optional)
     * @param string $encoding Encoding file. The default is UTF-8. (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return \backend\modules\voximplant\models\AppendToCallListAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function appendToCallList($file_content, $list_id = null, $list_name = null, $encoding = null, $delimiter = null)
    {
        list($response) = $this->appendToCallListWithHttpInfo($file_content, $list_id, $list_name, $encoding, $delimiter);
        return $response;
    }

    /**
     * Operation appendToCallListWithHttpInfo
     *
     * 
     *
     * @param string $file_content Send as Body Request or multiform. (required)
     * @param float $list_id The call list ID (optional)
     * @param string $list_name Can be used instead of &lt;b&gt;list_id&lt;/b&gt;. The unique name call list (optional)
     * @param string $encoding Encoding file. The default is UTF-8. (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return Array of \backend\modules\voximplant\models\AppendToCallListAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function appendToCallListWithHttpInfo($file_content, $list_id = null, $list_name = null, $encoding = null, $delimiter = null)
    {
        // verify the required parameter 'file_content' is set
        if ($file_content === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_content when calling appendToCallList');
        }
        // parse inputs
        $resourcePath = "/AppendToCallList";
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
        if ($list_id !== null) {
            $formParams['list_id'] = $this->apiClient->getSerializer()->toFormValue($list_id);
        }
        // form params
        if ($list_name !== null) {
            $formParams['list_name'] = $this->apiClient->getSerializer()->toFormValue($list_name);
        }
        // form params
        if ($file_content !== null) {
            $formParams['file_content'] = $this->apiClient->getSerializer()->toFormValue($file_content);
        }
        // form params
        if ($encoding !== null) {
            $formParams['encoding'] = $this->apiClient->getSerializer()->toFormValue($encoding);
        }
        // form params
        if ($delimiter !== null) {
            $formParams['delimiter'] = $this->apiClient->getSerializer()->toFormValue($delimiter);
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
                '\backend\modules\voximplant\models\AppendToCallListAPIResponse',
                '/AppendToCallList'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AppendToCallListAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AppendToCallListAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createCallList
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param float $priority Priority tasks (required)
     * @param float $max_simultaneous Number simultaneously processed tasks. (required)
     * @param float $num_attempts Number of attempts. (required)
     * @param string $name File name. (required)
     * @param string $file_content Send as Body Request or multiform. (required)
     * @param float $interval_seconds Interval between call attempts in seconds. The default is 0. (optional)
     * @param float $queue_id Queue Id. For processing list with PDS must specify the ID of the queue. (optional)
     * @param float $avg_waiting_sec Average waiting time in the queue(seconds). Default is 1 (optional)
     * @param string $encoding Encoding file. The default is UTF-8. (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return \backend\modules\voximplant\models\AppendToCallListAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function createCallList($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds = null, $queue_id = null, $avg_waiting_sec = null, $encoding = null, $delimiter = null)
    {
        list($response) = $this->createCallListWithHttpInfo($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds, $queue_id, $avg_waiting_sec, $encoding, $delimiter);
        return $response;
    }

    /**
     * Operation createCallListWithHttpInfo
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param float $priority Priority tasks (required)
     * @param float $max_simultaneous Number simultaneously processed tasks. (required)
     * @param float $num_attempts Number of attempts. (required)
     * @param string $name File name. (required)
     * @param string $file_content Send as Body Request or multiform. (required)
     * @param float $interval_seconds Interval between call attempts in seconds. The default is 0. (optional)
     * @param float $queue_id Queue Id. For processing list with PDS must specify the ID of the queue. (optional)
     * @param float $avg_waiting_sec Average waiting time in the queue(seconds). Default is 1 (optional)
     * @param string $encoding Encoding file. The default is UTF-8. (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return Array of \backend\modules\voximplant\models\AppendToCallListAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function createCallListWithHttpInfo($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds = null, $queue_id = null, $avg_waiting_sec = null, $encoding = null, $delimiter = null)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling createCallList');
        }
        // verify the required parameter 'priority' is set
        if ($priority === null) {
            throw new \InvalidArgumentException('Missing the required parameter $priority when calling createCallList');
        }
        // verify the required parameter 'max_simultaneous' is set
        if ($max_simultaneous === null) {
            throw new \InvalidArgumentException('Missing the required parameter $max_simultaneous when calling createCallList');
        }
        // verify the required parameter 'num_attempts' is set
        if ($num_attempts === null) {
            throw new \InvalidArgumentException('Missing the required parameter $num_attempts when calling createCallList');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createCallList');
        }
        // verify the required parameter 'file_content' is set
        if ($file_content === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_content when calling createCallList');
        }
        // parse inputs
        $resourcePath = "/CreateCallList";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($priority !== null) {
            $formParams['priority'] = $this->apiClient->getSerializer()->toFormValue($priority);
        }
        // form params
        if ($max_simultaneous !== null) {
            $formParams['max_simultaneous'] = $this->apiClient->getSerializer()->toFormValue($max_simultaneous);
        }
        // form params
        if ($num_attempts !== null) {
            $formParams['num_attempts'] = $this->apiClient->getSerializer()->toFormValue($num_attempts);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }
        // form params
        if ($file_content !== null) {
            $formParams['file_content'] = $this->apiClient->getSerializer()->toFormValue($file_content);
        }
        // form params
        if ($interval_seconds !== null) {
            $formParams['interval_seconds'] = $this->apiClient->getSerializer()->toFormValue($interval_seconds);
        }
        // form params
        if ($queue_id !== null) {
            $formParams['queue_id'] = $this->apiClient->getSerializer()->toFormValue($queue_id);
        }
        // form params
        if ($avg_waiting_sec !== null) {
            $formParams['avg_waiting_sec'] = $this->apiClient->getSerializer()->toFormValue($avg_waiting_sec);
        }
        // form params
        if ($encoding !== null) {
            $formParams['encoding'] = $this->apiClient->getSerializer()->toFormValue($encoding);
        }
        // form params
        if ($delimiter !== null) {
            $formParams['delimiter'] = $this->apiClient->getSerializer()->toFormValue($delimiter);
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
                '\backend\modules\voximplant\models\AppendToCallListAPIResponse',
                '/CreateCallList'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AppendToCallListAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AppendToCallListAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation createManualCallList
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param float $priority Priority tasks (required)
     * @param float $max_simultaneous Number simultaneously processed tasks. (required)
     * @param float $num_attempts Number of attempts. (required)
     * @param string $name File name. (required)
     * @param string $file_content Send as Body Request or multiform. (required)
     * @param float $interval_seconds Interval between call attempts in seconds. The default is 0. (optional)
     * @param string $encoding Encoding file. The default is UTF-8. (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return \backend\modules\voximplant\models\AppendToCallListAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function createManualCallList($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds = null, $encoding = null, $delimiter = null)
    {
        list($response) = $this->createManualCallListWithHttpInfo($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds, $encoding, $delimiter);
        return $response;
    }

    /**
     * Operation createManualCallListWithHttpInfo
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param float $priority Priority tasks (required)
     * @param float $max_simultaneous Number simultaneously processed tasks. (required)
     * @param float $num_attempts Number of attempts. (required)
     * @param string $name File name. (required)
     * @param string $file_content Send as Body Request or multiform. (required)
     * @param float $interval_seconds Interval between call attempts in seconds. The default is 0. (optional)
     * @param string $encoding Encoding file. The default is UTF-8. (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return Array of \backend\modules\voximplant\models\AppendToCallListAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function createManualCallListWithHttpInfo($rule_id, $priority, $max_simultaneous, $num_attempts, $name, $file_content, $interval_seconds = null, $encoding = null, $delimiter = null)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling createManualCallList');
        }
        // verify the required parameter 'priority' is set
        if ($priority === null) {
            throw new \InvalidArgumentException('Missing the required parameter $priority when calling createManualCallList');
        }
        // verify the required parameter 'max_simultaneous' is set
        if ($max_simultaneous === null) {
            throw new \InvalidArgumentException('Missing the required parameter $max_simultaneous when calling createManualCallList');
        }
        // verify the required parameter 'num_attempts' is set
        if ($num_attempts === null) {
            throw new \InvalidArgumentException('Missing the required parameter $num_attempts when calling createManualCallList');
        }
        // verify the required parameter 'name' is set
        if ($name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $name when calling createManualCallList');
        }
        // verify the required parameter 'file_content' is set
        if ($file_content === null) {
            throw new \InvalidArgumentException('Missing the required parameter $file_content when calling createManualCallList');
        }
        // parse inputs
        $resourcePath = "/CreateManualCallList";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($priority !== null) {
            $formParams['priority'] = $this->apiClient->getSerializer()->toFormValue($priority);
        }
        // form params
        if ($max_simultaneous !== null) {
            $formParams['max_simultaneous'] = $this->apiClient->getSerializer()->toFormValue($max_simultaneous);
        }
        // form params
        if ($num_attempts !== null) {
            $formParams['num_attempts'] = $this->apiClient->getSerializer()->toFormValue($num_attempts);
        }
        // form params
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }
        // form params
        if ($file_content !== null) {
            $formParams['file_content'] = $this->apiClient->getSerializer()->toFormValue($file_content);
        }
        // form params
        if ($interval_seconds !== null) {
            $formParams['interval_seconds'] = $this->apiClient->getSerializer()->toFormValue($interval_seconds);
        }
        // form params
        if ($encoding !== null) {
            $formParams['encoding'] = $this->apiClient->getSerializer()->toFormValue($encoding);
        }
        // form params
        if ($delimiter !== null) {
            $formParams['delimiter'] = $this->apiClient->getSerializer()->toFormValue($delimiter);
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
                '\backend\modules\voximplant\models\AppendToCallListAPIResponse',
                '/CreateManualCallList'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AppendToCallListAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AppendToCallListAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCallListDetails
     *
     * 
     *
     * @param float $list_id The list ID. (required)
     * @param float $count Maximum number of entries in the result (optional)
     * @param float $offset Offset from beginning of the list (optional)
     * @param string $output Output format (CSV/JSON/XLS). Default CSV (optional)
     * @param string $encoding Encoding of the output file. Default UTF-8 (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return \backend\modules\voximplant\models\GetCallListDetailsAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getCallListDetails($list_id, $count = null, $offset = null, $output = null, $encoding = null, $delimiter = null)
    {
        list($response) = $this->getCallListDetailsWithHttpInfo($list_id, $count, $offset, $output, $encoding, $delimiter);
        return $response;
    }

    /**
     * Operation getCallListDetailsWithHttpInfo
     *
     * 
     *
     * @param float $list_id The list ID. (required)
     * @param float $count Maximum number of entries in the result (optional)
     * @param float $offset Offset from beginning of the list (optional)
     * @param string $output Output format (CSV/JSON/XLS). Default CSV (optional)
     * @param string $encoding Encoding of the output file. Default UTF-8 (optional)
     * @param string $delimiter Separator values. The default is &#x60;;&#x60; (optional)
     * @return Array of \backend\modules\voximplant\models\GetCallListDetailsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getCallListDetailsWithHttpInfo($list_id, $count = null, $offset = null, $output = null, $encoding = null, $delimiter = null)
    {
        // verify the required parameter 'list_id' is set
        if ($list_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_id when calling getCallListDetails');
        }
        // parse inputs
        $resourcePath = "/GetCallListDetails";
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
        if ($list_id !== null) {
            $formParams['list_id'] = $this->apiClient->getSerializer()->toFormValue($list_id);
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
        if ($output !== null) {
            $formParams['output'] = $this->apiClient->getSerializer()->toFormValue($output);
        }
        // form params
        if ($encoding !== null) {
            $formParams['encoding'] = $this->apiClient->getSerializer()->toFormValue($encoding);
        }
        // form params
        if ($delimiter !== null) {
            $formParams['delimiter'] = $this->apiClient->getSerializer()->toFormValue($delimiter);
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
                '\backend\modules\voximplant\models\GetCallListDetailsAPIResponse',
                '/GetCallListDetails'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetCallListDetailsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetCallListDetailsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCallLists
     *
     * 
     *
     * @param string $name Find call lists by name (optional)
     * @param bool $is_active Find only active call lists (optional)
     * @param string $from_date The UTC from date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param string $to_date The UTC to date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param string $type_list The type of call list. Available values: AUTOMATIC and MANUAL (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetCallListsAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getCallLists($name = null, $is_active = null, $from_date = null, $to_date = null, $type_list = null, $count = null, $offset = null)
    {
        list($response) = $this->getCallListsWithHttpInfo($name, $is_active, $from_date, $to_date, $type_list, $count, $offset);
        return $response;
    }

    /**
     * Operation getCallListsWithHttpInfo
     *
     * 
     *
     * @param string $name Find call lists by name (optional)
     * @param bool $is_active Find only active call lists (optional)
     * @param string $from_date The UTC from date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param string $to_date The UTC to date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param string $type_list The type of call list. Available values: AUTOMATIC and MANUAL (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \backend\modules\voximplant\models\GetCallListsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getCallListsWithHttpInfo($name = null, $is_active = null, $from_date = null, $to_date = null, $type_list = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetCallLists";
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
        if ($name !== null) {
            $formParams['name'] = $this->apiClient->getSerializer()->toFormValue($name);
        }
        // form params
        if ($is_active !== null) {
            $formParams['is_active'] = $this->apiClient->getSerializer()->toFormValue($is_active);
        }
        // form params
        if ($from_date !== null) {
            $formParams['from_date'] = $this->apiClient->getSerializer()->toFormValue($from_date);
        }
        // form params
        if ($to_date !== null) {
            $formParams['to_date'] = $this->apiClient->getSerializer()->toFormValue($to_date);
        }
        // form params
        if ($type_list !== null) {
            $formParams['type_list'] = $this->apiClient->getSerializer()->toFormValue($type_list);
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
                '\backend\modules\voximplant\models\GetCallListsAPIResponse',
                '/GetCallLists'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetCallListsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetCallListsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation recoverCallList
     *
     * 
     *
     * @param float $list_id The list Id. (required)
     * @return \backend\modules\voximplant\models\RecoverCallListAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function recoverCallList($list_id)
    {
        list($response) = $this->recoverCallListWithHttpInfo($list_id);
        return $response;
    }

    /**
     * Operation recoverCallListWithHttpInfo
     *
     * 
     *
     * @param float $list_id The list Id. (required)
     * @return Array of \backend\modules\voximplant\models\RecoverCallListAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function recoverCallListWithHttpInfo($list_id)
    {
        // verify the required parameter 'list_id' is set
        if ($list_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_id when calling recoverCallList');
        }
        // parse inputs
        $resourcePath = "/RecoverCallList";
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
        if ($list_id !== null) {
            $formParams['list_id'] = $this->apiClient->getSerializer()->toFormValue($list_id);
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
                '\backend\modules\voximplant\models\RecoverCallListAPIResponse',
                '/RecoverCallList'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\RecoverCallListAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\RecoverCallListAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation startNextCallTask
     *
     * 
     *
     * @param float $list_id The list Id. Сan use a set of identifiers with the separator \&quot;;\&quot; (required)
     * @param string $custom_params The custom param. Use to transfer the call initiator parameters to the scenario. (optional)
     * @return \backend\modules\voximplant\models\StartNextCallTaskAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function startNextCallTask($list_id, $custom_params = null)
    {
        list($response) = $this->startNextCallTaskWithHttpInfo($list_id, $custom_params);
        return $response;
    }

    /**
     * Operation startNextCallTaskWithHttpInfo
     *
     * 
     *
     * @param float $list_id The list Id. Сan use a set of identifiers with the separator \&quot;;\&quot; (required)
     * @param string $custom_params The custom param. Use to transfer the call initiator parameters to the scenario. (optional)
     * @return Array of \backend\modules\voximplant\models\StartNextCallTaskAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function startNextCallTaskWithHttpInfo($list_id, $custom_params = null)
    {
        // verify the required parameter 'list_id' is set
        if ($list_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_id when calling startNextCallTask');
        }
        // parse inputs
        $resourcePath = "/StartNextCallTask";
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
        if ($list_id !== null) {
            $formParams['list_id'] = $this->apiClient->getSerializer()->toFormValue($list_id);
        }
        // form params
        if ($custom_params !== null) {
            $formParams['custom_params'] = $this->apiClient->getSerializer()->toFormValue($custom_params);
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
                '\backend\modules\voximplant\models\StartNextCallTaskAPIResponse',
                '/StartNextCallTask'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\StartNextCallTaskAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\StartNextCallTaskAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation stopCallListProcessing
     *
     * 
     *
     * @param float $list_id The list Id. (required)
     * @return \backend\modules\voximplant\models\StopCallListProcessingAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function stopCallListProcessing($list_id)
    {
        list($response) = $this->stopCallListProcessingWithHttpInfo($list_id);
        return $response;
    }

    /**
     * Operation stopCallListProcessingWithHttpInfo
     *
     * 
     *
     * @param float $list_id The list Id. (required)
     * @return Array of \backend\modules\voximplant\models\StopCallListProcessingAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function stopCallListProcessingWithHttpInfo($list_id)
    {
        // verify the required parameter 'list_id' is set
        if ($list_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $list_id when calling stopCallListProcessing');
        }
        // parse inputs
        $resourcePath = "/StopCallListProcessing";
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
        if ($list_id !== null) {
            $formParams['list_id'] = $this->apiClient->getSerializer()->toFormValue($list_id);
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
                '\backend\modules\voximplant\models\StopCallListProcessingAPIResponse',
                '/StopCallListProcessing'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\StopCallListProcessingAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\StopCallListProcessingAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
