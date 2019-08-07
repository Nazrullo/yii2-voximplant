<?php


namespace backend\modules\voximplant\lib\Api;

use \backend\modules\voximplant\lib\Configuration;
use \backend\modules\voximplant\lib\ApiClient;
use \backend\modules\voximplant\lib\ApiException;
use \backend\modules\voximplant\lib\ObjectSerializer;


class ManagingScenariosApi
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
     * @return ManagingScenariosApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation addScenario
     *
     * 
     *
     * @param string $scenario_name The scenario name. The length must be less than 30 (required)
     * @param string $scenario_script The scenario text. The length must be less than 128 KB. (required)
     * @return \backend\modules\voximplant\models\AddScenarioAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function addScenario($scenario_name, $scenario_script)
    {
        list($response) = $this->addScenarioWithHttpInfo($scenario_name, $scenario_script);
        return $response;
    }

    /**
     * Operation addScenarioWithHttpInfo
     *
     * 
     *
     * @param string $scenario_name The scenario name. The length must be less than 30 (required)
     * @param string $scenario_script The scenario text. The length must be less than 128 KB. (required)
     * @return Array of \backend\modules\voximplant\models\AddScenarioAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function addScenarioWithHttpInfo($scenario_name, $scenario_script)
    {
        // verify the required parameter 'scenario_name' is set
        if ($scenario_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scenario_name when calling addScenario');
        }
        // verify the required parameter 'scenario_script' is set
        if ($scenario_script === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scenario_script when calling addScenario');
        }
        // parse inputs
        $resourcePath = "/AddScenario";
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
        if ($scenario_name !== null) {
            $formParams['scenario_name'] = $this->apiClient->getSerializer()->toFormValue($scenario_name);
        }
        // form params
        if ($scenario_script !== null) {
            $formParams['scenario_script'] = $this->apiClient->getSerializer()->toFormValue($scenario_script);
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
                '\backend\modules\voximplant\models\AddScenarioAPIResponse',
                '/AddScenario'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AddScenarioAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AddScenarioAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation bindScenario
     *
     * 
     *
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $scenario_name Can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. The scenario name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param float $rule_id The rule ID. (optional)
     * @param string $rule_name The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function bindScenario($scenario_id = null, $scenario_name = null, $rule_id = null, $rule_name = null, $application_id = null, $application_name = null, $bind = null)
    {
        list($response) = $this->bindScenarioWithHttpInfo($scenario_id, $scenario_name, $rule_id, $rule_name, $application_id, $application_name, $bind);
        return $response;
    }

    /**
     * Operation bindScenarioWithHttpInfo
     *
     * 
     *
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $scenario_name Can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. The scenario name list separated by the &#x60;;&#x60; symbol. (optional)
     * @param float $rule_id The rule ID. (optional)
     * @param string $rule_name The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function bindScenarioWithHttpInfo($scenario_id = null, $scenario_name = null, $rule_id = null, $rule_name = null, $application_id = null, $application_name = null, $bind = null)
    {
        // parse inputs
        $resourcePath = "/BindScenario";
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
        if ($scenario_id !== null) {
            $formParams['scenario_id'] = $this->apiClient->getSerializer()->toFormValue($scenario_id);
        }
        // form params
        if ($scenario_name !== null) {
            $formParams['scenario_name'] = $this->apiClient->getSerializer()->toFormValue($scenario_name);
        }
        // form params
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
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
                '\backend\modules\voximplant\models\ActivateCallerIDAPIResponse',
                '/BindScenario'
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
     * Operation delScenario
     *
     * 
     *
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (required)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function delScenario($scenario_id)
    {
        list($response) = $this->delScenarioWithHttpInfo($scenario_id);
        return $response;
    }

    /**
     * Operation delScenarioWithHttpInfo
     *
     * 
     *
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (required)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function delScenarioWithHttpInfo($scenario_id)
    {
        // verify the required parameter 'scenario_id' is set
        if ($scenario_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $scenario_id when calling delScenario');
        }
        // parse inputs
        $resourcePath = "/DelScenario";
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
        if ($scenario_id !== null) {
            $formParams['scenario_id'] = $this->apiClient->getSerializer()->toFormValue($scenario_id);
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
                '/DelScenario'
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
     * Operation getScenarios
     *
     * 
     *
     * @param float $scenario_id The scenario ID to filter (optional)
     * @param bool $with_script Set true to get the scenario text. You must specify the &#x60;scenario_id&#x60; too! (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetScenariosAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getScenarios($scenario_id = null, $with_script = null, $count = null, $offset = null)
    {
        list($response) = $this->getScenariosWithHttpInfo($scenario_id, $with_script, $count, $offset);
        return $response;
    }

    /**
     * Operation getScenariosWithHttpInfo
     *
     * 
     *
     * @param float $scenario_id The scenario ID to filter (optional)
     * @param bool $with_script Set true to get the scenario text. You must specify the &#x60;scenario_id&#x60; too! (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \backend\modules\voximplant\models\GetScenariosAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getScenariosWithHttpInfo($scenario_id = null, $with_script = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetScenarios";
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
        if ($scenario_id !== null) {
            $formParams['scenario_id'] = $this->apiClient->getSerializer()->toFormValue($scenario_id);
        }
        // form params
        if ($with_script !== null) {
            $formParams['with_script'] = $this->apiClient->getSerializer()->toFormValue($with_script);
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
                '\backend\modules\voximplant\models\GetScenariosAPIResponse',
                '/GetScenarios'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetScenariosAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetScenariosAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation reorderScenarios
     *
     * 
     *
     * @param float $rule_id The rule ID. (optional)
     * @param string $rule_name The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. (optional)
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function reorderScenarios($rule_id = null, $rule_name = null, $scenario_id = null)
    {
        list($response) = $this->reorderScenariosWithHttpInfo($rule_id, $rule_name, $scenario_id);
        return $response;
    }

    /**
     * Operation reorderScenariosWithHttpInfo
     *
     * 
     *
     * @param float $rule_id The rule ID. (optional)
     * @param string $rule_name The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. (optional)
     * @param string $scenario_id The scenario ID list separated by the &#x60;;&#x60; symbol. (optional)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function reorderScenariosWithHttpInfo($rule_id = null, $rule_name = null, $scenario_id = null)
    {
        // parse inputs
        $resourcePath = "/ReorderScenarios";
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
        if ($rule_name !== null) {
            $formParams['rule_name'] = $this->apiClient->getSerializer()->toFormValue($rule_name);
        }
        // form params
        if ($scenario_id !== null) {
            $formParams['scenario_id'] = $this->apiClient->getSerializer()->toFormValue($scenario_id);
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
                '/ReorderScenarios'
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
     * Operation setScenarioInfo
     *
     * 
     *
     * @param float $scenario_id The scenario ID. (optional)
     * @param string $required_scenario_name The name of the scenario to edit, can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. (optional)
     * @param string $scenario_name The new scenario name. The length must be less than 30 (optional)
     * @param string $scenario_script The new scenario text. The length must be less than 128 KB. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function setScenarioInfo($scenario_id = null, $required_scenario_name = null, $scenario_name = null, $scenario_script = null)
    {
        list($response) = $this->setScenarioInfoWithHttpInfo($scenario_id, $required_scenario_name, $scenario_name, $scenario_script);
        return $response;
    }

    /**
     * Operation setScenarioInfoWithHttpInfo
     *
     * 
     *
     * @param float $scenario_id The scenario ID. (optional)
     * @param string $required_scenario_name The name of the scenario to edit, can be used instead of &lt;b&gt;scenario_id&lt;/b&gt;. (optional)
     * @param string $scenario_name The new scenario name. The length must be less than 30 (optional)
     * @param string $scenario_script The new scenario text. The length must be less than 128 KB. (optional)
     * @return Array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setScenarioInfoWithHttpInfo($scenario_id = null, $required_scenario_name = null, $scenario_name = null, $scenario_script = null)
    {
        // parse inputs
        $resourcePath = "/SetScenarioInfo";
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
        if ($scenario_id !== null) {
            $formParams['scenario_id'] = $this->apiClient->getSerializer()->toFormValue($scenario_id);
        }
        // form params
        if ($required_scenario_name !== null) {
            $formParams['required_scenario_name'] = $this->apiClient->getSerializer()->toFormValue($required_scenario_name);
        }
        // form params
        if ($scenario_name !== null) {
            $formParams['scenario_name'] = $this->apiClient->getSerializer()->toFormValue($scenario_name);
        }
        // form params
        if ($scenario_script !== null) {
            $formParams['scenario_script'] = $this->apiClient->getSerializer()->toFormValue($scenario_script);
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
                '/SetScenarioInfo'
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
     * Operation startConference
     *
     * 
     *
     * @param string $conference_name The conference name. The name length must be less than 50 symbols. (required)
     * @param float $rule_id The rule ID. (required)
     * @param float $user_id The user ID. Run the scripts from the user if set. (optional)
     * @param string $user_name The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. Run the scripts from the user if set. (optional)
     * @param string $script_custom_data The script custom data (like a script argument). (optional)
     * @param string $reference_ip IPv4 that will be used to find nearest media server. (optional)
     * @return \backend\modules\voximplant\models\StartConferenceAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function startConference($conference_name, $rule_id, $user_id = null, $user_name = null, $script_custom_data = null, $reference_ip = null)
    {
        list($response) = $this->startConferenceWithHttpInfo($conference_name, $rule_id, $user_id, $user_name, $script_custom_data, $reference_ip);
        return $response;
    }

    /**
     * Operation startConferenceWithHttpInfo
     *
     * 
     *
     * @param string $conference_name The conference name. The name length must be less than 50 symbols. (required)
     * @param float $rule_id The rule ID. (required)
     * @param float $user_id The user ID. Run the scripts from the user if set. (optional)
     * @param string $user_name The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. Run the scripts from the user if set. (optional)
     * @param string $script_custom_data The script custom data (like a script argument). (optional)
     * @param string $reference_ip IPv4 that will be used to find nearest media server. (optional)
     * @return Array of \backend\modules\voximplant\models\StartConferenceAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function startConferenceWithHttpInfo($conference_name, $rule_id, $user_id = null, $user_name = null, $script_custom_data = null, $reference_ip = null)
    {
        // verify the required parameter 'conference_name' is set
        if ($conference_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $conference_name when calling startConference');
        }
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling startConference');
        }
        // parse inputs
        $resourcePath = "/StartConference";
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
        if ($conference_name !== null) {
            $formParams['conference_name'] = $this->apiClient->getSerializer()->toFormValue($conference_name);
        }
        // form params
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
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
        if ($script_custom_data !== null) {
            $formParams['script_custom_data'] = $this->apiClient->getSerializer()->toFormValue($script_custom_data);
        }
        // form params
        if ($reference_ip !== null) {
            $formParams['reference_ip'] = $this->apiClient->getSerializer()->toFormValue($reference_ip);
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
                '\backend\modules\voximplant\models\StartConferenceAPIResponse',
                '/StartConference'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\StartConferenceAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\StartConferenceAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation startScenarios
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param float $user_id The user ID. Run the scripts from the user if set. (optional)
     * @param string $user_name The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. Run the scripts from the user if set. (optional)
     * @param string $script_custom_data The script custom data (like a script argument). (optional)
     * @param string $reference_ip IPv4 that will be used to find nearest media server. (optional)
     * @return \backend\modules\voximplant\models\StartScenariosAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function startScenarios($rule_id, $user_id = null, $user_name = null, $script_custom_data = null, $reference_ip = null)
    {
        list($response) = $this->startScenariosWithHttpInfo($rule_id, $user_id, $user_name, $script_custom_data, $reference_ip);
        return $response;
    }

    /**
     * Operation startScenariosWithHttpInfo
     *
     * 
     *
     * @param float $rule_id The rule ID. (required)
     * @param float $user_id The user ID. Run the scripts from the user if set. (optional)
     * @param string $user_name The user name that can be used instead of &lt;b&gt;user_id&lt;/b&gt;. Run the scripts from the user if set. (optional)
     * @param string $script_custom_data The script custom data (like a script argument). (optional)
     * @param string $reference_ip IPv4 that will be used to find nearest media server. (optional)
     * @return Array of \backend\modules\voximplant\models\StartScenariosAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function startScenariosWithHttpInfo($rule_id, $user_id = null, $user_name = null, $script_custom_data = null, $reference_ip = null)
    {
        // verify the required parameter 'rule_id' is set
        if ($rule_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $rule_id when calling startScenarios');
        }
        // parse inputs
        $resourcePath = "/StartScenarios";
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
        if ($rule_id !== null) {
            $formParams['rule_id'] = $this->apiClient->getSerializer()->toFormValue($rule_id);
        }
        // form params
        if ($script_custom_data !== null) {
            $formParams['script_custom_data'] = $this->apiClient->getSerializer()->toFormValue($script_custom_data);
        }
        // form params
        if ($reference_ip !== null) {
            $formParams['reference_ip'] = $this->apiClient->getSerializer()->toFormValue($reference_ip);
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
                '\backend\modules\voximplant\models\StartScenariosAPIResponse',
                '/StartScenarios'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\StartScenariosAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\StartScenariosAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

}
