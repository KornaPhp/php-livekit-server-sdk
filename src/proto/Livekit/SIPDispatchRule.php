<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.SIPDispatchRule</code>
 */
class SIPDispatchRule extends \Google\Protobuf\Internal\Message
{
    protected $rule;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Livekit\SIPDispatchRuleDirect $dispatch_rule_direct
     *           SIPDispatchRuleDirect is a `SIP Dispatch Rule` that puts a user directly into a room
     *           This places users into an existing room. Optionally you can require a pin before a user can
     *           enter the room
     *     @type \Livekit\SIPDispatchRuleIndividual $dispatch_rule_individual
     *           SIPDispatchRuleIndividual is a `SIP Dispatch Rule` that creates a new room for each caller.
     *     @type \Livekit\SIPDispatchRuleCallee $dispatch_rule_callee
     *           SIPDispatchRuleCallee is a `SIP Dispatch Rule` that creates a new room for each callee.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitSip::initOnce();
        parent::__construct($data);
    }

    /**
     * SIPDispatchRuleDirect is a `SIP Dispatch Rule` that puts a user directly into a room
     * This places users into an existing room. Optionally you can require a pin before a user can
     * enter the room
     *
     * Generated from protobuf field <code>.livekit.SIPDispatchRuleDirect dispatch_rule_direct = 1;</code>
     * @return \Livekit\SIPDispatchRuleDirect|null
     */
    public function getDispatchRuleDirect()
    {
        return $this->readOneof(1);
    }

    public function hasDispatchRuleDirect()
    {
        return $this->hasOneof(1);
    }

    /**
     * SIPDispatchRuleDirect is a `SIP Dispatch Rule` that puts a user directly into a room
     * This places users into an existing room. Optionally you can require a pin before a user can
     * enter the room
     *
     * Generated from protobuf field <code>.livekit.SIPDispatchRuleDirect dispatch_rule_direct = 1;</code>
     * @param \Livekit\SIPDispatchRuleDirect $var
     * @return $this
     */
    public function setDispatchRuleDirect($var)
    {
        GPBUtil::checkMessage($var, \Livekit\SIPDispatchRuleDirect::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * SIPDispatchRuleIndividual is a `SIP Dispatch Rule` that creates a new room for each caller.
     *
     * Generated from protobuf field <code>.livekit.SIPDispatchRuleIndividual dispatch_rule_individual = 2;</code>
     * @return \Livekit\SIPDispatchRuleIndividual|null
     */
    public function getDispatchRuleIndividual()
    {
        return $this->readOneof(2);
    }

    public function hasDispatchRuleIndividual()
    {
        return $this->hasOneof(2);
    }

    /**
     * SIPDispatchRuleIndividual is a `SIP Dispatch Rule` that creates a new room for each caller.
     *
     * Generated from protobuf field <code>.livekit.SIPDispatchRuleIndividual dispatch_rule_individual = 2;</code>
     * @param \Livekit\SIPDispatchRuleIndividual $var
     * @return $this
     */
    public function setDispatchRuleIndividual($var)
    {
        GPBUtil::checkMessage($var, \Livekit\SIPDispatchRuleIndividual::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * SIPDispatchRuleCallee is a `SIP Dispatch Rule` that creates a new room for each callee.
     *
     * Generated from protobuf field <code>.livekit.SIPDispatchRuleCallee dispatch_rule_callee = 3;</code>
     * @return \Livekit\SIPDispatchRuleCallee|null
     */
    public function getDispatchRuleCallee()
    {
        return $this->readOneof(3);
    }

    public function hasDispatchRuleCallee()
    {
        return $this->hasOneof(3);
    }

    /**
     * SIPDispatchRuleCallee is a `SIP Dispatch Rule` that creates a new room for each callee.
     *
     * Generated from protobuf field <code>.livekit.SIPDispatchRuleCallee dispatch_rule_callee = 3;</code>
     * @param \Livekit\SIPDispatchRuleCallee $var
     * @return $this
     */
    public function setDispatchRuleCallee($var)
    {
        GPBUtil::checkMessage($var, \Livekit\SIPDispatchRuleCallee::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getRule()
    {
        return $this->whichOneof("rule");
    }

}

