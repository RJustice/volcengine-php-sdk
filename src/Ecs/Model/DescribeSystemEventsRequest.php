<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Ecs\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class DescribeSystemEventsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeSystemEventsRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'created_at_end' => 'string',
        'created_at_start' => 'string',
        'event_ids' => 'string[]',
        'max_results' => 'string',
        'next_token' => 'string',
        'resource_ids' => 'string[]',
        'status' => 'string[]',
        'types' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'created_at_end' => null,
        'created_at_start' => null,
        'event_ids' => null,
        'max_results' => 'json_number',
        'next_token' => null,
        'resource_ids' => null,
        'status' => null,
        'types' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'created_at_end' => 'CreatedAtEnd',
        'created_at_start' => 'CreatedAtStart',
        'event_ids' => 'EventIds',
        'max_results' => 'MaxResults',
        'next_token' => 'NextToken',
        'resource_ids' => 'ResourceIds',
        'status' => 'Status',
        'types' => 'Types'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at_end' => 'setCreatedAtEnd',
        'created_at_start' => 'setCreatedAtStart',
        'event_ids' => 'setEventIds',
        'max_results' => 'setMaxResults',
        'next_token' => 'setNextToken',
        'resource_ids' => 'setResourceIds',
        'status' => 'setStatus',
        'types' => 'setTypes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at_end' => 'getCreatedAtEnd',
        'created_at_start' => 'getCreatedAtStart',
        'event_ids' => 'getEventIds',
        'max_results' => 'getMaxResults',
        'next_token' => 'getNextToken',
        'resource_ids' => 'getResourceIds',
        'status' => 'getStatus',
        'types' => 'getTypes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['created_at_end'] = isset($data['created_at_end']) ? $data['created_at_end'] : null;
        $this->container['created_at_start'] = isset($data['created_at_start']) ? $data['created_at_start'] : null;
        $this->container['event_ids'] = isset($data['event_ids']) ? $data['event_ids'] : null;
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['resource_ids'] = isset($data['resource_ids']) ? $data['resource_ids'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['types'] = isset($data['types']) ? $data['types'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets created_at_end
     *
     * @return string
     */
    public function getCreatedAtEnd()
    {
        return $this->container['created_at_end'];
    }

    /**
     * Sets created_at_end
     *
     * @param string $created_at_end created_at_end
     *
     * @return $this
     */
    public function setCreatedAtEnd($created_at_end)
    {
        $this->container['created_at_end'] = $created_at_end;

        return $this;
    }

    /**
     * Gets created_at_start
     *
     * @return string
     */
    public function getCreatedAtStart()
    {
        return $this->container['created_at_start'];
    }

    /**
     * Sets created_at_start
     *
     * @param string $created_at_start created_at_start
     *
     * @return $this
     */
    public function setCreatedAtStart($created_at_start)
    {
        $this->container['created_at_start'] = $created_at_start;

        return $this;
    }

    /**
     * Gets event_ids
     *
     * @return string[]
     */
    public function getEventIds()
    {
        return $this->container['event_ids'];
    }

    /**
     * Sets event_ids
     *
     * @param string[] $event_ids event_ids
     *
     * @return $this
     */
    public function setEventIds($event_ids)
    {
        $this->container['event_ids'] = $event_ids;

        return $this;
    }

    /**
     * Gets max_results
     *
     * @return string
     */
    public function getMaxResults()
    {
        return $this->container['max_results'];
    }

    /**
     * Sets max_results
     *
     * @param string $max_results max_results
     *
     * @return $this
     */
    public function setMaxResults($max_results)
    {
        $this->container['max_results'] = $max_results;

        return $this;
    }

    /**
     * Gets next_token
     *
     * @return string
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token
     *
     * @param string $next_token next_token
     *
     * @return $this
     */
    public function setNextToken($next_token)
    {
        $this->container['next_token'] = $next_token;

        return $this;
    }

    /**
     * Gets resource_ids
     *
     * @return string[]
     */
    public function getResourceIds()
    {
        return $this->container['resource_ids'];
    }

    /**
     * Sets resource_ids
     *
     * @param string[] $resource_ids resource_ids
     *
     * @return $this
     */
    public function setResourceIds($resource_ids)
    {
        $this->container['resource_ids'] = $resource_ids;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string[]
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string[] $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets types
     *
     * @return string[]
     */
    public function getTypes()
    {
        return $this->container['types'];
    }

    /**
     * Sets types
     *
     * @param string[] $types types
     *
     * @return $this
     */
    public function setTypes($types)
    {
        $this->container['types'] = $types;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

