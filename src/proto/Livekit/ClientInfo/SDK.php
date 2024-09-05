<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit\ClientInfo;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.ClientInfo.SDK</code>
 */
class SDK
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>JS = 1;</code>
     */
    const JS = 1;
    /**
     * Generated from protobuf enum <code>SWIFT = 2;</code>
     */
    const SWIFT = 2;
    /**
     * Generated from protobuf enum <code>ANDROID = 3;</code>
     */
    const ANDROID = 3;
    /**
     * Generated from protobuf enum <code>FLUTTER = 4;</code>
     */
    const FLUTTER = 4;
    /**
     * Generated from protobuf enum <code>GO = 5;</code>
     */
    const GO = 5;
    /**
     * Generated from protobuf enum <code>UNITY = 6;</code>
     */
    const UNITY = 6;
    /**
     * Generated from protobuf enum <code>REACT_NATIVE = 7;</code>
     */
    const REACT_NATIVE = 7;
    /**
     * Generated from protobuf enum <code>RUST = 8;</code>
     */
    const RUST = 8;
    /**
     * Generated from protobuf enum <code>PYTHON = 9;</code>
     */
    const PYTHON = 9;
    /**
     * Generated from protobuf enum <code>CPP = 10;</code>
     */
    const CPP = 10;
    /**
     * Generated from protobuf enum <code>UNITY_WEB = 11;</code>
     */
    const UNITY_WEB = 11;
    /**
     * Generated from protobuf enum <code>NODE = 12;</code>
     */
    const NODE = 12;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::JS => 'JS',
        self::SWIFT => 'SWIFT',
        self::ANDROID => 'ANDROID',
        self::FLUTTER => 'FLUTTER',
        self::GO => 'GO',
        self::UNITY => 'UNITY',
        self::REACT_NATIVE => 'REACT_NATIVE',
        self::RUST => 'RUST',
        self::PYTHON => 'PYTHON',
        self::CPP => 'CPP',
        self::UNITY_WEB => 'UNITY_WEB',
        self::NODE => 'NODE',
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
class_alias(SDK::class, \Livekit\ClientInfo_SDK::class);

