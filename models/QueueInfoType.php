<?php

namespace backend\modules\voximplant\models;

use \ArrayAccess;

/**
 * QueueInfoType Class Doc Comment
 *
 * @category    Class */
 // @description The GetQueues function result.
/** 
 * @package     Voximplant
 * @author      https://www.weblancer.net/users/senior-prog/
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://www.weblancer.net/users/senior-prog/
 */
class QueueInfoType implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'QueueInfoType';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'acd_queue_id' => 'int',
        'acd_queue_name' => 'string',
        'application_id' => 'int',
        'acd_queue_priority' => 'int',
        'service_probability' => 'int',
        'auto_binding' => 'bool',
        'max_queue_size' => 'int',
        'max_waiting_time' => 'int',
        'average_service_time' => 'int',
        'skills' => '\backend\modules\voximplant\models\SkillInfoType[]',
        'modified' => 'string'
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
        'acd_queue_id' => 'acd_queue_id',
        'acd_queue_name' => 'acd_queue_name',
        'application_id' => 'application_id',
        'acd_queue_priority' => 'acd_queue_priority',
        'service_probability' => 'service_probability',
        'auto_binding' => 'auto_binding',
        'max_queue_size' => 'max_queue_size',
        'max_waiting_time' => 'max_waiting_time',
        'average_service_time' => 'average_service_time',
        'skills' => 'skills',
        'modified' => 'modified'
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
        'acd_queue_id' => 'setAcdQueueId',
        'acd_queue_name' => 'setAcdQueueName',
        'application_id' => 'setApplicationId',
        'acd_queue_priority' => 'setAcdQueuePriority',
        'service_probability' => 'setServiceProbability',
        'auto_binding' => 'setAutoBinding',
        'max_queue_size' => 'setMaxQueueSize',
        'max_waiting_time' => 'setMaxWaitingTime',
        'average_service_time' => 'setAverageServiceTime',
        'skills' => 'setSkills',
        'modified' => 'setModified'
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
        'acd_queue_id' => 'getAcdQueueId',
        'acd_queue_name' => 'getAcdQueueName',
        'application_id' => 'getApplicationId',
        'acd_queue_priority' => 'getAcdQueuePriority',
        'service_probability' => 'getServiceProbability',
        'auto_binding' => 'getAutoBinding',
        'max_queue_size' => 'getMaxQueueSize',
        'max_waiting_time' => 'getMaxWaitingTime',
        'average_service_time' => 'getAverageServiceTime',
        'skills' => 'getSkills',
        'modified' => 'getModified'
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
        $this->container['acd_queue_id'] = isset($data['acd_queue_id']) ? $data['acd_queue_id'] : null;
        $this->container['acd_queue_name'] = isset($data['acd_queue_name']) ? $data['acd_queue_name'] : null;
        $this->container['application_id'] = isset($data['application_id']) ? $data['application_id'] : null;
        $this->container['acd_queue_priority'] = isset($data['acd_queue_priority']) ? $data['acd_queue_priority'] : null;
        $this->container['service_probability'] = isset($data['service_probability']) ? $data['service_probability'] : null;
        $this->container['auto_binding'] = isset($data['auto_binding']) ? $data['auto_binding'] : null;
        $this->container['max_queue_size'] = isset($data['max_queue_size']) ? $data['max_queue_size'] : null;
        $this->container['max_waiting_time'] = isset($data['max_waiting_time']) ? $data['max_waiting_time'] : null;
        $this->container['average_service_time'] = isset($data['average_service_time']) ? $data['average_service_time'] : null;
        $this->container['skills'] = isset($data['skills']) ? $data['skills'] : null;
        $this->container['modified'] = isset($data['modified']) ? $data['modified'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        if ($this->container['acd_queue_id'] === null) {
            $invalid_properties[] = "'acd_queue_id' can't be null";
        }
        if ($this->container['acd_queue_name'] === null) {
            $invalid_properties[] = "'acd_queue_name' can't be null";
        }
        if ($this->container['application_id'] === null) {
            $invalid_properties[] = "'application_id' can't be null";
        }
        if ($this->container['acd_queue_priority'] === null) {
            $invalid_properties[] = "'acd_queue_priority' can't be null";
        }
        if ($this->container['service_probability'] === null) {
            $invalid_properties[] = "'service_probability' can't be null";
        }
        if ($this->container['auto_binding'] === null) {
            $invalid_properties[] = "'auto_binding' can't be null";
        }
        if ($this->container['modified'] === null) {
            $invalid_properties[] = "'modified' can't be null";
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
        if ($this->container['acd_queue_id'] === null) {
            return false;
        }
        if ($this->container['acd_queue_name'] === null) {
            return false;
        }
        if ($this->container['application_id'] === null) {
            return false;
        }
        if ($this->container['acd_queue_priority'] === null) {
            return false;
        }
        if ($this->container['service_probability'] === null) {
            return false;
        }
        if ($this->container['auto_binding'] === null) {
            return false;
        }
        if ($this->container['modified'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets acd_queue_id
     * @return int
     */
    public function getAcdQueueId()
    {
        return $this->container['acd_queue_id'];
    }

    /**
     * Sets acd_queue_id
     * @param int $acd_queue_id The ACD queue ID.
     * @return $this
     */
    public function setAcdQueueId($acd_queue_id)
    {
        $this->container['acd_queue_id'] = $acd_queue_id;

        return $this;
    }

    /**
     * Gets acd_queue_name
     * @return string
     */
    public function getAcdQueueName()
    {
        return $this->container['acd_queue_name'];
    }

    /**
     * Sets acd_queue_name
     * @param string $acd_queue_name The ACD queue name.
     * @return $this
     */
    public function setAcdQueueName($acd_queue_name)
    {
        $this->container['acd_queue_name'] = $acd_queue_name;

        return $this;
    }

    /**
     * Gets application_id
     * @return int
     */
    public function getApplicationId()
    {
        return $this->container['application_id'];
    }

    /**
     * Sets application_id
     * @param int $application_id The application ID.
     * @return $this
     */
    public function setApplicationId($application_id)
    {
        $this->container['application_id'] = $application_id;

        return $this;
    }

    /**
     * Gets acd_queue_priority
     * @return int
     */
    public function getAcdQueuePriority()
    {
        return $this->container['acd_queue_priority'];
    }

    /**
     * Sets acd_queue_priority
     * @param int $acd_queue_priority The ACD queue priority. The highest priority is 0.
     * @return $this
     */
    public function setAcdQueuePriority($acd_queue_priority)
    {
        $this->container['acd_queue_priority'] = $acd_queue_priority;

        return $this;
    }

    /**
     * Gets service_probability
     * @return int
     */
    public function getServiceProbability()
    {
        return $this->container['service_probability'];
    }

    /**
     * Sets service_probability
     * @param int $service_probability The service probability. The value in range [0.5 ... 1]. The value 1.0 means the service probability 100% in challenge with a lower priority queue.
     * @return $this
     */
    public function setServiceProbability($service_probability)
    {
        $this->container['service_probability'] = $service_probability;

        return $this;
    }

    /**
     * Gets auto_binding
     * @return bool
     */
    public function getAutoBinding()
    {
        return $this->container['auto_binding'];
    }

    /**
     * Sets auto_binding
     * @param bool $auto_binding Is auto operators binding enable to the queue?
     * @return $this
     */
    public function setAutoBinding($auto_binding)
    {
        $this->container['auto_binding'] = $auto_binding;

        return $this;
    }

    /**
     * Gets max_queue_size
     * @return int
     */
    public function getMaxQueueSize()
    {
        return $this->container['max_queue_size'];
    }

    /**
     * Sets max_queue_size
     * @param int $max_queue_size The max queue size.
     * @return $this
     */
    public function setMaxQueueSize($max_queue_size)
    {
        $this->container['max_queue_size'] = $max_queue_size;

        return $this;
    }

    /**
     * Gets max_waiting_time
     * @return int
     */
    public function getMaxWaitingTime()
    {
        return $this->container['max_waiting_time'];
    }

    /**
     * Sets max_waiting_time
     * @param int $max_waiting_time The max predicted waiting time in minutes. The client is rejected if the predicted waiting time is greater than the max predicted waiting time.
     * @return $this
     */
    public function setMaxWaitingTime($max_waiting_time)
    {
        $this->container['max_waiting_time'] = $max_waiting_time;

        return $this;
    }

    /**
     * Gets average_service_time
     * @return int
     */
    public function getAverageServiceTime()
    {
        return $this->container['average_service_time'];
    }

    /**
     * Sets average_service_time
     * @param int $average_service_time The average service time in seconds. The parameter corrects the waiting time prediction.
     * @return $this
     */
    public function setAverageServiceTime($average_service_time)
    {
        $this->container['average_service_time'] = $average_service_time;

        return $this;
    }

    /**
     * Gets skills
     * @return \backend\modules\voximplant\models\SkillInfoType[]
     */
    public function getSkills()
    {
        return $this->container['skills'];
    }

    /**
     * Sets skills
     * @param \backend\modules\voximplant\models\SkillInfoType[] $skills
     * @return $this
     */
    public function setSkills($skills)
    {
        $this->container['skills'] = $skills;

        return $this;
    }

    /**
     * Gets modified
     * @return string
     */
    public function getModified()
    {
        return $this->container['modified'];
    }

    /**
     * Sets modified
     * @param string $modified The queue editing UTC date in format: YYYY-MM-DD HH:mm:SS
     * @return $this
     */
    public function setModified($modified)
    {
        $this->container['modified'] = $modified;

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


