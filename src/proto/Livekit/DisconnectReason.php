<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use UnexpectedValueException;

/**
 * Protobuf type <code>livekit.DisconnectReason</code>
 */
class DisconnectReason
{
    /**
     * Generated from protobuf enum <code>UNKNOWN_REASON = 0;</code>
     */
    const UNKNOWN_REASON = 0;
    /**
     * the client initiated the disconnect
     *
     * Generated from protobuf enum <code>CLIENT_INITIATED = 1;</code>
     */
    const CLIENT_INITIATED = 1;
    /**
     * another participant with the same identity has joined the room
     *
     * Generated from protobuf enum <code>DUPLICATE_IDENTITY = 2;</code>
     */
    const DUPLICATE_IDENTITY = 2;
    /**
     * the server instance is shutting down
     *
     * Generated from protobuf enum <code>SERVER_SHUTDOWN = 3;</code>
     */
    const SERVER_SHUTDOWN = 3;
    /**
     * RoomService.RemoveParticipant was called
     *
     * Generated from protobuf enum <code>PARTICIPANT_REMOVED = 4;</code>
     */
    const PARTICIPANT_REMOVED = 4;
    /**
     * RoomService.DeleteRoom was called
     *
     * Generated from protobuf enum <code>ROOM_DELETED = 5;</code>
     */
    const ROOM_DELETED = 5;
    /**
     * the client is attempting to resume a session, but server is not aware of it
     *
     * Generated from protobuf enum <code>STATE_MISMATCH = 6;</code>
     */
    const STATE_MISMATCH = 6;
    /**
     * client was unable to connect fully
     *
     * Generated from protobuf enum <code>JOIN_FAILURE = 7;</code>
     */
    const JOIN_FAILURE = 7;
    /**
     * Cloud-only, the server requested Participant to migrate the connection elsewhere
     *
     * Generated from protobuf enum <code>MIGRATION = 8;</code>
     */
    const MIGRATION = 8;
    /**
     * the signal websocket was closed unexpectedly
     *
     * Generated from protobuf enum <code>SIGNAL_CLOSE = 9;</code>
     */
    const SIGNAL_CLOSE = 9;
    /**
     * the room was closed, due to all Standard and Ingress participants having left
     *
     * Generated from protobuf enum <code>ROOM_CLOSED = 10;</code>
     */
    const ROOM_CLOSED = 10;

    private static $valueToName = [
        self::UNKNOWN_REASON => 'UNKNOWN_REASON',
        self::CLIENT_INITIATED => 'CLIENT_INITIATED',
        self::DUPLICATE_IDENTITY => 'DUPLICATE_IDENTITY',
        self::SERVER_SHUTDOWN => 'SERVER_SHUTDOWN',
        self::PARTICIPANT_REMOVED => 'PARTICIPANT_REMOVED',
        self::ROOM_DELETED => 'ROOM_DELETED',
        self::STATE_MISMATCH => 'STATE_MISMATCH',
        self::JOIN_FAILURE => 'JOIN_FAILURE',
        self::MIGRATION => 'MIGRATION',
        self::SIGNAL_CLOSE => 'SIGNAL_CLOSE',
        self::ROOM_CLOSED => 'ROOM_CLOSED',
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

