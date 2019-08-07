<?php


namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * RegulationAddress Class Doc Comment
 *
 * @category    Class */
 // @description The RegulationAddress record
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class RegulationAddress implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RegulationAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'regulation_address_id' => 'int',
        'external_id' => 'string',
        'country_code' => 'string',
        'phone_category_name' => 'string',
        'salutation' => 'string',
        'company' => 'string',
        'first_name' => 'string',
        'last_name' => 'string',
        'owner_country_code' => 'string',
        'city' => 'string',
        'zip_code' => 'string',
        'street' => 'string',
        'builder_number' => 'string',
        'builder_latter' => 'string',
        'status' => 'string',
        'reject_message' => 'string',
        'phone_region_code' => 'string'
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
        'regulation_address_id' => 'regulation_address_id',
        'external_id' => 'external_id',
        'country_code' => 'country_code',
        'phone_category_name' => 'phone_category_name',
        'salutation' => 'salutation',
        'company' => 'company',
        'first_name' => 'first_name',
        'last_name' => 'last_name',
        'owner_country_code' => 'owner_country_code',
        'city' => 'city',
        'zip_code' => 'zip_code',
        'street' => 'street',
        'builder_number' => 'builder_number',
        'builder_latter' => 'builder_latter',
        'status' => 'status',
        'reject_message' => 'reject_message',
        'phone_region_code' => 'phone_region_code'
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
        'regulation_address_id' => 'setRegulationAddressId',
        'external_id' => 'setExternalId',
        'country_code' => 'setCountryCode',
        'phone_category_name' => 'setPhoneCategoryName',
        'salutation' => 'setSalutation',
        'company' => 'setCompany',
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'owner_country_code' => 'setOwnerCountryCode',
        'city' => 'setCity',
        'zip_code' => 'setZipCode',
        'street' => 'setStreet',
        'builder_number' => 'setBuilderNumber',
        'builder_latter' => 'setBuilderLatter',
        'status' => 'setStatus',
        'reject_message' => 'setRejectMessage',
        'phone_region_code' => 'setPhoneRegionCode'
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
        'regulation_address_id' => 'getRegulationAddressId',
        'external_id' => 'getExternalId',
        'country_code' => 'getCountryCode',
        'phone_category_name' => 'getPhoneCategoryName',
        'salutation' => 'getSalutation',
        'company' => 'getCompany',
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'owner_country_code' => 'getOwnerCountryCode',
        'city' => 'getCity',
        'zip_code' => 'getZipCode',
        'street' => 'getStreet',
        'builder_number' => 'getBuilderNumber',
        'builder_latter' => 'getBuilderLatter',
        'status' => 'getStatus',
        'reject_message' => 'getRejectMessage',
        'phone_region_code' => 'getPhoneRegionCode'
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
        $this->container['regulation_address_id'] = isset($data['regulation_address_id']) ? $data['regulation_address_id'] : null;
        $this->container['external_id'] = isset($data['external_id']) ? $data['external_id'] : null;
        $this->container['country_code'] = isset($data['country_code']) ? $data['country_code'] : null;
        $this->container['phone_category_name'] = isset($data['phone_category_name']) ? $data['phone_category_name'] : null;
        $this->container['salutation'] = isset($data['salutation']) ? $data['salutation'] : null;
        $this->container['company'] = isset($data['company']) ? $data['company'] : null;
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['owner_country_code'] = isset($data['owner_country_code']) ? $data['owner_country_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['zip_code'] = isset($data['zip_code']) ? $data['zip_code'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['builder_number'] = isset($data['builder_number']) ? $data['builder_number'] : null;
        $this->container['builder_latter'] = isset($data['builder_latter']) ? $data['builder_latter'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['reject_message'] = isset($data['reject_message']) ? $data['reject_message'] : null;
        $this->container['phone_region_code'] = isset($data['phone_region_code']) ? $data['phone_region_code'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['regulation_address_id'] === null) {
            $invalid_properties[] = "'regulation_address_id' can't be null";
        }
        if ($this->container['external_id'] === null) {
            $invalid_properties[] = "'external_id' can't be null";
        }
        if ($this->container['country_code'] === null) {
            $invalid_properties[] = "'country_code' can't be null";
        }
        if ($this->container['phone_category_name'] === null) {
            $invalid_properties[] = "'phone_category_name' can't be null";
        }
        if ($this->container['salutation'] === null) {
            $invalid_properties[] = "'salutation' can't be null";
        }
        if ($this->container['city'] === null) {
            $invalid_properties[] = "'city' can't be null";
        }
        if ($this->container['zip_code'] === null) {
            $invalid_properties[] = "'zip_code' can't be null";
        }
        if ($this->container['street'] === null) {
            $invalid_properties[] = "'street' can't be null";
        }
        if ($this->container['builder_number'] === null) {
            $invalid_properties[] = "'builder_number' can't be null";
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
        if ($this->container['regulation_address_id'] === null) {
            return false;
        }
        if ($this->container['external_id'] === null) {
            return false;
        }
        if ($this->container['country_code'] === null) {
            return false;
        }
        if ($this->container['phone_category_name'] === null) {
            return false;
        }
        if ($this->container['salutation'] === null) {
            return false;
        }
        if ($this->container['city'] === null) {
            return false;
        }
        if ($this->container['zip_code'] === null) {
            return false;
        }
        if ($this->container['street'] === null) {
            return false;
        }
        if ($this->container['builder_number'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets regulation_address_id
     * @return int
     */
    public function getRegulationAddressId()
    {
        return $this->container['regulation_address_id'];
    }

    /**
     * Sets regulation_address_id
     * @param int $regulation_address_id The regulation address ID.
     * @return $this
     */
    public function setRegulationAddressId($regulation_address_id)
    {
        $this->container['regulation_address_id'] = $regulation_address_id;

        return $this;
    }

    /**
     * Gets external_id
     * @return string
     */
    public function getExternalId()
    {
        return $this->container['external_id'];
    }

    /**
     * Sets external_id
     * @param string $external_id The external ID.
     * @return $this
     */
    public function setExternalId($external_id)
    {
        $this->container['external_id'] = $external_id;

        return $this;
    }

    /**
     * Gets country_code
     * @return string
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     * @param string $country_code The country code.
     * @return $this
     */
    public function setCountryCode($country_code)
    {
        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets phone_category_name
     * @return string
     */
    public function getPhoneCategoryName()
    {
        return $this->container['phone_category_name'];
    }

    /**
     * Sets phone_category_name
     * @param string $phone_category_name The phone category name.
     * @return $this
     */
    public function setPhoneCategoryName($phone_category_name)
    {
        $this->container['phone_category_name'] = $phone_category_name;

        return $this;
    }

    /**
     * Gets salutation
     * @return string
     */
    public function getSalutation()
    {
        return $this->container['salutation'];
    }

    /**
     * Sets salutation
     * @param string $salutation The salutation. Possible values: MR, MS, COMPANY.
     * @return $this
     */
    public function setSalutation($salutation)
    {
        $this->container['salutation'] = $salutation;

        return $this;
    }

    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->container['company'];
    }

    /**
     * Sets company
     * @param string $company The company name.
     * @return $this
     */
    public function setCompany($company)
    {
        $this->container['company'] = $company;

        return $this;
    }

    /**
     * Gets first_name
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     * @param string $first_name The first name.
     * @return $this
     */
    public function setFirstName($first_name)
    {
        $this->container['first_name'] = $first_name;

        return $this;
    }

    /**
     * Gets last_name
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     * @param string $last_name The last name.
     * @return $this
     */
    public function setLastName($last_name)
    {
        $this->container['last_name'] = $last_name;

        return $this;
    }

    /**
     * Gets owner_country_code
     * @return string
     */
    public function getOwnerCountryCode()
    {
        return $this->container['owner_country_code'];
    }

    /**
     * Sets owner_country_code
     * @param string $owner_country_code The owner country code.
     * @return $this
     */
    public function setOwnerCountryCode($owner_country_code)
    {
        $this->container['owner_country_code'] = $owner_country_code;

        return $this;
    }

    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     * @param string $city The city name.
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip_code
     * @return string
     */
    public function getZipCode()
    {
        return $this->container['zip_code'];
    }

    /**
     * Sets zip_code
     * @param string $zip_code The zip code.
     * @return $this
     */
    public function setZipCode($zip_code)
    {
        $this->container['zip_code'] = $zip_code;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street The zip code.
     * @return $this
     */
    public function setStreet($street)
    {
        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets builder_number
     * @return string
     */
    public function getBuilderNumber()
    {
        return $this->container['builder_number'];
    }

    /**
     * Sets builder_number
     * @param string $builder_number The builder number.
     * @return $this
     */
    public function setBuilderNumber($builder_number)
    {
        $this->container['builder_number'] = $builder_number;

        return $this;
    }

    /**
     * Gets builder_latter
     * @return string
     */
    public function getBuilderLatter()
    {
        return $this->container['builder_latter'];
    }

    /**
     * Sets builder_latter
     * @param string $builder_latter The builder latter.
     * @return $this
     */
    public function setBuilderLatter($builder_latter)
    {
        $this->container['builder_latter'] = $builder_latter;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status The status verification. Possible values: IN_PROGRESS, VERIFIED, DECLINED
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets reject_message
     * @return string
     */
    public function getRejectMessage()
    {
        return $this->container['reject_message'];
    }

    /**
     * Sets reject_message
     * @param string $reject_message The reject message
     * @return $this
     */
    public function setRejectMessage($reject_message)
    {
        $this->container['reject_message'] = $reject_message;

        return $this;
    }

    /**
     * Gets phone_region_code
     * @return string
     */
    public function getPhoneRegionCode()
    {
        return $this->container['phone_region_code'];
    }

    /**
     * Sets phone_region_code
     * @param string $phone_region_code The phone region code.
     * @return $this
     */
    public function setPhoneRegionCode($phone_region_code)
    {
        $this->container['phone_region_code'] = $phone_region_code;

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


