<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/net/port.proto

namespace Bluehead\V2ray\Core\Common\Net;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PortRange represents a range of ports.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.common.net.PortRange</code>
 */
class PortRange extends \Google\Protobuf\Internal\Message
{
    /**
     * The port that this range starts from.
     *
     * Generated from protobuf field <code>uint32 From = 1;</code>
     */
    private $From = 0;
    /**
     * The port that this range ends with (inclusive).
     *
     * Generated from protobuf field <code>uint32 To = 2;</code>
     */
    private $To = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $From
     *           The port that this range starts from.
     *     @type int $To
     *           The port that this range ends with (inclusive).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Common\Net\Port::initOnce();
        parent::__construct($data);
    }

    /**
     * The port that this range starts from.
     *
     * Generated from protobuf field <code>uint32 From = 1;</code>
     * @return int
     */
    public function getFrom()
    {
        return $this->From;
    }

    /**
     * The port that this range starts from.
     *
     * Generated from protobuf field <code>uint32 From = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkUint32($var);
        $this->From = $var;

        return $this;
    }

    /**
     * The port that this range ends with (inclusive).
     *
     * Generated from protobuf field <code>uint32 To = 2;</code>
     * @return int
     */
    public function getTo()
    {
        return $this->To;
    }

    /**
     * The port that this range ends with (inclusive).
     *
     * Generated from protobuf field <code>uint32 To = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkUint32($var);
        $this->To = $var;

        return $this;
    }

}
