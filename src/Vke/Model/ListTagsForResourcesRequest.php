<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Volcengine\Vke\Model;

use ArrayAccess;
use Volcengine\Common\ObjectSerializer;
use Volcengine\Common\ModelInterface;

class ListTagsForResourcesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ListTagsForResourcesRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'max_results' => 'int',
        'next_token' => 'string',
        'resource_ids' => 'string[]',
        'resource_type' => 'string',
        'tag_filters' => '\Volcengine\Vke\Model\TagFilterForListTagsForResourcesInput[]',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'max_results' => 'int32',
        'next_token' => null,
        'resource_ids' => null,
        'resource_type' => null,
        'tag_filters' => null,
        'type' => null
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
        'max_results' => 'MaxResults',
        'next_token' => 'NextToken',
        'resource_ids' => 'ResourceIds',
        'resource_type' => 'ResourceType',
        'tag_filters' => 'TagFilters',
        'type' => 'Type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'max_results' => 'setMaxResults',
        'next_token' => 'setNextToken',
        'resource_ids' => 'setResourceIds',
        'resource_type' => 'setResourceType',
        'tag_filters' => 'setTagFilters',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'max_results' => 'getMaxResults',
        'next_token' => 'getNextToken',
        'resource_ids' => 'getResourceIds',
        'resource_type' => 'getResourceType',
        'tag_filters' => 'getTagFilters',
        'type' => 'getType'
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

    const RESOURCE_TYPE_BARE_MACHINE = 'BareMachine';
    const RESOURCE_TYPE_CLUSTER = 'Cluster';
    const RESOURCE_TYPE_NODE_POOL = 'NodePool';
    const TYPE_CUSTOM = 'Custom';
    const TYPE_SYSTEM = 'System';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_BARE_MACHINE,
            self::RESOURCE_TYPE_CLUSTER,
            self::RESOURCE_TYPE_NODE_POOL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CUSTOM,
            self::TYPE_SYSTEM,
        ];
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
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
        $this->container['resource_ids'] = isset($data['resource_ids']) ? $data['resource_ids'] : null;
        $this->container['resource_type'] = isset($data['resource_type']) ? $data['resource_type'] : null;
        $this->container['tag_filters'] = isset($data['tag_filters']) ? $data['tag_filters'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($this->container['resource_type']) && !in_array($this->container['resource_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'resource_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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
     * Gets max_results
     *
     * @return int
     */
    public function getMaxResults()
    {
        return $this->container['max_results'];
    }

    /**
     * Sets max_results
     *
     * @param int $max_results max_results
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
     * Gets resource_type
     *
     * @return string
     */
    public function getResourceType()
    {
        return $this->container['resource_type'];
    }

    /**
     * Sets resource_type
     *
     * @param string $resource_type resource_type
     *
     * @return $this
     */
    public function setResourceType($resource_type)
    {
        $allowedValues = $this->getResourceTypeAllowableValues();
        if (!is_null($resource_type) && !in_array($resource_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'resource_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['resource_type'] = $resource_type;

        return $this;
    }

    /**
     * Gets tag_filters
     *
     * @return \Volcengine\Vke\Model\TagFilterForListTagsForResourcesInput[]
     */
    public function getTagFilters()
    {
        return $this->container['tag_filters'];
    }

    /**
     * Sets tag_filters
     *
     * @param \Volcengine\Vke\Model\TagFilterForListTagsForResourcesInput[] $tag_filters tag_filters
     *
     * @return $this
     */
    public function setTagFilters($tag_filters)
    {
        $this->container['tag_filters'] = $tag_filters;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

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
