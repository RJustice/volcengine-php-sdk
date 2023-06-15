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

class DescribeSpotAdviceRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeSpotAdviceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'cpus' => 'int',
        'gpu' => '\Volcengine\Ecs\Model\GpuForDescribeSpotAdviceInput',
        'instance_type_family' => 'string',
        'instance_type_ids' => 'string[]',
        'max_results' => 'int',
        'memory_size' => 'int',
        'min_cpus' => 'int',
        'min_memory_size' => 'int',
        'next_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'cpus' => 'int32',
        'gpu' => null,
        'instance_type_family' => null,
        'instance_type_ids' => null,
        'max_results' => 'int32',
        'memory_size' => 'int32',
        'min_cpus' => 'int32',
        'min_memory_size' => 'int32',
        'next_token' => null
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
        'cpus' => 'Cpus',
        'gpu' => 'Gpu',
        'instance_type_family' => 'InstanceTypeFamily',
        'instance_type_ids' => 'InstanceTypeIds',
        'max_results' => 'MaxResults',
        'memory_size' => 'MemorySize',
        'min_cpus' => 'MinCpus',
        'min_memory_size' => 'MinMemorySize',
        'next_token' => 'NextToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cpus' => 'setCpus',
        'gpu' => 'setGpu',
        'instance_type_family' => 'setInstanceTypeFamily',
        'instance_type_ids' => 'setInstanceTypeIds',
        'max_results' => 'setMaxResults',
        'memory_size' => 'setMemorySize',
        'min_cpus' => 'setMinCpus',
        'min_memory_size' => 'setMinMemorySize',
        'next_token' => 'setNextToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cpus' => 'getCpus',
        'gpu' => 'getGpu',
        'instance_type_family' => 'getInstanceTypeFamily',
        'instance_type_ids' => 'getInstanceTypeIds',
        'max_results' => 'getMaxResults',
        'memory_size' => 'getMemorySize',
        'min_cpus' => 'getMinCpus',
        'min_memory_size' => 'getMinMemorySize',
        'next_token' => 'getNextToken'
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
        $this->container['cpus'] = isset($data['cpus']) ? $data['cpus'] : null;
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['instance_type_family'] = isset($data['instance_type_family']) ? $data['instance_type_family'] : null;
        $this->container['instance_type_ids'] = isset($data['instance_type_ids']) ? $data['instance_type_ids'] : null;
        $this->container['max_results'] = isset($data['max_results']) ? $data['max_results'] : null;
        $this->container['memory_size'] = isset($data['memory_size']) ? $data['memory_size'] : null;
        $this->container['min_cpus'] = isset($data['min_cpus']) ? $data['min_cpus'] : null;
        $this->container['min_memory_size'] = isset($data['min_memory_size']) ? $data['min_memory_size'] : null;
        $this->container['next_token'] = isset($data['next_token']) ? $data['next_token'] : null;
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
     * Gets cpus
     *
     * @return int
     */
    public function getCpus()
    {
        return $this->container['cpus'];
    }

    /**
     * Sets cpus
     *
     * @param int $cpus cpus
     *
     * @return $this
     */
    public function setCpus($cpus)
    {
        $this->container['cpus'] = $cpus;

        return $this;
    }

    /**
     * Gets gpu
     *
     * @return \Volcengine\Ecs\Model\GpuForDescribeSpotAdviceInput
     */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
     * Sets gpu
     *
     * @param \Volcengine\Ecs\Model\GpuForDescribeSpotAdviceInput $gpu gpu
     *
     * @return $this
     */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;

        return $this;
    }

    /**
     * Gets instance_type_family
     *
     * @return string
     */
    public function getInstanceTypeFamily()
    {
        return $this->container['instance_type_family'];
    }

    /**
     * Sets instance_type_family
     *
     * @param string $instance_type_family instance_type_family
     *
     * @return $this
     */
    public function setInstanceTypeFamily($instance_type_family)
    {
        $this->container['instance_type_family'] = $instance_type_family;

        return $this;
    }

    /**
     * Gets instance_type_ids
     *
     * @return string[]
     */
    public function getInstanceTypeIds()
    {
        return $this->container['instance_type_ids'];
    }

    /**
     * Sets instance_type_ids
     *
     * @param string[] $instance_type_ids instance_type_ids
     *
     * @return $this
     */
    public function setInstanceTypeIds($instance_type_ids)
    {
        $this->container['instance_type_ids'] = $instance_type_ids;

        return $this;
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
     * Gets memory_size
     *
     * @return int
     */
    public function getMemorySize()
    {
        return $this->container['memory_size'];
    }

    /**
     * Sets memory_size
     *
     * @param int $memory_size memory_size
     *
     * @return $this
     */
    public function setMemorySize($memory_size)
    {
        $this->container['memory_size'] = $memory_size;

        return $this;
    }

    /**
     * Gets min_cpus
     *
     * @return int
     */
    public function getMinCpus()
    {
        return $this->container['min_cpus'];
    }

    /**
     * Sets min_cpus
     *
     * @param int $min_cpus min_cpus
     *
     * @return $this
     */
    public function setMinCpus($min_cpus)
    {
        $this->container['min_cpus'] = $min_cpus;

        return $this;
    }

    /**
     * Gets min_memory_size
     *
     * @return int
     */
    public function getMinMemorySize()
    {
        return $this->container['min_memory_size'];
    }

    /**
     * Sets min_memory_size
     *
     * @param int $min_memory_size min_memory_size
     *
     * @return $this
     */
    public function setMinMemorySize($min_memory_size)
    {
        $this->container['min_memory_size'] = $min_memory_size;

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
