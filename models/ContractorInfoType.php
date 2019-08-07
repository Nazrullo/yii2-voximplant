<?php
namespace backend\modules\voximplant\models;

use \ArrayAccess;

class ContractorInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ContractorInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'inn' => 'string',
        'kpp' => 'string',
        'company_name' => 'string',
        'company_address' => 'string',
        'company_phone' => 'string',
        'correspondence_address' => 'string',
        'correspondence_email' => 'string',
        'correspondence_to' => 'string',
        'contract' => 'backend\modules\voximplant\models\ContractInfoType'
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
        'inn' => 'inn',
        'kpp' => 'kpp',
        'company_name' => 'company_name',
        'company_address' => 'company_address',
        'company_phone' => 'company_phone',
        'correspondence_address' => 'correspondence_address',
        'correspondence_email' => 'correspondence_email',
        'correspondence_to' => 'correspondence_to',
        'contract' => 'contract'
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
        'inn' => 'setInn',
        'kpp' => 'setKpp',
        'company_name' => 'setCompanyName',
        'company_address' => 'setCompanyAddress',
        'company_phone' => 'setCompanyPhone',
        'correspondence_address' => 'setCorrespondenceAddress',
        'correspondence_email' => 'setCorrespondenceEmail',
        'correspondence_to' => 'setCorrespondenceTo',
        'contract' => 'setContract'
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
        'inn' => 'getInn',
        'kpp' => 'getKpp',
        'company_name' => 'getCompanyName',
        'company_address' => 'getCompanyAddress',
        'company_phone' => 'getCompanyPhone',
        'correspondence_address' => 'getCorrespondenceAddress',
        'correspondence_email' => 'getCorrespondenceEmail',
        'correspondence_to' => 'getCorrespondenceTo',
        'contract' => 'getContract'
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
        $this->container['inn'] = isset($data['inn']) ? $data['inn'] : null;
        $this->container['kpp'] = isset($data['kpp']) ? $data['kpp'] : null;
        $this->container['company_name'] = isset($data['company_name']) ? $data['company_name'] : null;
        $this->container['company_address'] = isset($data['company_address']) ? $data['company_address'] : null;
        $this->container['company_phone'] = isset($data['company_phone']) ? $data['company_phone'] : null;
        $this->container['correspondence_address'] = isset($data['correspondence_address']) ? $data['correspondence_address'] : null;
        $this->container['correspondence_email'] = isset($data['correspondence_email']) ? $data['correspondence_email'] : null;
        $this->container['correspondence_to'] = isset($data['correspondence_to']) ? $data['correspondence_to'] : null;
        $this->container['contract'] = isset($data['contract']) ? $data['contract'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['inn'] === null) {
            $invalid_properties[] = "'inn' can't be null";
        }
        if ($this->container['company_name'] === null) {
            $invalid_properties[] = "'company_name' can't be null";
        }
        if ($this->container['company_address'] === null) {
            $invalid_properties[] = "'company_address' can't be null";
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
        if ($this->container['inn'] === null) {
            return false;
        }
        if ($this->container['company_name'] === null) {
            return false;
        }
        if ($this->container['company_address'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets inn
     * @return string
     */
    public function getInn()
    {
        return $this->container['inn'];
    }

    /**
     * Sets inn
     * @param string $inn ИНН
     * @return $this
     */
    public function setInn($inn)
    {
        $this->container['inn'] = $inn;

        return $this;
    }

    /**
     * Gets kpp
     * @return string
     */
    public function getKpp()
    {
        return $this->container['kpp'];
    }

    /**
     * Sets kpp
     * @param string $kpp КПП (отсутствует для ИП).
     * @return $this
     */
    public function setKpp($kpp)
    {
        $this->container['kpp'] = $kpp;

        return $this;
    }

    /**
     * Gets company_name
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     * @param string $company_name The full company name.
     * @return $this
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_address
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->container['company_address'];
    }

    /**
     * Sets company_address
     * @param string $company_address The full company address with a postcode.
     * @return $this
     */
    public function setCompanyAddress($company_address)
    {
        $this->container['company_address'] = $company_address;

        return $this;
    }

    /**
     * Gets company_phone
     * @return string
     */
    public function getCompanyPhone()
    {
        return $this->container['company_phone'];
    }

    /**
     * Sets company_phone
     * @param string $company_phone The company phone.
     * @return $this
     */
    public function setCompanyPhone($company_phone)
    {
        $this->container['company_phone'] = $company_phone;

        return $this;
    }

    /**
     * Gets correspondence_address
     * @return string
     */
    public function getCorrespondenceAddress()
    {
        return $this->container['correspondence_address'];
    }

    /**
     * Sets correspondence_address
     * @param string $correspondence_address The correspondence address.
     * @return $this
     */
    public function setCorrespondenceAddress($correspondence_address)
    {
        $this->container['correspondence_address'] = $correspondence_address;

        return $this;
    }

    /**
     * Gets correspondence_email
     * @return string
     */
    public function getCorrespondenceEmail()
    {
        return $this->container['correspondence_email'];
    }

    /**
     * Sets correspondence_email
     * @param string $correspondence_email The correspondence email.
     * @return $this
     */
    public function setCorrespondenceEmail($correspondence_email)
    {
        $this->container['correspondence_email'] = $correspondence_email;

        return $this;
    }

    /**
     * Gets correspondence_to
     * @return string
     */
    public function getCorrespondenceTo()
    {
        return $this->container['correspondence_to'];
    }

    /**
     * Sets correspondence_to
     * @param string $correspondence_to The correspondence to.
     * @return $this
     */
    public function setCorrespondenceTo($correspondence_to)
    {
        $this->container['correspondence_to'] = $correspondence_to;

        return $this;
    }

    /**
     * Gets contract
     * @return backend\modules\voximplant\models\ContractInfoType
     */
    public function getContract()
    {
        return $this->container['contract'];
    }

    /**
     * Sets contract
     * @param backend\modules\voximplant\models\ContractInfoType $contract
     * @return $this
     */
    public function setContract($contract)
    {
        $this->container['contract'] = $contract;

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


