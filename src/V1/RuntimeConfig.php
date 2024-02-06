<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Runtime configuration for a workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.RuntimeConfig</code>
 */
class RuntimeConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Version of the batch runtime.
     *
     * Generated from protobuf field <code>string version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $version = '';
    /**
     * Optional. Optional custom container image for the job runtime environment.
     * If not specified, a default container image will be used.
     *
     * Generated from protobuf field <code>string container_image = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $container_image = '';
    /**
     * Optional. A mapping of property names to values, which are used to
     * configure workload execution.
     *
     * Generated from protobuf field <code>map<string, string> properties = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;
    /**
     * Optional. Dependency repository configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RepositoryConfig repository_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $repository_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *           Optional. Version of the batch runtime.
     *     @type string $container_image
     *           Optional. Optional custom container image for the job runtime environment.
     *           If not specified, a default container image will be used.
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. A mapping of property names to values, which are used to
     *           configure workload execution.
     *     @type \Google\Cloud\Dataproc\V1\RepositoryConfig $repository_config
     *           Optional. Dependency repository configuration.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Version of the batch runtime.
     *
     * Generated from protobuf field <code>string version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Optional. Version of the batch runtime.
     *
     * Generated from protobuf field <code>string version = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Optional. Optional custom container image for the job runtime environment.
     * If not specified, a default container image will be used.
     *
     * Generated from protobuf field <code>string container_image = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getContainerImage()
    {
        return $this->container_image;
    }

    /**
     * Optional. Optional custom container image for the job runtime environment.
     * If not specified, a default container image will be used.
     *
     * Generated from protobuf field <code>string container_image = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setContainerImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->container_image = $var;

        return $this;
    }

    /**
     * Optional. A mapping of property names to values, which are used to
     * configure workload execution.
     *
     * Generated from protobuf field <code>map<string, string> properties = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. A mapping of property names to values, which are used to
     * configure workload execution.
     *
     * Generated from protobuf field <code>map<string, string> properties = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setProperties($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->properties = $arr;

        return $this;
    }

    /**
     * Optional. Dependency repository configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RepositoryConfig repository_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\RepositoryConfig|null
     */
    public function getRepositoryConfig()
    {
        return $this->repository_config;
    }

    public function hasRepositoryConfig()
    {
        return isset($this->repository_config);
    }

    public function clearRepositoryConfig()
    {
        unset($this->repository_config);
    }

    /**
     * Optional. Dependency repository configuration.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.RepositoryConfig repository_config = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\RepositoryConfig $var
     * @return $this
     */
    public function setRepositoryConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\RepositoryConfig::class);
        $this->repository_config = $var;

        return $this;
    }

}

