<?php

namespace backend\modules\voximplant\lib\Api;
use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;

class ManagingHistoryApi
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
     * @return ManagingHistoryApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation downloadHistoryReport
     *
     * 
     *
     * @param float $history_report_id The history report ID. (required)
     * @return object
     * @throws ApiException on non-2xx response
     */
    public function downloadHistoryReport($history_report_id)
    {
        list($response) = $this->downloadHistoryReportWithHttpInfo($history_report_id);
        return $response;
    }

    /**
     * Operation downloadHistoryReportWithHttpInfo
     *
     * 
     *
     * @param float $history_report_id The history report ID. (required)
     * @return Array of object, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function downloadHistoryReportWithHttpInfo($history_report_id)
    {
        // verify the required parameter 'history_report_id' is set
        if ($history_report_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $history_report_id when calling downloadHistoryReport');
        }
        // parse inputs
        $resourcePath = "/DownloadHistoryReport";
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
        if ($history_report_id !== null) {
            $formParams['history_report_id'] = $this->apiClient->getSerializer()->toFormValue($history_report_id);
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
                'object',
                '/DownloadHistoryReport'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, 'object', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), 'object', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getACDHistory
     *
     * 
     *
     * @param string $from_date The UTC from date filter in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $to_date The UTC to date filter in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $acd_session_history_id The ACD session history ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $acd_queue_id The ACD queue ID list to filter separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $user_id The user ID list to filter separated by the &#x60;;&#x60; symbol. (optional)
     * @param bool $operator_hangup Set true to get the calls terminated by the operator. (optional)
     * @param bool $unserviced The unserviced calls by the operator. (optional)
     * @param float $min_waiting_time The min waiting time filter. (optional)
     * @param bool $rejected The rejected calls by the &#x60;max_queue_size&#x60;, &#x60;max_waiting_time&#x60; threshold. (optional)
     * @param bool $with_events Set true to get the binding events. (optional)
     * @param bool $with_header Set false to get a CSV file without the column names if the output&#x3D;csv (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $output The output format. The following values available: json, csv (optional)
     * @return backend\modules\voximplant\models\GetACDHistoryAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getACDHistory($from_date, $to_date, $acd_session_history_id = null, $acd_queue_id = null, $user_id = null, $operator_hangup = null, $unserviced = null, $min_waiting_time = null, $rejected = null, $with_events = null, $with_header = null, $desc_order = null, $count = null, $offset = null, $output = null)
    {
        list($response) = $this->getACDHistoryWithHttpInfo($from_date, $to_date, $acd_session_history_id, $acd_queue_id, $user_id, $operator_hangup, $unserviced, $min_waiting_time, $rejected, $with_events, $with_header, $desc_order, $count, $offset, $output);
        return $response;
    }

    /**
     * Operation getACDHistoryWithHttpInfo
     *
     * 
     *
     * @param string $from_date The UTC from date filter in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $to_date The UTC to date filter in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $acd_session_history_id The ACD session history ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $acd_queue_id The ACD queue ID list to filter separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $user_id The user ID list to filter separated by the &#x60;;&#x60; symbol. (optional)
     * @param bool $operator_hangup Set true to get the calls terminated by the operator. (optional)
     * @param bool $unserviced The unserviced calls by the operator. (optional)
     * @param float $min_waiting_time The min waiting time filter. (optional)
     * @param bool $rejected The rejected calls by the &#x60;max_queue_size&#x60;, &#x60;max_waiting_time&#x60; threshold. (optional)
     * @param bool $with_events Set true to get the binding events. (optional)
     * @param bool $with_header Set false to get a CSV file without the column names if the output&#x3D;csv (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $output The output format. The following values available: json, csv (optional)
     * @return Array of \backend\modules\voximplant\models\GetACDHistoryAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getACDHistoryWithHttpInfo($from_date, $to_date, $acd_session_history_id = null, $acd_queue_id = null, $user_id = null, $operator_hangup = null, $unserviced = null, $min_waiting_time = null, $rejected = null, $with_events = null, $with_header = null, $desc_order = null, $count = null, $offset = null, $output = null)
    {
        // verify the required parameter 'from_date' is set
        if ($from_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $from_date when calling getACDHistory');
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_date when calling getACDHistory');
        }
        // parse inputs
        $resourcePath = "/GetACDHistory";
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
        if ($from_date !== null) {
            $formParams['from_date'] = $this->apiClient->getSerializer()->toFormValue($from_date);
        }
        // form params
        if ($to_date !== null) {
            $formParams['to_date'] = $this->apiClient->getSerializer()->toFormValue($to_date);
        }
        // form params
        if ($acd_session_history_id !== null) {
            $formParams['acd_session_history_id'] = $this->apiClient->getSerializer()->toFormValue($acd_session_history_id);
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
        if ($operator_hangup !== null) {
            $formParams['operator_hangup'] = $this->apiClient->getSerializer()->toFormValue($operator_hangup);
        }
        // form params
        if ($unserviced !== null) {
            $formParams['unserviced'] = $this->apiClient->getSerializer()->toFormValue($unserviced);
        }
        // form params
        if ($min_waiting_time !== null) {
            $formParams['min_waiting_time'] = $this->apiClient->getSerializer()->toFormValue($min_waiting_time);
        }
        // form params
        if ($rejected !== null) {
            $formParams['rejected'] = $this->apiClient->getSerializer()->toFormValue($rejected);
        }
        // form params
        if ($with_events !== null) {
            $formParams['with_events'] = $this->apiClient->getSerializer()->toFormValue($with_events);
        }
        // form params
        if ($with_header !== null) {
            $formParams['with_header'] = $this->apiClient->getSerializer()->toFormValue($with_header);
        }
        // form params
        if ($desc_order !== null) {
            $formParams['desc_order'] = $this->apiClient->getSerializer()->toFormValue($desc_order);
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
                '\backend\modules\voximplant\models\GetACDHistoryAPIResponse',
                '/GetACDHistory'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetACDHistoryAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetACDHistoryAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getCallHistory
     *
     * 
     *
     * @param string $from_date The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $to_date The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $timezone The selected timezone or the &#x60;auto&#x60; value (will be used the account location). (optional)
     * @param string $call_session_history_id The call session history ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name, can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $rule_name The rule name to filter. (optional)
     * @param string $remote_number The remote number list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $local_number The local number list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $call_session_history_custom_data The custom_data to filter sessions. (optional)
     * @param bool $with_calls Set true to get binding calls. (optional)
     * @param bool $with_records Set true to get binding records. (optional)
     * @param bool $with_other_resources Set true to get other resources usage. (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_calls_only Set true to get the children account calls only. (optional)
     * @param bool $with_header Set false to get a CSV file without the column names if the output&#x3D;csv (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $output The output format. The following values available: json, csv (optional)
     * @param bool $is_async Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport. (optional)
     * @return \backend\modules\voximplant\models\GetCallHistoryAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getCallHistory($from_date, $to_date, $timezone = null, $call_session_history_id = null, $application_id = null, $application_name = null, $user_id = null, $rule_name = null, $remote_number = null, $local_number = null, $call_session_history_custom_data = null, $with_calls = null, $with_records = null, $with_other_resources = null, $child_account_id = null, $children_calls_only = null, $with_header = null, $desc_order = null, $count = null, $offset = null, $output = null, $is_async = null)
    {
        list($response) = $this->getCallHistoryWithHttpInfo($from_date, $to_date, $timezone, $call_session_history_id, $application_id, $application_name, $user_id, $rule_name, $remote_number, $local_number, $call_session_history_custom_data, $with_calls, $with_records, $with_other_resources, $child_account_id, $children_calls_only, $with_header, $desc_order, $count, $offset, $output, $is_async);
        return $response;
    }

    /**
     * Operation getCallHistoryWithHttpInfo
     *
     * 
     *
     * @param string $from_date The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $to_date The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $timezone The selected timezone or the &#x60;auto&#x60; value (will be used the account location). (optional)
     * @param string $call_session_history_id The call session history ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name, can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $rule_name The rule name to filter. (optional)
     * @param string $remote_number The remote number list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $local_number The local number list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $call_session_history_custom_data The custom_data to filter sessions. (optional)
     * @param bool $with_calls Set true to get binding calls. (optional)
     * @param bool $with_records Set true to get binding records. (optional)
     * @param bool $with_other_resources Set true to get other resources usage. (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_calls_only Set true to get the children account calls only. (optional)
     * @param bool $with_header Set false to get a CSV file without the column names if the output&#x3D;csv (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $output The output format. The following values available: json, csv (optional)
     * @param bool $is_async Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport. (optional)
     * @return Array of \backend\modules\voximplant\models\GetCallHistoryAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getCallHistoryWithHttpInfo($from_date, $to_date, $timezone = null, $call_session_history_id = null, $application_id = null, $application_name = null, $user_id = null, $rule_name = null, $remote_number = null, $local_number = null, $call_session_history_custom_data = null, $with_calls = null, $with_records = null, $with_other_resources = null, $child_account_id = null, $children_calls_only = null, $with_header = null, $desc_order = null, $count = null, $offset = null, $output = null, $is_async = null)
    {
        // verify the required parameter 'from_date' is set
        if ($from_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $from_date when calling getCallHistory');
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_date when calling getCallHistory');
        }
        // parse inputs
        $resourcePath = "/GetCallHistory";
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
        if ($from_date !== null) {
            $formParams['from_date'] = $this->apiClient->getSerializer()->toFormValue($from_date);
        }
        // form params
        if ($to_date !== null) {
            $formParams['to_date'] = $this->apiClient->getSerializer()->toFormValue($to_date);
        }
        // form params
        if ($timezone !== null) {
            $formParams['timezone'] = $this->apiClient->getSerializer()->toFormValue($timezone);
        }
        // form params
        if ($call_session_history_id !== null) {
            $formParams['call_session_history_id'] = $this->apiClient->getSerializer()->toFormValue($call_session_history_id);
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
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
        }
        // form params
        if ($remote_number !== null) {
            $formParams['remote_number'] = $this->apiClient->getSerializer()->toFormValue($remote_number);
        }
        // form params
        if ($local_number !== null) {
            $formParams['local_number'] = $this->apiClient->getSerializer()->toFormValue($local_number);
        }
        // form params
        if ($call_session_history_custom_data !== null) {
            $formParams['call_session_history_custom_data'] = $this->apiClient->getSerializer()->toFormValue($call_session_history_custom_data);
        }
        // form params
        if ($with_calls !== null) {
            $formParams['with_calls'] = $this->apiClient->getSerializer()->toFormValue($with_calls);
        }
        // form params
        if ($with_records !== null) {
            $formParams['with_records'] = $this->apiClient->getSerializer()->toFormValue($with_records);
        }
        // form params
        if ($with_other_resources !== null) {
            $formParams['with_other_resources'] = $this->apiClient->getSerializer()->toFormValue($with_other_resources);
        }
        // form params
        if ($child_account_id !== null) {
            $formParams['child_account_id'] = $this->apiClient->getSerializer()->toFormValue($child_account_id);
        }
        // form params
        if ($children_calls_only !== null) {
            $formParams['children_calls_only'] = $this->apiClient->getSerializer()->toFormValue($children_calls_only);
        }
        // form params
        if ($with_header !== null) {
            $formParams['with_header'] = $this->apiClient->getSerializer()->toFormValue($with_header);
        }
        // form params
        if ($desc_order !== null) {
            $formParams['desc_order'] = $this->apiClient->getSerializer()->toFormValue($desc_order);
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
        if ($is_async !== null) {
            $formParams['is_async'] = $this->apiClient->getSerializer()->toFormValue($is_async);
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
                '\backend\modules\voximplant\models\GetCallHistoryAPIResponse',
                '/GetCallHistory'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetCallHistoryAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetCallHistoryAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getHistoryReports
     *
     * 
     *
     * @param float $history_report_id The history report ID to filter (optional)
     * @param string $history_type The history report type list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. The following values are possible: calls, transactions. (optional)
     * @param string $created_from The UTC creation from date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param string $created_to The UTC creation to date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param bool $is_completed Is report completed? (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetHistoryReportsAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getHistoryReports($history_report_id = null, $history_type = null, $created_from = null, $created_to = null, $is_completed = null, $desc_order = null, $count = null, $offset = null)
    {
        list($response) = $this->getHistoryReportsWithHttpInfo($history_report_id, $history_type, $created_from, $created_to, $is_completed, $desc_order, $count, $offset);
        return $response;
    }

    /**
     * Operation getHistoryReportsWithHttpInfo
     *
     * 
     *
     * @param float $history_report_id The history report ID to filter (optional)
     * @param string $history_type The history report type list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. The following values are possible: calls, transactions. (optional)
     * @param string $created_from The UTC creation from date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param string $created_to The UTC creation to date filter in format YYYY-MM-DD HH:mm:SS (optional)
     * @param bool $is_completed Is report completed? (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \backend\modules\voximplant\models\GetHistoryReportsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getHistoryReportsWithHttpInfo($history_report_id = null, $history_type = null, $created_from = null, $created_to = null, $is_completed = null, $desc_order = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetHistoryReports";
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
        if ($history_report_id !== null) {
            $formParams['history_report_id'] = $this->apiClient->getSerializer()->toFormValue($history_report_id);
        }
        // form params
        if ($history_type !== null) {
            $formParams['history_type'] = $this->apiClient->getSerializer()->toFormValue($history_type);
        }
        // form params
        if ($created_from !== null) {
            $formParams['created_from'] = $this->apiClient->getSerializer()->toFormValue($created_from);
        }
        // form params
        if ($created_to !== null) {
            $formParams['created_to'] = $this->apiClient->getSerializer()->toFormValue($created_to);
        }
        // form params
        if ($is_completed !== null) {
            $formParams['is_completed'] = $this->apiClient->getSerializer()->toFormValue($is_completed);
        }
        // form params
        if ($desc_order !== null) {
            $formParams['desc_order'] = $this->apiClient->getSerializer()->toFormValue($desc_order);
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
                '\backend\modules\voximplant\models\GetHistoryReportsAPIResponse',
                '/GetHistoryReports'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetHistoryReportsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetHistoryReportsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getTransactionHistory
     *
     * 
     *
     * @param string $from_date The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $to_date The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $timezone The selected timezone or the &#x60;auto&#x60; value (will be used the account location). (optional)
     * @param string $transaction_id The transaction ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $payment_reference The external payment reference to filter. (optional)
     * @param string $transaction_type The transaction type list separated by the &#x60;;&#x60; symbol. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund. (optional)
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_transactions_only Set true to get the children account transactions only. (optional)
     * @param bool $users_transactions_only Set true to get the users&#x60; transactions only. (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $output The output format. The following values available: json, csv (optional)
     * @param bool $is_async Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport. (optional)
     * @return \backend\modules\voximplant\models\GetTransactionHistoryAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getTransactionHistory($from_date, $to_date, $timezone = null, $transaction_id = null, $payment_reference = null, $transaction_type = null, $user_id = null, $child_account_id = null, $children_transactions_only = null, $users_transactions_only = null, $desc_order = null, $count = null, $offset = null, $output = null, $is_async = null)
    {
        list($response) = $this->getTransactionHistoryWithHttpInfo($from_date, $to_date, $timezone, $transaction_id, $payment_reference, $transaction_type, $user_id, $child_account_id, $children_transactions_only, $users_transactions_only, $desc_order, $count, $offset, $output, $is_async);
        return $response;
    }

    /**
     * Operation getTransactionHistoryWithHttpInfo
     *
     * 
     *
     * @param string $from_date The from date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $to_date The to date in the selected timezone in format YYYY-MM-DD HH:mm:SS (required)
     * @param string $timezone The selected timezone or the &#x60;auto&#x60; value (will be used the account location). (optional)
     * @param string $transaction_id The transaction ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $payment_reference The external payment reference to filter. (optional)
     * @param string $transaction_type The transaction type list separated by the &#x60;;&#x60; symbol. The following values are possible: periodic_charge, resource_charge, money_distribution, subscription_charge, subscription_installation_charge, card_periodic_payment, card_overrun_payment, card_payment, robokassa_payment, gift, add_money, subscription_cancel, adjustment, wire_transfer, refund. (optional)
     * @param string $user_id The user ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_transactions_only Set true to get the children account transactions only. (optional)
     * @param bool $users_transactions_only Set true to get the users&#x60; transactions only. (optional)
     * @param bool $desc_order Set true to get records in the descent order. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @param string $output The output format. The following values available: json, csv (optional)
     * @param bool $is_async Set true to get records in the asynchronous mode (for csv output only). See GetHistoryReports, DownloadHistoryReport. (optional)
     * @return Array of \backend\modules\voximplant\models\GetTransactionHistoryAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getTransactionHistoryWithHttpInfo($from_date, $to_date, $timezone = null, $transaction_id = null, $payment_reference = null, $transaction_type = null, $user_id = null, $child_account_id = null, $children_transactions_only = null, $users_transactions_only = null, $desc_order = null, $count = null, $offset = null, $output = null, $is_async = null)
    {
        // verify the required parameter 'from_date' is set
        if ($from_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $from_date when calling getTransactionHistory');
        }
        // verify the required parameter 'to_date' is set
        if ($to_date === null) {
            throw new \InvalidArgumentException('Missing the required parameter $to_date when calling getTransactionHistory');
        }
        // parse inputs
        $resourcePath = "/GetTransactionHistory";
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
        if ($from_date !== null) {
            $formParams['from_date'] = $this->apiClient->getSerializer()->toFormValue($from_date);
        }
        // form params
        if ($to_date !== null) {
            $formParams['to_date'] = $this->apiClient->getSerializer()->toFormValue($to_date);
        }
        // form params
        if ($timezone !== null) {
            $formParams['timezone'] = $this->apiClient->getSerializer()->toFormValue($timezone);
        }
        // form params
        if ($transaction_id !== null) {
            $formParams['transaction_id'] = $this->apiClient->getSerializer()->toFormValue($transaction_id);
        }
        // form params
        if ($payment_reference !== null) {
            $formParams['payment_reference'] = $this->apiClient->getSerializer()->toFormValue($payment_reference);
        }
        // form params
        if ($transaction_type !== null) {
            $formParams['transaction_type'] = $this->apiClient->getSerializer()->toFormValue($transaction_type);
        }
        // form params
        if ($user_id !== null) {
            $formParams['user_id'] = $this->apiClient->getSerializer()->toFormValue($user_id);
        }
        // form params
        if ($child_account_id !== null) {
            $formParams['child_account_id'] = $this->apiClient->getSerializer()->toFormValue($child_account_id);
        }
        // form params
        if ($children_transactions_only !== null) {
            $formParams['children_transactions_only'] = $this->apiClient->getSerializer()->toFormValue($children_transactions_only);
        }
        // form params
        if ($users_transactions_only !== null) {
            $formParams['users_transactions_only'] = $this->apiClient->getSerializer()->toFormValue($users_transactions_only);
        }
        // form params
        if ($desc_order !== null) {
            $formParams['desc_order'] = $this->apiClient->getSerializer()->toFormValue($desc_order);
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
        if ($is_async !== null) {
            $formParams['is_async'] = $this->apiClient->getSerializer()->toFormValue($is_async);
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
        if (strlen($apiKey) !== 0) {
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
                '\backend\modules\voximplant\models\GetTransactionHistoryAPIResponse',
                '/GetTransactionHistory'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetTransactionHistoryAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetTransactionHistoryAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
