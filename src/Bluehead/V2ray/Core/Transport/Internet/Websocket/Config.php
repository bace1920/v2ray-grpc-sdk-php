<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/websocket/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Websocket;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.websocket.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * URL path to the WebSocket service. Empty value means root(/).
     *
     * Generated from protobuf field <code>string path = 2;</code>
     */
    private $path = '';
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.websocket.Header header = 3;</code>
     */
    private $header;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $path
     *           URL path to the WebSocket service. Empty value means root(/).
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Websocket\Header[]|\Google\Protobuf\Internal\RepeatedField $header
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transport\Internet\Websocket\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * URL path to the WebSocket service. Empty value means root(/).
     *
     * Generated from protobuf field <code>string path = 2;</code>
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * URL path to the WebSocket service. Empty value means root(/).
     *
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

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.websocket.Header header = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.websocket.Header header = 3;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Websocket\Header[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setHeader($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Transport\Internet\Websocket\Header::class);
        $this->header = $arr;

        return $this;
    }

}
