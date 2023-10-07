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

class FilterForListClustersInput implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FilterForListClustersInput';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'create_client_token' => 'string',
        'delete_protection_enabled' => 'bool',
        'ids' => 'string[]',
        'name' => 'string',
        'pods_config_pod_network_mode' => 'string',
        'statuses' => '\Volcengine\Vke\Model\StatusForListClustersInput[]',
        'update_client_token' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'create_client_token' => null,
        'delete_protection_enabled' => null,
        'ids' => null,
        'name' => null,
        'pods_config_pod_network_mode' => null,
        'statuses' => null,
        'update_client_token' => null
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
        'create_client_token' => 'CreateClientToken',
        'delete_protection_enabled' => 'DeleteProtectionEnabled',
        'ids' => 'Ids',
        'name' => 'Name',
        'pods_config_pod_network_mode' => 'PodsConfig.PodNetworkMode',
        'statuses' => 'Statuses',
        'update_client_token' => 'UpdateClientToken'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'create_client_token' => 'setCreateClientToken',
        'delete_protection_enabled' => 'setDeleteProtectionEnabled',
        'ids' => 'setIds',
        'name' => 'setName',
        'pods_config_pod_network_mode' => 'setPodsConfigPodNetworkMode',
        'statuses' => 'setStatuses',
        'update_client_token' => 'setUpdateClientToken'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'create_client_token' => 'getCreateClientToken',
        'delete_protection_enabled' => 'getDeleteProtectionEnabled',
        'ids' => 'getIds',
        'name' => 'getName',
        'pods_config_pod_network_mode' => 'getPodsConfigPodNetworkMode',
        'statuses' => 'getStatuses',
        'update_client_token' => 'getUpdateClientToken'
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

    const PODS_CONFIG_POD_NETWORK_MODE_CALICO_BGP = 'CalicoBgp';
    const PODS_CONFIG_POD_NETWORK_MODE_CALICO_VXLAN = 'CalicoVxlan';
    const PODS_CONFIG_POD_NETWORK_MODE_CARMA = 'Carma';
    const PODS_CONFIG_POD_NETWORK_MODE_CILIUM = 'Cilium';
    const PODS_CONFIG_POD_NETWORK_MODE__DEFAULT = 'Default';
    const PODS_CONFIG_POD_NETWORK_MODE_FLANNEL = 'Flannel';
    const PODS_CONFIG_POD_NETWORK_MODE_KUBE_OVN = 'KubeOvn';
    const PODS_CONFIG_POD_NETWORK_MODE_VPC_CNI_DEDICATED = 'VpcCniDedicated';
    const PODS_CONFIG_POD_NETWORK_MODE_VPC_CNI_SHARED = 'VpcCniShared';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPodsConfigPodNetworkModeAllowableValues()
    {
        return [
            self::PODS_CONFIG_POD_NETWORK_MODE_CALICO_BGP,
            self::PODS_CONFIG_POD_NETWORK_MODE_CALICO_VXLAN,
            self::PODS_CONFIG_POD_NETWORK_MODE_CARMA,
            self::PODS_CONFIG_POD_NETWORK_MODE_CILIUM,
            self::PODS_CONFIG_POD_NETWORK_MODE__DEFAULT,
            self::PODS_CONFIG_POD_NETWORK_MODE_FLANNEL,
            self::PODS_CONFIG_POD_NETWORK_MODE_KUBE_OVN,
            self::PODS_CONFIG_POD_NETWORK_MODE_VPC_CNI_DEDICATED,
            self::PODS_CONFIG_POD_NETWORK_MODE_VPC_CNI_SHARED,
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
        $this->container['create_client_token'] = isset($data['create_client_token']) ? $data['create_client_token'] : null;
        $this->container['delete_protection_enabled'] = isset($data['delete_protection_enabled']) ? $data['delete_protection_enabled'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['pods_config_pod_network_mode'] = isset($data['pods_config_pod_network_mode']) ? $data['pods_config_pod_network_mode'] : null;
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['update_client_token'] = isset($data['update_client_token']) ? $data['update_client_token'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPodsConfigPodNetworkModeAllowableValues();
        if (!is_null($this->container['pods_config_pod_network_mode']) && !in_array($this->container['pods_config_pod_network_mode'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pods_config_pod_network_mode', must be one of '%s'",
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
     * Gets create_client_token
     *
     * @return string
     */
    public function getCreateClientToken()
    {
        return $this->container['create_client_token'];
    }

    /**
     * Sets create_client_token
     *
     * @param string $create_client_token create_client_token
     *
     * @return $this
     */
    public function setCreateClientToken($create_client_token)
    {
        $this->container['create_client_token'] = $create_client_token;

        return $this;
    }

    /**
     * Gets delete_protection_enabled
     *
     * @return bool
     */
    public function getDeleteProtectionEnabled()
    {
        return $this->container['delete_protection_enabled'];
    }

    /**
     * Sets delete_protection_enabled
     *
     * @param bool $delete_protection_enabled delete_protection_enabled
     *
     * @return $this
     */
    public function setDeleteProtectionEnabled($delete_protection_enabled)
    {
        $this->container['delete_protection_enabled'] = $delete_protection_enabled;

        return $this;
    }

    /**
     * Gets ids
     *
     * @return string[]
     */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
     * Sets ids
     *
     * @param string[] $ids ids
     *
     * @return $this
     */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets pods_config_pod_network_mode
     *
     * @return string
     */
    public function getPodsConfigPodNetworkMode()
    {
        return $this->container['pods_config_pod_network_mode'];
    }

    /**
     * Sets pods_config_pod_network_mode
     *
     * @param string $pods_config_pod_network_mode pods_config_pod_network_mode
     *
     * @return $this
     */
    public function setPodsConfigPodNetworkMode($pods_config_pod_network_mode)
    {
        $allowedValues = $this->getPodsConfigPodNetworkModeAllowableValues();
        if (!is_null($pods_config_pod_network_mode) && !in_array($pods_config_pod_network_mode, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'pods_config_pod_network_mode', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['pods_config_pod_network_mode'] = $pods_config_pod_network_mode;

        return $this;
    }

    /**
     * Gets statuses
     *
     * @return \Volcengine\Vke\Model\StatusForListClustersInput[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param \Volcengine\Vke\Model\StatusForListClustersInput[] $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets update_client_token
     *
     * @return string
     */
    public function getUpdateClientToken()
    {
        return $this->container['update_client_token'];
    }

    /**
     * Sets update_client_token
     *
     * @param string $update_client_token update_client_token
     *
     * @return $this
     */
    public function setUpdateClientToken($update_client_token)
    {
        $this->container['update_client_token'] = $update_client_token;

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
