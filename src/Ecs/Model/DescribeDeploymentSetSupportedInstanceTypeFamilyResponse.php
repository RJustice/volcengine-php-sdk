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

class DescribeDeploymentSetSupportedInstanceTypeFamilyResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DescribeDeploymentSetSupportedInstanceTypeFamilyResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'deployment_set_create_instance_type_families' => 'string[]',
        'deployment_set_modify_instance_type_families' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'deployment_set_create_instance_type_families' => null,
        'deployment_set_modify_instance_type_families' => null
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
        'deployment_set_create_instance_type_families' => 'DeploymentSetCreateInstanceTypeFamilies',
        'deployment_set_modify_instance_type_families' => 'DeploymentSetModifyInstanceTypeFamilies'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deployment_set_create_instance_type_families' => 'setDeploymentSetCreateInstanceTypeFamilies',
        'deployment_set_modify_instance_type_families' => 'setDeploymentSetModifyInstanceTypeFamilies'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deployment_set_create_instance_type_families' => 'getDeploymentSetCreateInstanceTypeFamilies',
        'deployment_set_modify_instance_type_families' => 'getDeploymentSetModifyInstanceTypeFamilies'
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
        $this->container['deployment_set_create_instance_type_families'] = isset($data['deployment_set_create_instance_type_families']) ? $data['deployment_set_create_instance_type_families'] : null;
        $this->container['deployment_set_modify_instance_type_families'] = isset($data['deployment_set_modify_instance_type_families']) ? $data['deployment_set_modify_instance_type_families'] : null;
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
     * Gets deployment_set_create_instance_type_families
     *
     * @return string[]
     */
    public function getDeploymentSetCreateInstanceTypeFamilies()
    {
        return $this->container['deployment_set_create_instance_type_families'];
    }

    /**
     * Sets deployment_set_create_instance_type_families
     *
     * @param string[] $deployment_set_create_instance_type_families deployment_set_create_instance_type_families
     *
     * @return $this
     */
    public function setDeploymentSetCreateInstanceTypeFamilies($deployment_set_create_instance_type_families)
    {
        $this->container['deployment_set_create_instance_type_families'] = $deployment_set_create_instance_type_families;

        return $this;
    }

    /**
     * Gets deployment_set_modify_instance_type_families
     *
     * @return string[]
     */
    public function getDeploymentSetModifyInstanceTypeFamilies()
    {
        return $this->container['deployment_set_modify_instance_type_families'];
    }

    /**
     * Sets deployment_set_modify_instance_type_families
     *
     * @param string[] $deployment_set_modify_instance_type_families deployment_set_modify_instance_type_families
     *
     * @return $this
     */
    public function setDeploymentSetModifyInstanceTypeFamilies($deployment_set_modify_instance_type_families)
    {
        $this->container['deployment_set_modify_instance_type_families'] = $deployment_set_modify_instance_type_families;

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

