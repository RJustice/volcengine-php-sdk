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

class NodeStatisticsForListNodePoolsOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NodeStatisticsForListNodePoolsOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'creating_count' => 'int',
        'deleting_count' => 'int',
        'failed_count' => 'int',
        'running_count' => 'int',
        'total_count' => 'int',
        'updating_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'creating_count' => 'int32',
        'deleting_count' => 'int32',
        'failed_count' => 'int32',
        'running_count' => 'int32',
        'total_count' => 'int32',
        'updating_count' => 'int32'
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
        'creating_count' => 'CreatingCount',
        'deleting_count' => 'DeletingCount',
        'failed_count' => 'FailedCount',
        'running_count' => 'RunningCount',
        'total_count' => 'TotalCount',
        'updating_count' => 'UpdatingCount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'creating_count' => 'setCreatingCount',
        'deleting_count' => 'setDeletingCount',
        'failed_count' => 'setFailedCount',
        'running_count' => 'setRunningCount',
        'total_count' => 'setTotalCount',
        'updating_count' => 'setUpdatingCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'creating_count' => 'getCreatingCount',
        'deleting_count' => 'getDeletingCount',
        'failed_count' => 'getFailedCount',
        'running_count' => 'getRunningCount',
        'total_count' => 'getTotalCount',
        'updating_count' => 'getUpdatingCount'
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
        $this->container['creating_count'] = isset($data['creating_count']) ? $data['creating_count'] : null;
        $this->container['deleting_count'] = isset($data['deleting_count']) ? $data['deleting_count'] : null;
        $this->container['failed_count'] = isset($data['failed_count']) ? $data['failed_count'] : null;
        $this->container['running_count'] = isset($data['running_count']) ? $data['running_count'] : null;
        $this->container['total_count'] = isset($data['total_count']) ? $data['total_count'] : null;
        $this->container['updating_count'] = isset($data['updating_count']) ? $data['updating_count'] : null;
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
     * Gets creating_count
     *
     * @return int
     */
    public function getCreatingCount()
    {
        return $this->container['creating_count'];
    }

    /**
     * Sets creating_count
     *
     * @param int $creating_count creating_count
     *
     * @return $this
     */
    public function setCreatingCount($creating_count)
    {
        $this->container['creating_count'] = $creating_count;

        return $this;
    }

    /**
     * Gets deleting_count
     *
     * @return int
     */
    public function getDeletingCount()
    {
        return $this->container['deleting_count'];
    }

    /**
     * Sets deleting_count
     *
     * @param int $deleting_count deleting_count
     *
     * @return $this
     */
    public function setDeletingCount($deleting_count)
    {
        $this->container['deleting_count'] = $deleting_count;

        return $this;
    }

    /**
     * Gets failed_count
     *
     * @return int
     */
    public function getFailedCount()
    {
        return $this->container['failed_count'];
    }

    /**
     * Sets failed_count
     *
     * @param int $failed_count failed_count
     *
     * @return $this
     */
    public function setFailedCount($failed_count)
    {
        $this->container['failed_count'] = $failed_count;

        return $this;
    }

    /**
     * Gets running_count
     *
     * @return int
     */
    public function getRunningCount()
    {
        return $this->container['running_count'];
    }

    /**
     * Sets running_count
     *
     * @param int $running_count running_count
     *
     * @return $this
     */
    public function setRunningCount($running_count)
    {
        $this->container['running_count'] = $running_count;

        return $this;
    }

    /**
     * Gets total_count
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->container['total_count'];
    }

    /**
     * Sets total_count
     *
     * @param int $total_count total_count
     *
     * @return $this
     */
    public function setTotalCount($total_count)
    {
        $this->container['total_count'] = $total_count;

        return $this;
    }

    /**
     * Gets updating_count
     *
     * @return int
     */
    public function getUpdatingCount()
    {
        return $this->container['updating_count'];
    }

    /**
     * Sets updating_count
     *
     * @param int $updating_count updating_count
     *
     * @return $this
     */
    public function setUpdatingCount($updating_count)
    {
        $this->container['updating_count'] = $updating_count;

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
