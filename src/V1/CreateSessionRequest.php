<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/sessions.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A request to create a session.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.CreateSessionRequest</code>
 */
class CreateSessionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parent resource where this session will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The interactive session to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $session = null;
    /**
     * Required. The ID to use for the session, which becomes the final component
     * of the session's resource name.
     * This value must be 4-63 characters. Valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string session_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $session_id = '';
    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [CreateSessionRequests](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateSessionRequest)s
     * with the same ID, the second request is ignored, and the
     * first [Session][google.cloud.dataproc.v1.Session] is created and stored in
     * the backend.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $request_id = '';

    /**
     * @param string                            $parent    Required. The parent resource where this session will be created. Please see
     *                                                     {@see SessionControllerClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Dataproc\V1\Session $session   Required. The interactive session to create.
     * @param string                            $sessionId Required. The ID to use for the session, which becomes the final component
     *                                                     of the session's resource name.
     *
     *                                                     This value must be 4-63 characters. Valid characters
     *                                                     are /[a-z][0-9]-/.
     *
     * @return \Google\Cloud\Dataproc\V1\CreateSessionRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Dataproc\V1\Session $session, string $sessionId): self
    {
        return (new self())
            ->setParent($parent)
            ->setSession($session)
            ->setSessionId($sessionId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The parent resource where this session will be created.
     *     @type \Google\Cloud\Dataproc\V1\Session $session
     *           Required. The interactive session to create.
     *     @type string $session_id
     *           Required. The ID to use for the session, which becomes the final component
     *           of the session's resource name.
     *           This value must be 4-63 characters. Valid characters
     *           are /[a-z][0-9]-/.
     *     @type string $request_id
     *           Optional. A unique ID used to identify the request. If the service
     *           receives two
     *           [CreateSessionRequests](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateSessionRequest)s
     *           with the same ID, the second request is ignored, and the
     *           first [Session][google.cloud.dataproc.v1.Session] is created and stored in
     *           the backend.
     *           Recommendation: Set this value to a
     *           [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     *           The value must contain only letters (a-z, A-Z), numbers (0-9),
     *           underscores (_), and hyphens (-). The maximum length is 40 characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Sessions::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parent resource where this session will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The parent resource where this session will be created.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The interactive session to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Dataproc\V1\Session|null
     */
    public function getSession()
    {
        return $this->session;
    }

    public function hasSession()
    {
        return isset($this->session);
    }

    public function clearSession()
    {
        unset($this->session);
    }

    /**
     * Required. The interactive session to create.
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.Session session = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Dataproc\V1\Session $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataproc\V1\Session::class);
        $this->session = $var;

        return $this;
    }

    /**
     * Required. The ID to use for the session, which becomes the final component
     * of the session's resource name.
     * This value must be 4-63 characters. Valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string session_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Required. The ID to use for the session, which becomes the final component
     * of the session's resource name.
     * This value must be 4-63 characters. Valid characters
     * are /[a-z][0-9]-/.
     *
     * Generated from protobuf field <code>string session_id = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [CreateSessionRequests](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateSessionRequest)s
     * with the same ID, the second request is ignored, and the
     * first [Session][google.cloud.dataproc.v1.Session] is created and stored in
     * the backend.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * Optional. A unique ID used to identify the request. If the service
     * receives two
     * [CreateSessionRequests](https://cloud.google.com/dataproc/docs/reference/rpc/google.cloud.dataproc.v1#google.cloud.dataproc.v1.CreateSessionRequest)s
     * with the same ID, the second request is ignored, and the
     * first [Session][google.cloud.dataproc.v1.Session] is created and stored in
     * the backend.
     * Recommendation: Set this value to a
     * [UUID](https://en.wikipedia.org/wiki/Universally_unique_identifier).
     * The value must contain only letters (a-z, A-Z), numbers (0-9),
     * underscores (_), and hyphens (-). The maximum length is 40 characters.
     *
     * Generated from protobuf field <code>string request_id = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}
