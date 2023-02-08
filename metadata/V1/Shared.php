<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/shared.proto

namespace GPBMetadata\Google\Cloud\Dataproc\V1;

class Shared
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%google/cloud/dataproc/v1/shared.protogoogle.cloud.dataproc.v1"�
RuntimeConfig
version (	B�A
container_image (	B�AP

properties (27.google.cloud.dataproc.v1.RuntimeConfig.PropertiesEntryB�A1
PropertiesEntry
key (	
value (	:8"�
EnvironmentConfigH
execution_config (2).google.cloud.dataproc.v1.ExecutionConfigB�AL
peripherals_config (2+.google.cloud.dataproc.v1.PeripheralsConfigB�A"�
ExecutionConfig
service_account (	B�A
network_uri (	B�AH 
subnetwork_uri (	B�AH 
network_tags (	B�A
kms_key (	B�AB	
network"9
SparkHistoryServerConfig
dataproc_cluster (	B�A"�
PeripheralsConfig
metastore_service (	B�A\\
spark_history_server_config (22.google.cloud.dataproc.v1.SparkHistoryServerConfigB�A"�
RuntimeInfoL
	endpoints (24.google.cloud.dataproc.v1.RuntimeInfo.EndpointsEntryB�A

output_uri (	B�A"
diagnostic_output_uri (	B�A0
EndpointsEntry
key (	
value (	:8"
GkeClusterConfig
gke_cluster_target (	B�AJ
node_pool_target (2+.google.cloud.dataproc.v1.GkeNodePoolTargetB�A"�
KubernetesClusterConfig!
kubernetes_namespace (	B�AM
gke_cluster_config (2*.google.cloud.dataproc.v1.GkeClusterConfigB�AH [
kubernetes_software_config (22.google.cloud.dataproc.v1.KubernetesSoftwareConfigB�AB
config"�
KubernetesSoftwareConfigc
component_version (2H.google.cloud.dataproc.v1.KubernetesSoftwareConfig.ComponentVersionEntryV

properties (2B.google.cloud.dataproc.v1.KubernetesSoftwareConfig.PropertiesEntry7
ComponentVersionEntry
key (	
value (	:81
PropertiesEntry
key (	
value (	:8"�
GkeNodePoolTarget
	node_pool (	B�AD
roles (20.google.cloud.dataproc.v1.GkeNodePoolTarget.RoleB�AJ
node_pool_config (2+.google.cloud.dataproc.v1.GkeNodePoolConfigB�A"_
Role
ROLE_UNSPECIFIED 
DEFAULT

CONTROLLER
SPARK_DRIVER
SPARK_EXECUTOR"�
GkeNodePoolConfigN
config (29.google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodeConfigB�A
	locations (	B�Ab
autoscaling (2H.google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodePoolAutoscalingConfigB�A�
GkeNodeConfig
machine_type (	B�A
preemptible
 (B�A
local_ssd_count (B�Ac
accelerators (2H.google.cloud.dataproc.v1.GkeNodePoolConfig.GkeNodePoolAcceleratorConfigB�A
min_cpu_platform (	B�AS
GkeNodePoolAcceleratorConfig
accelerator_count (
accelerator_type (	N
GkeNodePoolAutoscalingConfig
min_node_count (
max_node_count (*�
	Component
COMPONENT_UNSPECIFIED 
ANACONDA

DOCKER	
DRUID		
FLINK	
HBASE
HIVE_WEBHCAT
JUPYTER

PRESTO

RANGER
SOLR

ZEPPELIN
	ZOOKEEPER*J
FailureAction
FAILURE_ACTION_UNSPECIFIED 
	NO_ACTION

DELETEBg
com.google.cloud.dataproc.v1BSharedProtoPZ8cloud.google.com/go/dataproc/apiv1/dataprocpb;dataprocpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

