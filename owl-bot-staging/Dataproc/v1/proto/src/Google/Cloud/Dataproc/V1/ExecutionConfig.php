<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Execution configuration for a workload.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ExecutionConfig</code>
 */
class ExecutionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Service account that used to execute workload.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_account = '';
    /**
     * Optional. Tags used for network traffic control.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $network_tags;
    /**
     * Optional. The Cloud KMS key to use for encryption.
     *
     * Generated from protobuf field <code>string kms_key = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $kms_key = '';
    protected $network;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service_account
     *           Optional. Service account that used to execute workload.
     *     @type string $network_uri
     *           Optional. Network URI to connect workload to.
     *     @type string $subnetwork_uri
     *           Optional. Subnetwork URI to connect workload to.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $network_tags
     *           Optional. Tags used for network traffic control.
     *     @type string $kms_key
     *           Optional. The Cloud KMS key to use for encryption.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Shared::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Service account that used to execute workload.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. Service account that used to execute workload.
     *
     * Generated from protobuf field <code>string service_account = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. Network URI to connect workload to.
     *
     * Generated from protobuf field <code>string network_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getNetworkUri()
    {
        return $this->readOneof(4);
    }

    public function hasNetworkUri()
    {
        return $this->hasOneof(4);
    }

    /**
     * Optional. Network URI to connect workload to.
     *
     * Generated from protobuf field <code>string network_uri = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setNetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Optional. Subnetwork URI to connect workload to.
     *
     * Generated from protobuf field <code>string subnetwork_uri = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getSubnetworkUri()
    {
        return $this->readOneof(5);
    }

    public function hasSubnetworkUri()
    {
        return $this->hasOneof(5);
    }

    /**
     * Optional. Subnetwork URI to connect workload to.
     *
     * Generated from protobuf field <code>string subnetwork_uri = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setSubnetworkUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Optional. Tags used for network traffic control.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNetworkTags()
    {
        return $this->network_tags;
    }

    /**
     * Optional. Tags used for network traffic control.
     *
     * Generated from protobuf field <code>repeated string network_tags = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNetworkTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->network_tags = $arr;

        return $this;
    }

    /**
     * Optional. The Cloud KMS key to use for encryption.
     *
     * Generated from protobuf field <code>string kms_key = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getKmsKey()
    {
        return $this->kms_key;
    }

    /**
     * Optional. The Cloud KMS key to use for encryption.
     *
     * Generated from protobuf field <code>string kms_key = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKey($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getNetwork()
    {
        return $this->whichOneof("network");
    }

}

