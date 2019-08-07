<?php

namespace backend\modules\voximplant\lib\Api;
use backend\modules\voximplant\lib\ApiClient;
use backend\modules\voximplant\lib\ApiException;


class ManagingPhoneNumbersApi
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
     * @return ManagingPhoneNumbersApi
     */
    public function setApiClient(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation attachPhoneNumber
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param float $phone_region_id The phone region ID. See the GetPhoneNumberRegions function. (required)
     * @param float $phone_count The phone count to attach. (optional)
     * @param string $phone_number The phone number that can be used instead of &lt;b&gt;phone_count&lt;/b&gt;. See the GetNewPhoneNumbers function. (optional)
     * @param string $country_state The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. (optional)
     * @param float $regulation_address_id The phone regulation address ID. (optional)
     * @return \backend\modules\voximplant\models\AttachPhoneNumberAPIResponse
     * @throws  ApiException on non-2xx response
     */
    public function attachPhoneNumber($country_code, $phone_category_name, $phone_region_id, $phone_count = null, $phone_number = null, $country_state = null, $regulation_address_id = null)
    {
        list($response) = $this->attachPhoneNumberWithHttpInfo($country_code, $phone_category_name, $phone_region_id, $phone_count, $phone_number, $country_state, $regulation_address_id);
        return $response;
    }

    /**
     * Operation attachPhoneNumberWithHttpInfo
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param float $phone_region_id The phone region ID. See the GetPhoneNumberRegions function. (required)
     * @param float $phone_count The phone count to attach. (optional)
     * @param string $phone_number The phone number that can be used instead of &lt;b&gt;phone_count&lt;/b&gt;. See the GetNewPhoneNumbers function. (optional)
     * @param string $country_state The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. (optional)
     * @param float $regulation_address_id The phone regulation address ID. (optional)
     * @return array of \backend\modules\voximplant\models\AttachPhoneNumberAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function attachPhoneNumberWithHttpInfo($country_code, $phone_category_name, $phone_region_id, $phone_count = null, $phone_number = null, $country_state = null, $regulation_address_id = null)
    {
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling attachPhoneNumber');
        }
        // verify the required parameter 'phone_category_name' is set
        if ($phone_category_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_category_name when calling attachPhoneNumber');
        }
        // verify the required parameter 'phone_region_id' is set
        if ($phone_region_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_region_id when calling attachPhoneNumber');
        }
        // parse inputs
        $resourcePath = "/AttachPhoneNumber";
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
        if ($phone_count !== null) {
            $formParams['phone_count'] = $this->apiClient->getSerializer()->toFormValue($phone_count);
        }
        // form params
        if ($phone_number !== null) {
            $formParams['phone_number'] = $this->apiClient->getSerializer()->toFormValue($phone_number);
        }
        // form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($phone_category_name !== null) {
            $formParams['phone_category_name'] = $this->apiClient->getSerializer()->toFormValue($phone_category_name);
        }
        // form params
        if ($country_state !== null) {
            $formParams['country_state'] = $this->apiClient->getSerializer()->toFormValue($country_state);
        }
        // form params
        if ($phone_region_id !== null) {
            $formParams['phone_region_id'] = $this->apiClient->getSerializer()->toFormValue($phone_region_id);
        }
        // form params
        if ($regulation_address_id !== null) {
            $formParams['regulation_address_id'] = $this->apiClient->getSerializer()->toFormValue($regulation_address_id);
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
                '\backend\modules\voximplant\models\AttachPhoneNumberAPIResponse',
                '/AttachPhoneNumber'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\AttachPhoneNumberAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\AttachPhoneNumberAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation bindPhoneNumberToApplication
     *
     * 
     *
     * @param float $phone_id The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $phone_number The phone number list separated by the &#x60;;&#x60; symbol that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param float $rule_id The rule ID. (optional)
     * @param string $rule_name The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function bindPhoneNumberToApplication($phone_id = null, $phone_number = null, $application_id = null, $application_name = null, $rule_id = null, $rule_name = null, $bind = null)
    {
        list($response) = $this->bindPhoneNumberToApplicationWithHttpInfo($phone_id, $phone_number, $application_id, $application_name, $rule_id, $rule_name, $bind);
        return $response;
    }

    /**
     * Operation bindPhoneNumberToApplicationWithHttpInfo
     *
     * 
     *
     * @param float $phone_id The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $phone_number The phone number list separated by the &#x60;;&#x60; symbol that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param float $rule_id The rule ID. (optional)
     * @param string $rule_name The rule name that can be used instead of &lt;b&gt;rule_id&lt;/b&gt;. (optional)
     * @param bool $bind Bind or unbind? (optional)
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function bindPhoneNumberToApplicationWithHttpInfo($phone_id = null, $phone_number = null, $application_id = null, $application_name = null, $rule_id = null, $rule_name = null, $bind = null)
    {
        // parse inputs
        $resourcePath = "/BindPhoneNumberToApplication";
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
        // form params
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
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
                '/BindPhoneNumberToApplication'
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
     * Operation deactivatePhoneNumber
     *
     * 
     *
     * @param float $phone_id The phone ID. (optional)
     * @param string $phone_number The phone number that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws  ApiException on non-2xx response
     */
    public function deactivatePhoneNumber($phone_id = null, $phone_number = null)
    {
        list($response) = $this->deactivatePhoneNumberWithHttpInfo($phone_id, $phone_number);
        return $response;
    }

    /**
     * Operation deactivatePhoneNumberWithHttpInfo
     *
     * 
     *
     * @param float $phone_id The phone ID. (optional)
     * @param string $phone_number The phone number that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. (optional)
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function deactivatePhoneNumberWithHttpInfo($phone_id = null, $phone_number = null)
    {
        // parse inputs
        $resourcePath = "/DeactivatePhoneNumber";
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
                '/DeactivatePhoneNumber'
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
     * Operation getActualPhoneNumberRegion
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param float $phone_region_id The phone region ID to filter. (required)
     * @return \backend\modules\voximplant\models\GetActualPhoneNumberRegionAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getActualPhoneNumberRegion($country_code, $phone_category_name, $phone_region_id)
    {
        list($response) = $this->getActualPhoneNumberRegionWithHttpInfo($country_code, $phone_category_name, $phone_region_id);
        return $response;
    }

    /**
     * Operation getActualPhoneNumberRegionWithHttpInfo
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param float $phone_region_id The phone region ID to filter. (required)
     * @return array of \backend\modules\voximplant\models\GetActualPhoneNumberRegionAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getActualPhoneNumberRegionWithHttpInfo($country_code, $phone_category_name, $phone_region_id)
    {
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling getActualPhoneNumberRegion');
        }
        // verify the required parameter 'phone_category_name' is set
        if ($phone_category_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_category_name when calling getActualPhoneNumberRegion');
        }
        // verify the required parameter 'phone_region_id' is set
        if ($phone_region_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_region_id when calling getActualPhoneNumberRegion');
        }
        // parse inputs
        $resourcePath = "/GetActualPhoneNumberRegion";
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
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($phone_category_name !== null) {
            $formParams['phone_category_name'] = $this->apiClient->getSerializer()->toFormValue($phone_category_name);
        }
        // form params
        if ($phone_region_id !== null) {
            $formParams['phone_region_id'] = $this->apiClient->getSerializer()->toFormValue($phone_region_id);
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
                '\backend\modules\voximplant\models\GetActualPhoneNumberRegionAPIResponse',
                '/GetActualPhoneNumberRegion'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetActualPhoneNumberRegionAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetActualPhoneNumberRegionAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getNewPhoneNumbers
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param float $phone_region_id The phone region ID. See the GetPhoneNumberRegions function. (required)
     * @param string $country_state The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetNewPhoneNumbersAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getNewPhoneNumbers($country_code, $phone_category_name, $phone_region_id, $country_state = null, $count = null, $offset = null)
    {
        list($response) = $this->getNewPhoneNumbersWithHttpInfo($country_code, $phone_category_name, $phone_region_id, $country_state, $count, $offset);
        return $response;
    }

    /**
     * Operation getNewPhoneNumbersWithHttpInfo
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param float $phone_region_id The phone region ID. See the GetPhoneNumberRegions function. (required)
     * @param string $country_state The country state. See the GetPhoneNumberCategories and GetPhoneNumberCountryStates functions. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return array of \backend\modules\voximplant\models\GetNewPhoneNumbersAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getNewPhoneNumbersWithHttpInfo($country_code, $phone_category_name, $phone_region_id, $country_state = null, $count = null, $offset = null)
    {
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling getNewPhoneNumbers');
        }
        // verify the required parameter 'phone_category_name' is set
        if ($phone_category_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_category_name when calling getNewPhoneNumbers');
        }
        // verify the required parameter 'phone_region_id' is set
        if ($phone_region_id === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_region_id when calling getNewPhoneNumbers');
        }
        // parse inputs
        $resourcePath = "/GetNewPhoneNumbers";
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
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($phone_category_name !== null) {
            $formParams['phone_category_name'] = $this->apiClient->getSerializer()->toFormValue($phone_category_name);
        }
        // form params
        if ($country_state !== null) {
            $formParams['country_state'] = $this->apiClient->getSerializer()->toFormValue($country_state);
        }
        // form params
        if ($phone_region_id !== null) {
            $formParams['phone_region_id'] = $this->apiClient->getSerializer()->toFormValue($phone_region_id);
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
                '\backend\modules\voximplant\models\GetNewPhoneNumbersAPIResponse',
                '/GetNewPhoneNumbers'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetNewPhoneNumbersAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetNewPhoneNumbersAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPhoneNumberCategories
     *
     * 
     *
     * @param string $country_code The country code. (optional)
     * @param string $sandbox Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: &#x60;all&#x60;, &#x60;true&#x60;, &#x60;false&#x60;. (optional)
     * @return \backend\modules\voximplant\models\GetPhoneNumberCategoriesAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumberCategories($country_code = null, $sandbox = null)
    {
        list($response) = $this->getPhoneNumberCategoriesWithHttpInfo($country_code, $sandbox);
        return $response;
    }

    /**
     * Operation getPhoneNumberCategoriesWithHttpInfo
     *
     * 
     *
     * @param string $country_code The country code. (optional)
     * @param string $sandbox Flag allows you to display phone number categories only of the sandbox, real or all .The following values are possible: &#x60;all&#x60;, &#x60;true&#x60;, &#x60;false&#x60;. (optional)
     * @return array of \backend\modules\voximplant\models\GetPhoneNumberCategoriesAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumberCategoriesWithHttpInfo($country_code = null, $sandbox = null)
    {
        // parse inputs
        $resourcePath = "/GetPhoneNumberCategories";
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
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($sandbox !== null) {
            $formParams['sandbox'] = $this->apiClient->getSerializer()->toFormValue($sandbox);
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
                '\backend\modules\voximplant\models\GetPhoneNumberCategoriesAPIResponse',
                '/GetPhoneNumberCategories'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetPhoneNumberCategoriesAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetPhoneNumberCategoriesAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPhoneNumberCountryStates
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param string $country_state The country state code (example: AL, CA, ... ). (optional)
     * @return \backend\modules\voximplant\models\GetPhoneNumberCountryStatesAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumberCountryStates($country_code, $phone_category_name, $country_state = null)
    {
        list($response) = $this->getPhoneNumberCountryStatesWithHttpInfo($country_code, $phone_category_name, $country_state);
        return $response;
    }

    /**
     * Operation getPhoneNumberCountryStatesWithHttpInfo
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param string $country_state The country state code (example: AL, CA, ... ). (optional)
     * @return array of \backend\modules\voximplant\models\GetPhoneNumberCountryStatesAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumberCountryStatesWithHttpInfo($country_code, $phone_category_name, $country_state = null)
    {
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling getPhoneNumberCountryStates');
        }
        // verify the required parameter 'phone_category_name' is set
        if ($phone_category_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_category_name when calling getPhoneNumberCountryStates');
        }
        // parse inputs
        $resourcePath = "/GetPhoneNumberCountryStates";
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
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($phone_category_name !== null) {
            $formParams['phone_category_name'] = $this->apiClient->getSerializer()->toFormValue($phone_category_name);
        }
        // form params
        if ($country_state !== null) {
            $formParams['country_state'] = $this->apiClient->getSerializer()->toFormValue($country_state);
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
                '\backend\modules\voximplant\models\GetPhoneNumberCountryStatesAPIResponse',
                '/GetPhoneNumberCountryStates'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetPhoneNumberCountryStatesAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetPhoneNumberCountryStatesAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPhoneNumberRegions
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param string $country_state The country state code (example: AL, CA, ... ). (optional)
     * @param bool $omit_empty Set to &#x60;false&#x60; to show the all regions (with and without phone numbers in stock). (optional)
     * @param float $phone_region_id The phone region ID to filter. (optional)
     * @param string $phone_region_name The phone region name to filter. (optional)
     * @param string $phone_region_code The region phone prefix to filter. (optional)
     * @return \backend\modules\voximplant\models\GetPhoneNumberRegionsAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumberRegions($country_code, $phone_category_name, $country_state = null, $omit_empty = null, $phone_region_id = null, $phone_region_name = null, $phone_region_code = null)
    {
        list($response) = $this->getPhoneNumberRegionsWithHttpInfo($country_code, $phone_category_name, $country_state, $omit_empty, $phone_region_id, $phone_region_name, $phone_region_code);
        return $response;
    }

    /**
     * Operation getPhoneNumberRegionsWithHttpInfo
     *
     * 
     *
     * @param string $country_code The country code. (required)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (required)
     * @param string $country_state The country state code (example: AL, CA, ... ). (optional)
     * @param bool $omit_empty Set to &#x60;false&#x60; to show the all regions (with and without phone numbers in stock). (optional)
     * @param float $phone_region_id The phone region ID to filter. (optional)
     * @param string $phone_region_name The phone region name to filter. (optional)
     * @param string $phone_region_code The region phone prefix to filter. (optional)
     * @return array of \backend\modules\voximplant\models\GetPhoneNumberRegionsAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumberRegionsWithHttpInfo($country_code, $phone_category_name, $country_state = null, $omit_empty = null, $phone_region_id = null, $phone_region_name = null, $phone_region_code = null)
    {
        // verify the required parameter 'country_code' is set
        if ($country_code === null) {
            throw new \InvalidArgumentException('Missing the required parameter $country_code when calling getPhoneNumberRegions');
        }
        // verify the required parameter 'phone_category_name' is set
        if ($phone_category_name === null) {
            throw new \InvalidArgumentException('Missing the required parameter $phone_category_name when calling getPhoneNumberRegions');
        }
        // parse inputs
        $resourcePath = "/GetPhoneNumberRegions";
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
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($phone_category_name !== null) {
            $formParams['phone_category_name'] = $this->apiClient->getSerializer()->toFormValue($phone_category_name);
        }
        // form params
        if ($country_state !== null) {
            $formParams['country_state'] = $this->apiClient->getSerializer()->toFormValue($country_state);
        }
        // form params
        if ($omit_empty !== null) {
            $formParams['omit_empty'] = $this->apiClient->getSerializer()->toFormValue($omit_empty);
        }
        // form params
        if ($phone_region_id !== null) {
            $formParams['phone_region_id'] = $this->apiClient->getSerializer()->toFormValue($phone_region_id);
        }
        // form params
        if ($phone_region_name !== null) {
            $formParams['phone_region_name'] = $this->apiClient->getSerializer()->toFormValue($phone_region_name);
        }
        // form params
        if ($phone_region_code !== null) {
            $formParams['phone_region_code'] = $this->apiClient->getSerializer()->toFormValue($phone_region_code);
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
                '\backend\modules\voximplant\models\GetPhoneNumberRegionsAPIResponse',
                '/GetPhoneNumberRegions'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetPhoneNumberRegionsAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetPhoneNumberRegionsAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation getPhoneNumbers
     *
     * 
     *
     * @param float $phone_id The particular phone ID to filter (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param bool $is_bound_to_application Is a phone bound to an application. (optional)
     * @param string $phone_template The phone number start to filter (optional)
     * @param string $country_code The country code list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (optional)
     * @param bool $canceled The flag of the canceled (deleted) subscription to filter. (optional)
     * @param bool $deactivated The flag of the deactivated (frozen) subscription to filter. (optional)
     * @param bool $auto_charge The auto_charge flag to filter. (optional)
     * @param string $from_phone_next_renewal The UTC from &#x60;phone_next_renewal&#x60; date filter in format: YYYY-MM-DD (optional)
     * @param string $to_phone_next_renewal The UTC to &#x60;phone_next_renewal&#x60; date filter in format: YYYY-MM-DD (optional)
     * @param string $from_phone_purchase_date The UTC from &#x60;phone_purchase_date&#x60; date filter in format: YYYY-MM-DD hh:mm:ss (optional)
     * @param string $to_phone_purchase_date The UTC to &#x60;phone_purchase_date&#x60; date filter in format: YYYY-MM-DD hh:mm:ss (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_phones_only Set true to get the children phones only. (optional)
     * @param string $verification_name The required account verification name to filter. (optional)
     * @param string $verification_status The account verification status list separated by the &#x60;;&#x60; symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED (optional)
     * @param string $from_unverified_hold_until Unverified phone hold until the date (from ...) in format: YYYY-MM-DD (optional)
     * @param string $to_unverified_hold_until Unverified phone hold until the date (... to) in format: YYYY-MM-DD (optional)
     * @param bool $can_be_used Can the unverified account use the phone? (optional)
     * @param string $order_by The following values are available: &#x60;phone_number&#x60; (ascent order), &#x60;phone_price&#x60; (ascent order), &#x60;phone_country_code&#x60; (ascent order), &#x60;deactivated&#x60; (deactivated first, active last), &#x60;purchase_date&#x60; (descent order), &#x60;phone_next_renewal&#x60; (ascent order), &#x60;verification_status&#x60;, &#x60;unverified_hold_until&#x60; (ascent order), &#x60;verification_name&#x60;. (optional)
     * @param string $sandbox Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers .The following values are possible: &#x60;all&#x60;, &#x60;true&#x60;, &#x60;false&#x60;. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return \backend\modules\voximplant\models\GetPhoneNumbersAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumbers($phone_id = null, $application_id = null, $application_name = null, $is_bound_to_application = null, $phone_template = null, $country_code = null, $phone_category_name = null, $canceled = null, $deactivated = null, $auto_charge = null, $from_phone_next_renewal = null, $to_phone_next_renewal = null, $from_phone_purchase_date = null, $to_phone_purchase_date = null, $child_account_id = null, $children_phones_only = null, $verification_name = null, $verification_status = null, $from_unverified_hold_until = null, $to_unverified_hold_until = null, $can_be_used = null, $order_by = null, $sandbox = null, $count = null, $offset = null)
    {
        list($response) = $this->getPhoneNumbersWithHttpInfo($phone_id, $application_id, $application_name, $is_bound_to_application, $phone_template, $country_code, $phone_category_name, $canceled, $deactivated, $auto_charge, $from_phone_next_renewal, $to_phone_next_renewal, $from_phone_purchase_date, $to_phone_purchase_date, $child_account_id, $children_phones_only, $verification_name, $verification_status, $from_unverified_hold_until, $to_unverified_hold_until, $can_be_used, $order_by, $sandbox, $count, $offset);
        return $response;
    }

    /**
     * Operation getPhoneNumbersWithHttpInfo
     *
     * 
     *
     * @param float $phone_id The particular phone ID to filter (optional)
     * @param float $application_id The application ID. (optional)
     * @param string $application_name The application name that can be used instead of &lt;b&gt;application_id&lt;/b&gt;. (optional)
     * @param bool $is_bound_to_application Is a phone bound to an application. (optional)
     * @param string $phone_template The phone number start to filter (optional)
     * @param string $country_code The country code list separated by the &#x60;;&#x60; symbol. (optional)
     * @param string $phone_category_name The phone category name. See the GetPhoneNumberCategories function. (optional)
     * @param bool $canceled The flag of the canceled (deleted) subscription to filter. (optional)
     * @param bool $deactivated The flag of the deactivated (frozen) subscription to filter. (optional)
     * @param bool $auto_charge The auto_charge flag to filter. (optional)
     * @param string $from_phone_next_renewal The UTC from &#x60;phone_next_renewal&#x60; date filter in format: YYYY-MM-DD (optional)
     * @param string $to_phone_next_renewal The UTC to &#x60;phone_next_renewal&#x60; date filter in format: YYYY-MM-DD (optional)
     * @param string $from_phone_purchase_date The UTC from &#x60;phone_purchase_date&#x60; date filter in format: YYYY-MM-DD hh:mm:ss (optional)
     * @param string $to_phone_purchase_date The UTC to &#x60;phone_purchase_date&#x60; date filter in format: YYYY-MM-DD hh:mm:ss (optional)
     * @param string $child_account_id The child account ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param bool $children_phones_only Set true to get the children phones only. (optional)
     * @param string $verification_name The required account verification name to filter. (optional)
     * @param string $verification_status The account verification status list separated by the &#x60;;&#x60; symbol. The following values are possible: REQUIRED, IN_PROGRESS, VERIFIED (optional)
     * @param string $from_unverified_hold_until Unverified phone hold until the date (from ...) in format: YYYY-MM-DD (optional)
     * @param string $to_unverified_hold_until Unverified phone hold until the date (... to) in format: YYYY-MM-DD (optional)
     * @param bool $can_be_used Can the unverified account use the phone? (optional)
     * @param string $order_by The following values are available: &#x60;phone_number&#x60; (ascent order), &#x60;phone_price&#x60; (ascent order), &#x60;phone_country_code&#x60; (ascent order), &#x60;deactivated&#x60; (deactivated first, active last), &#x60;purchase_date&#x60; (descent order), &#x60;phone_next_renewal&#x60; (ascent order), &#x60;verification_status&#x60;, &#x60;unverified_hold_until&#x60; (ascent order), &#x60;verification_name&#x60;. (optional)
     * @param string $sandbox Flag allows you to display only the numbers of the sandbox, real numbers, or all numbers .The following values are possible: &#x60;all&#x60;, &#x60;true&#x60;, &#x60;false&#x60;. (optional)
     * @param float $count The max returning record count. (optional)
     * @param float $offset The record count to omit. (optional)
     * @return Array of \backend\modules\voximplant\models\GetPhoneNumbersAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function getPhoneNumbersWithHttpInfo($phone_id = null, $application_id = null, $application_name = null, $is_bound_to_application = null, $phone_template = null, $country_code = null, $phone_category_name = null, $canceled = null, $deactivated = null, $auto_charge = null, $from_phone_next_renewal = null, $to_phone_next_renewal = null, $from_phone_purchase_date = null, $to_phone_purchase_date = null, $child_account_id = null, $children_phones_only = null, $verification_name = null, $verification_status = null, $from_unverified_hold_until = null, $to_unverified_hold_until = null, $can_be_used = null, $order_by = null, $sandbox = null, $count = null, $offset = null)
    {
        // parse inputs
        $resourcePath = "/GetPhoneNumbers";
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
        if ($application_id !== null) {
            $formParams['application_id'] = $this->apiClient->getSerializer()->toFormValue($application_id);
        }
        // form params
        if ($application_name !== null) {
            $formParams['application_name'] = $this->apiClient->getSerializer()->toFormValue($application_name);
        }
        // form params
        if ($is_bound_to_application !== null) {
            $formParams['is_bound_to_application'] = $this->apiClient->getSerializer()->toFormValue($is_bound_to_application);
        }
        // form params
        if ($phone_template !== null) {
            $formParams['phone_template'] = $this->apiClient->getSerializer()->toFormValue($phone_template);
        }
        // form params
        if ($country_code !== null) {
            $formParams['country_code'] = $this->apiClient->getSerializer()->toFormValue($country_code);
        }
        // form params
        if ($phone_category_name !== null) {
            $formParams['phone_category_name'] = $this->apiClient->getSerializer()->toFormValue($phone_category_name);
        }
        // form params
        if ($canceled !== null) {
            $formParams['canceled'] = $this->apiClient->getSerializer()->toFormValue($canceled);
        }
        // form params
        if ($deactivated !== null) {
            $formParams['deactivated'] = $this->apiClient->getSerializer()->toFormValue($deactivated);
        }
        // form params
        if ($auto_charge !== null) {
            $formParams['auto_charge'] = $this->apiClient->getSerializer()->toFormValue($auto_charge);
        }
        // form params
        if ($from_phone_next_renewal !== null) {
            $formParams['from_phone_next_renewal'] = $this->apiClient->getSerializer()->toFormValue($from_phone_next_renewal);
        }
        // form params
        if ($to_phone_next_renewal !== null) {
            $formParams['to_phone_next_renewal'] = $this->apiClient->getSerializer()->toFormValue($to_phone_next_renewal);
        }
        // form params
        if ($from_phone_purchase_date !== null) {
            $formParams['from_phone_purchase_date'] = $this->apiClient->getSerializer()->toFormValue($from_phone_purchase_date);
        }
        // form params
        if ($to_phone_purchase_date !== null) {
            $formParams['to_phone_purchase_date'] = $this->apiClient->getSerializer()->toFormValue($to_phone_purchase_date);
        }
        // form params
        if ($child_account_id !== null) {
            $formParams['child_account_id'] = $this->apiClient->getSerializer()->toFormValue($child_account_id);
        }
        // form params
        if ($children_phones_only !== null) {
            $formParams['children_phones_only'] = $this->apiClient->getSerializer()->toFormValue($children_phones_only);
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
        if ($can_be_used !== null) {
            $formParams['can_be_used'] = $this->apiClient->getSerializer()->toFormValue($can_be_used);
        }
        // form params
        if ($order_by !== null) {
            $formParams['order_by'] = $this->apiClient->getSerializer()->toFormValue($order_by);
        }
        // form params
        if ($sandbox !== null) {
            $formParams['sandbox'] = $this->apiClient->getSerializer()->toFormValue($sandbox);
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
                '\backend\modules\voximplant\models\GetPhoneNumbersAPIResponse',
                '/GetPhoneNumbers'
            );

            return array($this->apiClient->getSerializer()->deserialize($response, '\backend\modules\voximplant\models\GetPhoneNumbersAPIResponse', $httpHeader), $statusCode, $httpHeader);
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\backend\modules\voximplant\models\GetPhoneNumbersAPIResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }

    /**
     * Operation setPhoneNumberInfo
     *
     * 
     *
     * @param bool $auto_charge Is auto charge enable? (required)
     * @param float $phone_id The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $phone_number The phone number that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. (optional)
     * @return \backend\modules\voximplant\models\ActivateCallerIDAPIResponse
     * @throws ApiException on non-2xx response
     */
    public function setPhoneNumberInfo($auto_charge, $phone_id = null, $phone_number = null)
    {
        list($response) = $this->setPhoneNumberInfoWithHttpInfo($auto_charge, $phone_id, $phone_number);
        return $response;
    }

    /**
     * Operation setPhoneNumberInfoWithHttpInfo
     *
     * 
     *
     * @param bool $auto_charge Is auto charge enable? (required)
     * @param float $phone_id The phone ID list separated by the &#x60;;&#x60; symbol or the &#x60;all&#x60; value. (optional)
     * @param string $phone_number The phone number that can be used instead of &lt;b&gt;phone_id&lt;/b&gt;. (optional)
     * @return array of \backend\modules\voximplant\models\ActivateCallerIDAPIResponse, HTTP status code, HTTP response headers (array of strings)
     * @throws ApiException on non-2xx response
     */
    public function setPhoneNumberInfoWithHttpInfo($auto_charge, $phone_id = null, $phone_number = null)
    {
        // verify the required parameter 'auto_charge' is set
        if ($auto_charge === null) {
            throw new \InvalidArgumentException('Missing the required parameter $auto_charge when calling setPhoneNumberInfo');
        }
        // parse inputs
        $resourcePath = "/SetPhoneNumberInfo";
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
        // form params
        if ($auto_charge !== null) {
            $formParams['auto_charge'] = $this->apiClient->getSerializer()->toFormValue($auto_charge);
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
                '/SetPhoneNumberInfo'
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
