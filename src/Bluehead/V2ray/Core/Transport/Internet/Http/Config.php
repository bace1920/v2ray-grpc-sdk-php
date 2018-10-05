<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/http/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.http.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string host = 1;</code>
     */
    private $host;
    /**
     * Generated from protobuf field <code>string path = 2;</code>
     */
    private $path = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $host
     *     @type string $path
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transport\Internet\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string host = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Generated from protobuf field <code>repeated string host = 1;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHost($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->host = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Generated from protobuf field <code>string path = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPath($var)
    {
        GPBUtil::checkString($var, True);
        $this->path = $var;

        return $this;
    }

}
