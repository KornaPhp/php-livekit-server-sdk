<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SIPOutboundTrunkInfo</code>
 */
class SIPOutboundTrunkInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sip_trunk_id = 1;</code>
     */
    protected $sip_trunk_id = '';
    /**
     * Human-readable name for the Trunk.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     */
    protected $name = '';
    /**
     * User-defined metadata for the Trunk.
     *
     * Generated from protobuf field <code>string metadata = 3;</code>
     */
    protected $metadata = '';
    /**
     * Hostname or IP that SIP INVITE is sent too.
     * Note that this is not a SIP URI and should not contain the 'sip:' protocol prefix.
     *
     * Generated from protobuf field <code>string address = 4;</code>
     */
    protected $address = '';
    /**
     * SIP Transport used for outbound call.
     *
     * Generated from protobuf field <code>.livekit.SIPTransport transport = 5;</code>
     */
    protected $transport = 0;
    /**
     * Numbers used to make the calls. Random one from this list will be selected.
     *
     * Generated from protobuf field <code>repeated string numbers = 6;</code>
     */
    private $numbers;
    /**
     * Username and password used to authenticate with SIP server.
     * May be empty to have no authentication.
     *
     * Generated from protobuf field <code>string auth_username = 7;</code>
     */
    protected $auth_username = '';
    /**
     * Generated from protobuf field <code>string auth_password = 8;</code>
     */
    protected $auth_password = '';
    /**
     * Include these SIP X-* headers in INVITE request.
     * These headers are sent as-is and may help identify this call as coming from LiveKit for the other SIP endpoint.
     *
     * Generated from protobuf field <code>map<string, string> headers = 9;</code>
     */
    private $headers;
    /**
     * Map SIP X-* headers from 200 OK to SIP participant attributes.
     * Keys are the names of X-* headers and values are the names of attributes they will be mapped to.
     *
     * Generated from protobuf field <code>map<string, string> headers_to_attributes = 10;</code>
     */
    private $headers_to_attributes;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sip_trunk_id
     *     @type string $name
     *           Human-readable name for the Trunk.
     *     @type string $metadata
     *           User-defined metadata for the Trunk.
     *     @type string $address
     *           Hostname or IP that SIP INVITE is sent too.
     *           Note that this is not a SIP URI and should not contain the 'sip:' protocol prefix.
     *     @type int $transport
     *           SIP Transport used for outbound call.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $numbers
     *           Numbers used to make the calls. Random one from this list will be selected.
     *     @type string $auth_username
     *           Username and password used to authenticate with SIP server.
     *           May be empty to have no authentication.
     *     @type string $auth_password
     *     @type array|\Google\Protobuf\Internal\MapField $headers
     *           Include these SIP X-* headers in INVITE request.
     *           These headers are sent as-is and may help identify this call as coming from LiveKit for the other SIP endpoint.
     *     @type array|\Google\Protobuf\Internal\MapField $headers_to_attributes
     *           Map SIP X-* headers from 200 OK to SIP participant attributes.
     *           Keys are the names of X-* headers and values are the names of attributes they will be mapped to.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitSip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string sip_trunk_id = 1;</code>
     * @return string
     */
    public function getSipTrunkId()
    {
        return $this->sip_trunk_id;
    }

    /**
     * Generated from protobuf field <code>string sip_trunk_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSipTrunkId($var)
    {
        GPBUtil::checkString($var, True);
        $this->sip_trunk_id = $var;

        return $this;
    }

    /**
     * Human-readable name for the Trunk.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Human-readable name for the Trunk.
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * User-defined metadata for the Trunk.
     *
     * Generated from protobuf field <code>string metadata = 3;</code>
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * User-defined metadata for the Trunk.
     *
     * Generated from protobuf field <code>string metadata = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkString($var, True);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Hostname or IP that SIP INVITE is sent too.
     * Note that this is not a SIP URI and should not contain the 'sip:' protocol prefix.
     *
     * Generated from protobuf field <code>string address = 4;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Hostname or IP that SIP INVITE is sent too.
     * Note that this is not a SIP URI and should not contain the 'sip:' protocol prefix.
     *
     * Generated from protobuf field <code>string address = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     * SIP Transport used for outbound call.
     *
     * Generated from protobuf field <code>.livekit.SIPTransport transport = 5;</code>
     * @return int
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * SIP Transport used for outbound call.
     *
     * Generated from protobuf field <code>.livekit.SIPTransport transport = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setTransport($var)
    {
        GPBUtil::checkEnum($var, \Livekit\SIPTransport::class);
        $this->transport = $var;

        return $this;
    }

    /**
     * Numbers used to make the calls. Random one from this list will be selected.
     *
     * Generated from protobuf field <code>repeated string numbers = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNumbers()
    {
        return $this->numbers;
    }

    /**
     * Numbers used to make the calls. Random one from this list will be selected.
     *
     * Generated from protobuf field <code>repeated string numbers = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNumbers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->numbers = $arr;

        return $this;
    }

    /**
     * Username and password used to authenticate with SIP server.
     * May be empty to have no authentication.
     *
     * Generated from protobuf field <code>string auth_username = 7;</code>
     * @return string
     */
    public function getAuthUsername()
    {
        return $this->auth_username;
    }

    /**
     * Username and password used to authenticate with SIP server.
     * May be empty to have no authentication.
     *
     * Generated from protobuf field <code>string auth_username = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthUsername($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_username = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string auth_password = 8;</code>
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->auth_password;
    }

    /**
     * Generated from protobuf field <code>string auth_password = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setAuthPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->auth_password = $var;

        return $this;
    }

    /**
     * Include these SIP X-* headers in INVITE request.
     * These headers are sent as-is and may help identify this call as coming from LiveKit for the other SIP endpoint.
     *
     * Generated from protobuf field <code>map<string, string> headers = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeaders()
    {
        return $this->headers;
    }

    /**
     * Include these SIP X-* headers in INVITE request.
     * These headers are sent as-is and may help identify this call as coming from LiveKit for the other SIP endpoint.
     *
     * Generated from protobuf field <code>map<string, string> headers = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeaders($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers = $arr;

        return $this;
    }

    /**
     * Map SIP X-* headers from 200 OK to SIP participant attributes.
     * Keys are the names of X-* headers and values are the names of attributes they will be mapped to.
     *
     * Generated from protobuf field <code>map<string, string> headers_to_attributes = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getHeadersToAttributes()
    {
        return $this->headers_to_attributes;
    }

    /**
     * Map SIP X-* headers from 200 OK to SIP participant attributes.
     * Keys are the names of X-* headers and values are the names of attributes they will be mapped to.
     *
     * Generated from protobuf field <code>map<string, string> headers_to_attributes = 10;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setHeadersToAttributes($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->headers_to_attributes = $arr;

        return $this;
    }

}

