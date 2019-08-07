<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

class HistoryReportType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'HistoryReportType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'history_report_id' => 'int',
        'history_type' => 'string',
        'created' => 'string',
        'format' => 'string',
        'completed' => 'string',
        'file_name' => 'string',
        'file_size' => 'int',
        'download_size' => 'int',
        'download_count' => 'int',
        'last_downloaded' => 'string',
        'store_until' => 'string',
        'session_count' => 'int',
        'total_session_count' => 'int',
        'error' => '\backend\modules\voximplant\models\APIError',
        'filters' => 'object',
        'calculated_data' => 'object'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'history_report_id' => 'history_report_id',
        'history_type' => 'history_type',
        'created' => 'created',
        'format' => 'format',
        'completed' => 'completed',
        'file_name' => 'file_name',
        'file_size' => 'file_size',
        'download_size' => 'download_size',
        'download_count' => 'download_count',
        'last_downloaded' => 'last_downloaded',
        'store_until' => 'store_until',
        'session_count' => 'session_count',
        'total_session_count' => 'total_session_count',
        'error' => 'error',
        'filters' => 'filters',
        'calculated_data' => 'calculated_data'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'history_report_id' => 'setHistoryReportId',
        'history_type' => 'setHistoryType',
        'created' => 'setCreated',
        'format' => 'setFormat',
        'completed' => 'setCompleted',
        'file_name' => 'setFileName',
        'file_size' => 'setFileSize',
        'download_size' => 'setDownloadSize',
        'download_count' => 'setDownloadCount',
        'last_downloaded' => 'setLastDownloaded',
        'store_until' => 'setStoreUntil',
        'session_count' => 'setSessionCount',
        'total_session_count' => 'setTotalSessionCount',
        'error' => 'setError',
        'filters' => 'setFilters',
        'calculated_data' => 'setCalculatedData'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'history_report_id' => 'getHistoryReportId',
        'history_type' => 'getHistoryType',
        'created' => 'getCreated',
        'format' => 'getFormat',
        'completed' => 'getCompleted',
        'file_name' => 'getFileName',
        'file_size' => 'getFileSize',
        'download_size' => 'getDownloadSize',
        'download_count' => 'getDownloadCount',
        'last_downloaded' => 'getLastDownloaded',
        'store_until' => 'getStoreUntil',
        'session_count' => 'getSessionCount',
        'total_session_count' => 'getTotalSessionCount',
        'error' => 'getError',
        'filters' => 'getFilters',
        'calculated_data' => 'getCalculatedData'
    );

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['history_report_id'] = isset($data['history_report_id']) ? $data['history_report_id'] : null;
        $this->container['history_type'] = isset($data['history_type']) ? $data['history_type'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['completed'] = isset($data['completed']) ? $data['completed'] : null;
        $this->container['file_name'] = isset($data['file_name']) ? $data['file_name'] : null;
        $this->container['file_size'] = isset($data['file_size']) ? $data['file_size'] : null;
        $this->container['download_size'] = isset($data['download_size']) ? $data['download_size'] : null;
        $this->container['download_count'] = isset($data['download_count']) ? $data['download_count'] : null;
        $this->container['last_downloaded'] = isset($data['last_downloaded']) ? $data['last_downloaded'] : null;
        $this->container['store_until'] = isset($data['store_until']) ? $data['store_until'] : null;
        $this->container['session_count'] = isset($data['session_count']) ? $data['session_count'] : null;
        $this->container['total_session_count'] = isset($data['total_session_count']) ? $data['total_session_count'] : null;
        $this->container['error'] = isset($data['error']) ? $data['error'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['calculated_data'] = isset($data['calculated_data']) ? $data['calculated_data'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['history_report_id'] === null) {
            $invalid_properties[] = "'history_report_id' can't be null";
        }
        if ($this->container['history_type'] === null) {
            $invalid_properties[] = "'history_type' can't be null";
        }
        if ($this->container['created'] === null) {
            $invalid_properties[] = "'created' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        if ($this->container['history_report_id'] === null) {
            return false;
        }
        if ($this->container['history_type'] === null) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets history_report_id
     * @return int
     */
    public function getHistoryReportId()
    {
        return $this->container['history_report_id'];
    }

    /**
     * Sets history_report_id
     * @param int $history_report_id The call history report ID.
     * @return $this
     */
    public function setHistoryReportId($history_report_id)
    {
        $this->container['history_report_id'] = $history_report_id;

        return $this;
    }

    /**
     * Gets history_type
     * @return string
     */
    public function getHistoryType()
    {
        return $this->container['history_type'];
    }

    /**
     * Sets history_type
     * @param string $history_type The history report type. The following values are possible: calls, transactions
     * @return $this
     */
    public function setHistoryType($history_type)
    {
        $this->container['history_type'] = $history_type;

        return $this;
    }

    /**
     * Gets created
     * @return string
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     * @param string $created The creation time in the UTC timezone in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets format
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     * @param string $format The report format type. The following values are possible: csv
     * @return $this
     */
    public function setFormat($format)
    {
        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets completed
     * @return string
     */
    public function getCompleted()
    {
        return $this->container['completed'];
    }

    /**
     * Sets completed
     * @param string $completed The UTC completion time in format: YYYY-MM-DD HH:mm:SS. The report is completed if the field exists.
     * @return $this
     */
    public function setCompleted($completed)
    {
        $this->container['completed'] = $completed;

        return $this;
    }

    /**
     * Gets file_name
     * @return string
     */
    public function getFileName()
    {
        return $this->container['file_name'];
    }

    /**
     * Sets file_name
     * @param string $file_name The report file name.
     * @return $this
     */
    public function setFileName($file_name)
    {
        $this->container['file_name'] = $file_name;

        return $this;
    }

    /**
     * Gets file_size
     * @return int
     */
    public function getFileSize()
    {
        return $this->container['file_size'];
    }

    /**
     * Sets file_size
     * @param int $file_size The report file size.
     * @return $this
     */
    public function setFileSize($file_size)
    {
        $this->container['file_size'] = $file_size;

        return $this;
    }

    /**
     * Gets download_size
     * @return int
     */
    public function getDownloadSize()
    {
        return $this->container['download_size'];
    }

    /**
     * Sets download_size
     * @param int $download_size The gzipped report size to download.
     * @return $this
     */
    public function setDownloadSize($download_size)
    {
        $this->container['download_size'] = $download_size;

        return $this;
    }

    /**
     * Gets download_count
     * @return int
     */
    public function getDownloadCount()
    {
        return $this->container['download_count'];
    }

    /**
     * Sets download_count
     * @param int $download_count The download attempt count.
     * @return $this
     */
    public function setDownloadCount($download_count)
    {
        $this->container['download_count'] = $download_count;

        return $this;
    }

    /**
     * Gets last_downloaded
     * @return string
     */
    public function getLastDownloaded()
    {
        return $this->container['last_downloaded'];
    }

    /**
     * Sets last_downloaded
     * @param string $last_downloaded The last download UTC time in format: YYYY-MM-DD HH:mm:SS. The report is completed if the field exists.
     * @return $this
     */
    public function setLastDownloaded($last_downloaded)
    {
        $this->container['last_downloaded'] = $last_downloaded;

        return $this;
    }

    /**
     * Gets store_until
     * @return string
     */
    public function getStoreUntil()
    {
        return $this->container['store_until'];
    }

    /**
     * Sets store_until
     * @param string $store_until Store the report until the UTC time in format: YYYY-MM-DD HH:mm:SS. The report is completed if the field exists.
     * @return $this
     */
    public function setStoreUntil($store_until)
    {
        $this->container['store_until'] = $store_until;

        return $this;
    }

    /**
     * Gets session_count
     * @return int
     */
    public function getSessionCount()
    {
        return $this->container['session_count'];
    }

    /**
     * Sets session_count
     * @param int $session_count The session count in the report.
     * @return $this
     */
    public function setSessionCount($session_count)
    {
        $this->container['session_count'] = $session_count;

        return $this;
    }

    /**
     * Gets total_session_count
     * @return int
     */
    public function getTotalSessionCount()
    {
        return $this->container['total_session_count'];
    }

    /**
     * Sets total_session_count
     * @param int $total_session_count The total found filtered session count.
     * @return $this
     */
    public function setTotalSessionCount($total_session_count)
    {
        $this->container['total_session_count'] = $total_session_count;

        return $this;
    }

    /**
     * Gets error
     * @return \backend\modules\voximplant\models\APIError
     */
    public function getError()
    {
        return $this->container['error'];
    }

    /**
     * Sets error
     * @param \backend\modules\voximplant\models\APIError $error
     * @return $this
     */
    public function setError($error)
    {
        $this->container['error'] = $error;

        return $this;
    }

    /**
     * Gets filters
     * @return object
     */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
     * Sets filters
     * @param object $filters The report order filters (the saved GetCallHistory, GetTransactionHistory parameters).
     * @return $this
     */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;

        return $this;
    }

    /**
     * Gets calculated_data
     * @return object
     */
    public function getCalculatedData()
    {
        return $this->container['calculated_data'];
    }

    /**
     * Sets calculated_data
     * @param object $calculated_data The calculated report data (the specific report data, see CalculatedCallHistoryDataType, CalculatedTransactionHistoryDataType).
     * @return $this
     */
    public function setCalculatedData($calculated_data)
    {
        $this->container['calculated_data'] = $calculated_data;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\backend\modules\voximplant\lib\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\backend\modules\voximplant\lib\ObjectSerializer::sanitizeForSerialization($this));
    }
}


