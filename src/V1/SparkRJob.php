<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/jobs.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc job for running
 * [Apache SparkR](https://spark.apache.org/docs/latest/sparkr.html)
 * applications on YARN.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.SparkRJob</code>
 */
class SparkRJob extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The HCFS URI of the main R file to use as the driver.
     * Must be a .R file.
     *
     * Generated from protobuf field <code>string main_r_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $main_r_file_uri = '';
    /**
     * Optional. The arguments to pass to the driver.  Do not include arguments,
     * such as `--conf`, that can be set as job properties, since a collision may
     * occur that causes an incorrect job submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $args;
    /**
     * Optional. HCFS URIs of files to be copied to the working directory of
     * R drivers and distributed tasks. Useful for naively parallel tasks.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $file_uris;
    /**
     * Optional. HCFS URIs of archives to be extracted in the working directory of
     * Spark drivers and tasks. Supported file types:
     * .jar, .tar, .tar.gz, .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $archive_uris;
    /**
     * Optional. A mapping of property names to values, used to configure SparkR.
     * Properties that conflict with values set by the Dataproc API may be
     * overwritten. Can include properties set in
     * /etc/spark/conf/spark-defaults.conf and classes in user code.
     *
     * Generated from protobuf field <code>map<string, string> properties = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $properties;
    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $logging_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $main_r_file_uri
     *           Required. The HCFS URI of the main R file to use as the driver.
     *           Must be a .R file.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $args
     *           Optional. The arguments to pass to the driver.  Do not include arguments,
     *           such as `--conf`, that can be set as job properties, since a collision may
     *           occur that causes an incorrect job submission.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $file_uris
     *           Optional. HCFS URIs of files to be copied to the working directory of
     *           R drivers and distributed tasks. Useful for naively parallel tasks.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $archive_uris
     *           Optional. HCFS URIs of archives to be extracted in the working directory of
     *           Spark drivers and tasks. Supported file types:
     *           .jar, .tar, .tar.gz, .tgz, and .zip.
     *     @type array|\Google\Protobuf\Internal\MapField $properties
     *           Optional. A mapping of property names to values, used to configure SparkR.
     *           Properties that conflict with values set by the Dataproc API may be
     *           overwritten. Can include properties set in
     *           /etc/spark/conf/spark-defaults.conf and classes in user code.
     *     @type \Google\Cloud\Dataproc\V1\LoggingConfig $logging_config
     *           Optional. The runtime log config for job execution.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Jobs::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The HCFS URI of the main R file to use as the driver.
     * Must be a .R file.
     *
     * Generated from protobuf field <code>string main_r_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getMainRFileUri()
    {
        return $this->main_r_file_uri;
    }

    /**
     * Required. The HCFS URI of the main R file to use as the driver.
     * Must be a .R file.
     *
     * Generated from protobuf field <code>string main_r_file_uri = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setMainRFileUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->main_r_file_uri = $var;

        return $this;
    }

    /**
     * Optional. The arguments to pass to the driver.  Do not include arguments,
     * such as `--conf`, that can be set as job properties, since a collision may
     * occur that causes an incorrect job submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Optional. The arguments to pass to the driver.  Do not include arguments,
     * such as `--conf`, that can be set as job properties, since a collision may
     * occur that causes an incorrect job submission.
     *
     * Generated from protobuf field <code>repeated string args = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of files to be copied to the working directory of
     * R drivers and distributed tasks. Useful for naively parallel tasks.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getFileUris()
    {
        return $this->file_uris;
    }

    /**
     * Optional. HCFS URIs of files to be copied to the working directory of
     * R drivers and distributed tasks. Useful for naively parallel tasks.
     *
     * Generated from protobuf field <code>repeated string file_uris = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setFileUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->file_uris = $arr;

        return $this;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted in the working directory of
     * Spark drivers and tasks. Supported file types:
     * .jar, .tar, .tar.gz, .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArchiveUris()
    {
        return $this->archive_uris;
    }

    /**
     * Optional. HCFS URIs of archives to be extracted in the working directory of
     * Spark drivers and tasks. Supported file types:
     * .jar, .tar, .tar.gz, .tgz, and .zip.
     *
     * Generated from protobuf field <code>repeated string archive_uris = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArchiveUris($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->archive_uris = $arr;

        return $this;
    }

    /**
     * Optional. A mapping of property names to values, used to configure SparkR.
     * Properties that conflict with values set by the Dataproc API may be
     * overwritten. Can include properties set in
     * /etc/spark/conf/spark-defaults.conf and classes in user code.
     *
     * Generated from protobuf field <code>map<string, string> properties = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Optional. A mapping of property names to values, used to configure SparkR.
     * Properties that conflict with values set by the Dataproc API may be
     * overwritten. Can include properties set in
     * /etc/spark/conf/spark-defaults.conf and classes in user code.
     *
     * Generated from protobuf field <code>map<string, string> properties = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
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
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Dataproc\V1\LoggingConfig
     */
    public function getLoggingConfig()
    {
        return $this->logging_config;
    }

    /**
     * Optional. The runtime log config for job execution.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.LoggingConfig logging_config = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Dataproc\V1\LoggingConfig $var
     * @return $this
     */
    public function setLoggingConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\LoggingConfig::class);
        $this->logging_config = $var;

        return $this;
    }

}

