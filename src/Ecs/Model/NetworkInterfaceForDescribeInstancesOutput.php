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

class NetworkInterfaceForDescribeInstancesOutput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'NetworkInterfaceForDescribeInstancesOutput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'mac_address' => 'string',
        'network_interface_id' => 'string',
        'primary_ip_address' => 'string',
        'subnet_id' => 'string',
        'type' => 'string',
        'vpc_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'mac_address' => null,
        'network_interface_id' => null,
        'primary_ip_address' => null,
        'subnet_id' => null,
        'type' => null,
        'vpc_id' => null
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
        'mac_address' => 'MacAddress',
        'network_interface_id' => 'NetworkInterfaceId',
        'primary_ip_address' => 'PrimaryIpAddress',
        'subnet_id' => 'SubnetId',
        'type' => 'Type',
        'vpc_id' => 'VpcId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'mac_address' => 'setMacAddress',
        'network_interface_id' => 'setNetworkInterfaceId',
        'primary_ip_address' => 'setPrimaryIpAddress',
        'subnet_id' => 'setSubnetId',
        'type' => 'setType',
        'vpc_id' => 'setVpcId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'mac_address' => 'getMacAddress',
        'network_interface_id' => 'getNetworkInterfaceId',
        'primary_ip_address' => 'getPrimaryIpAddress',
        'subnet_id' => 'getSubnetId',
        'type' => 'getType',
        'vpc_id' => 'getVpcId'
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
        $this->container['mac_address'] = isset($data['mac_address']) ? $data['mac_address'] : null;
        $this->container['network_interface_id'] = isset($data['network_interface_id']) ? $data['network_interface_id'] : null;
        $this->container['primary_ip_address'] = isset($data['primary_ip_address']) ? $data['primary_ip_address'] : null;
        $this->container['subnet_id'] = isset($data['subnet_id']) ? $data['subnet_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['vpc_id'] = isset($data['vpc_id']) ? $data['vpc_id'] : null;
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
     * Gets mac_address
     *
     * @return string
     */
    public function getMacAddress()
    {
        return $this->container['mac_address'];
    }

    /**
     * Sets mac_address
     *
     * @param string $mac_address mac_address
     *
     * @return $this
     */
    public function setMacAddress($mac_address)
    {
        $this->container['mac_address'] = $mac_address;

        return $this;
    }

    /**
     * Gets network_interface_id
     *
     * @return string
     */
    public function getNetworkInterfaceId()
    {
        return $this->container['network_interface_id'];
    }

    /**
     * Sets network_interface_id
     *
     * @param string $network_interface_id network_interface_id
     *
     * @return $this
     */
    public function setNetworkInterfaceId($network_interface_id)
    {
        $this->container['network_interface_id'] = $network_interface_id;

        return $this;
    }

    /**
     * Gets primary_ip_address
     *
     * @return string
     */
    public function getPrimaryIpAddress()
    {
        return $this->container['primary_ip_address'];
    }

    /**
     * Sets primary_ip_address
     *
     * @param string $primary_ip_address primary_ip_address
     *
     * @return $this
     */
    public function setPrimaryIpAddress($primary_ip_address)
    {
        $this->container['primary_ip_address'] = $primary_ip_address;

        return $this;
    }

    /**
     * Gets subnet_id
     *
     * @return string
     */
    public function getSubnetId()
    {
        return $this->container['subnet_id'];
    }

    /**
     * Sets subnet_id
     *
     * @param string $subnet_id subnet_id
     *
     * @return $this
     */
    public function setSubnetId($subnet_id)
    {
        $this->container['subnet_id'] = $subnet_id;

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
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets vpc_id
     *
     * @return string
     */
    public function getVpcId()
    {
        return $this->container['vpc_id'];
    }

    /**
     * Sets vpc_id
     *
     * @param string $vpc_id vpc_id
     *
     * @return $this
     */
    public function setVpcId($vpc_id)
    {
        $this->container['vpc_id'] = $vpc_id;

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

