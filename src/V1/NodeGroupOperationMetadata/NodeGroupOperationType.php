<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/operations.proto

namespace Google\Cloud\Dataproc\V1\NodeGroupOperationMetadata;

use UnexpectedValueException;

/**
 * Operation type for node group resources.
 *
 * Protobuf type <code>google.cloud.dataproc.v1.NodeGroupOperationMetadata.NodeGroupOperationType</code>
 */
class NodeGroupOperationType
{
    /**
     * Node group operation type is unknown.
     *
     * Generated from protobuf enum <code>NODE_GROUP_OPERATION_TYPE_UNSPECIFIED = 0;</code>
     */
    const NODE_GROUP_OPERATION_TYPE_UNSPECIFIED = 0;
    /**
     * Create node group operation type.
     *
     * Generated from protobuf enum <code>CREATE = 1;</code>
     */
    const CREATE = 1;
    /**
     * Update node group operation type.
     *
     * Generated from protobuf enum <code>UPDATE = 2;</code>
     */
    const UPDATE = 2;
    /**
     * Delete node group operation type.
     *
     * Generated from protobuf enum <code>DELETE = 3;</code>
     */
    const DELETE = 3;
    /**
     * Resize node group operation type.
     *
     * Generated from protobuf enum <code>RESIZE = 4;</code>
     */
    const RESIZE = 4;

    private static $valueToName = [
        self::NODE_GROUP_OPERATION_TYPE_UNSPECIFIED => 'NODE_GROUP_OPERATION_TYPE_UNSPECIFIED',
        self::CREATE => 'CREATE',
        self::UPDATE => 'UPDATE',
        self::DELETE => 'DELETE',
        self::RESIZE => 'RESIZE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NodeGroupOperationType::class, \Google\Cloud\Dataproc\V1\NodeGroupOperationMetadata_NodeGroupOperationType::class);

