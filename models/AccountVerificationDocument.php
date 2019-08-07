<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;
use backend\modules\voximplant\lib\ObjectSerializer;


class AccountVerificationDocument implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'AccountVerificationDocument';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'account_document_id' => 'int',
        'is_individual' => 'bool',
        'comment' => 'string',
        'uploaded' => 'string',
        'account_document_status' => 'string'
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
        'account_document_id' => 'account_document_id',
        'is_individual' => 'is_individual',
        'comment' => 'comment',
        'uploaded' => 'uploaded',
        'account_document_status' => 'account_document_status'
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
        'account_document_id' => 'setAccountDocumentId',
        'is_individual' => 'setIsIndividual',
        'comment' => 'setComment',
        'uploaded' => 'setUploaded',
        'account_document_status' => 'setAccountDocumentStatus'
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
        'account_document_id' => 'getAccountDocumentId',
        'is_individual' => 'getIsIndividual',
        'comment' => 'getComment',
        'uploaded' => 'getUploaded',
        'account_document_status' => 'getAccountDocumentStatus'
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
        $this->container['account_document_id'] = isset($data['account_document_id']) ? $data['account_document_id'] : null;
        $this->container['is_individual'] = isset($data['is_individual']) ? $data['is_individual'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['uploaded'] = isset($data['uploaded']) ? $data['uploaded'] : null;
        $this->container['account_document_status'] = isset($data['account_document_status']) ? $data['account_document_status'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['account_document_id'] === null) {
            $invalid_properties[] = "'account_document_id' can't be null";
        }
        if ($this->container['is_individual'] === null) {
            $invalid_properties[] = "'is_individual' can't be null";
        }
        if ($this->container['uploaded'] === null) {
            $invalid_properties[] = "'uploaded' can't be null";
        }
        if ($this->container['account_document_status'] === null) {
            $invalid_properties[] = "'account_document_status' can't be null";
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
        if ($this->container['account_document_id'] === null) {
            return false;
        }
        if ($this->container['is_individual'] === null) {
            return false;
        }
        if ($this->container['uploaded'] === null) {
            return false;
        }
        if ($this->container['account_document_status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets account_document_id
     * @return int
     */
    public function getAccountDocumentId()
    {
        return $this->container['account_document_id'];
    }

    /**
     * Sets account_document_id
     * @param int $account_document_id The account verification document ID.
     * @return $this
     */
    public function setAccountDocumentId($account_document_id)
    {
        $this->container['account_document_id'] = $account_document_id;

        return $this;
    }

    /**
     * Gets is_individual
     * @return bool
     */
    public function getIsIndividual()
    {
        return $this->container['is_individual'];
    }

    /**
     * Sets is_individual
     * @param bool $is_individual Is individual, isn't legal entity?
     * @return $this
     */
    public function setIsIndividual($is_individual)
    {
        $this->container['is_individual'] = $is_individual;

        return $this;
    }

    /**
     * Gets comment
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     * @param string $comment The reviewer's comment.
     * @return $this
     */
    public function setComment($comment)
    {
        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets uploaded
     * @return string
     */
    public function getUploaded()
    {
        return $this->container['uploaded'];
    }

    /**
     * Sets uploaded
     * @param string $uploaded The UTC date of the document upload in format: YYYY-MM-DD hh::mm:ss
     * @return $this
     */
    public function setUploaded($uploaded)
    {
        $this->container['uploaded'] = $uploaded;

        return $this;
    }

    /**
     * Gets account_document_status
     * @return string
     */
    public function getAccountDocumentStatus()
    {
        return $this->container['account_document_status'];
    }

    /**
     * Sets account_document_status
     * @param string $account_document_status The account document status. The following values are possible: ACCEPTED, REJECTED, IN_PROGRESS, INCOMPLETE_SET.
     * @return $this
     */
    public function setAccountDocumentStatus($account_document_status)
    {
        $this->container['account_document_status'] = $account_document_status;

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
            return json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


