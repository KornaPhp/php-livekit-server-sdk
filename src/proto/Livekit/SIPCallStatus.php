<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_sip.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.SIPCallStatus</code>
 */
class SIPCallStatus
{
    /**
     * Incoming call is being handled by the SIP service. The SIP participant hasn't joined a LiveKit room yet
     *
     * Generated from protobuf enum <code>SCS_CALL_INCOMING = 0;</code>
     */
    const SCS_CALL_INCOMING = 0;
    /**
     * SIP participant for outgoing call has been created. The SIP outgoing call is being established
     *
     * Generated from protobuf enum <code>SCS_PARTICIPANT_JOINED = 1;</code>
     */
    const SCS_PARTICIPANT_JOINED = 1;
    /**
     * Call is ongoing. SIP participant is active in the LiveKit room
     *
     * Generated from protobuf enum <code>SCS_ACTIVE = 2;</code>
     */
    const SCS_ACTIVE = 2;
    /**
     * Call has ended
     *
     * Generated from protobuf enum <code>SCS_DISCONNECTED = 3;</code>
     */
    const SCS_DISCONNECTED = 3;
    /**
     * Call has ended or never succeeded because of an error
     *
     * Generated from protobuf enum <code>SCS_ERROR = 4;</code>
     */
    const SCS_ERROR = 4;

    private static $valueToName = [
        self::SCS_CALL_INCOMING => 'SCS_CALL_INCOMING',
        self::SCS_PARTICIPANT_JOINED => 'SCS_PARTICIPANT_JOINED',
        self::SCS_ACTIVE => 'SCS_ACTIVE',
        self::SCS_DISCONNECTED => 'SCS_DISCONNECTED',
        self::SCS_ERROR => 'SCS_ERROR',
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

