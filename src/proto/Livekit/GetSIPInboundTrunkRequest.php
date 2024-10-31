<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.GetSIPInboundTrunkRequest</code>
 */
class GetSIPInboundTrunkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string sip_trunk_id = 1;</code>
     */
    protected $sip_trunk_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $sip_trunk_id
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

}

