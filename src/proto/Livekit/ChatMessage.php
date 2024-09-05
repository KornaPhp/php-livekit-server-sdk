<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: livekit_models.proto

namespace Livekit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>livekit.ChatMessage</code>
 */
class ChatMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * uuid
     *
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>int64 timestamp = 2;</code>
     */
    protected $timestamp = 0;
    /**
     * populated only if the intent is to edit/update an existing message
     *
     * Generated from protobuf field <code>optional int64 edit_timestamp = 3;</code>
     */
    protected $edit_timestamp = null;
    /**
     * Generated from protobuf field <code>string message = 4;</code>
     */
    protected $message = '';
    /**
     * true to remove message
     *
     * Generated from protobuf field <code>bool deleted = 5;</code>
     */
    protected $deleted = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           uuid
     *     @type int|string $timestamp
     *     @type int|string $edit_timestamp
     *           populated only if the intent is to edit/update an existing message
     *     @type string $message
     *     @type bool $deleted
     *           true to remove message
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\LivekitModels::initOnce();
        parent::__construct($data);
    }

    /**
     * uuid
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * uuid
     *
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 2;</code>
     * @return int|string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Generated from protobuf field <code>int64 timestamp = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->timestamp = $var;

        return $this;
    }

    /**
     * populated only if the intent is to edit/update an existing message
     *
     * Generated from protobuf field <code>optional int64 edit_timestamp = 3;</code>
     * @return int|string
     */
    public function getEditTimestamp()
    {
        return isset($this->edit_timestamp) ? $this->edit_timestamp : 0;
    }

    public function hasEditTimestamp()
    {
        return isset($this->edit_timestamp);
    }

    public function clearEditTimestamp()
    {
        unset($this->edit_timestamp);
    }

    /**
     * populated only if the intent is to edit/update an existing message
     *
     * Generated from protobuf field <code>optional int64 edit_timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEditTimestamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->edit_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string message = 4;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Generated from protobuf field <code>string message = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * true to remove message
     *
     * Generated from protobuf field <code>bool deleted = 5;</code>
     * @return bool
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * true to remove message
     *
     * Generated from protobuf field <code>bool deleted = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setDeleted($var)
    {
        GPBUtil::checkBool($var);
        $this->deleted = $var;

        return $this;
    }

}

