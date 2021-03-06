<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: config.proto

namespace Bluehead\V2ray\Core;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * InboundHandlerConfig is the configuration for inbound handler.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.InboundHandlerConfig</code>
 */
class InboundHandlerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Tag of the inbound handler. The tag must be unique among all inbound handlers
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     */
    private $tag = '';
    /**
     * Settings for how this inbound proxy is handled.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage receiver_settings = 2;</code>
     */
    private $receiver_settings = null;
    /**
     * Settings for inbound proxy. Must be one of the inbound proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage proxy_settings = 3;</code>
     */
    private $proxy_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $tag
     *           Tag of the inbound handler. The tag must be unique among all inbound handlers
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage $receiver_settings
     *           Settings for how this inbound proxy is handled.
     *     @type \Bluehead\V2ray\Core\Common\Serial\TypedMessage $proxy_settings
     *           Settings for inbound proxy. Must be one of the inbound proxies.
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Tag of the inbound handler. The tag must be unique among all inbound handlers
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Tag of the inbound handler. The tag must be unique among all inbound handlers
     *
     * Generated from protobuf field <code>string tag = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTag($var)
    {
        GPBUtil::checkString($var, True);
        $this->tag = $var;

        return $this;
    }

    /**
     * Settings for how this inbound proxy is handled.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage receiver_settings = 2;</code>
     * @return \Bluehead\V2ray\Core\Common\Serial\TypedMessage
     */
    public function getReceiverSettings()
    {
        return $this->receiver_settings;
    }

    /**
     * Settings for how this inbound proxy is handled.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage receiver_settings = 2;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setReceiverSettings($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->receiver_settings = $var;

        return $this;
    }

    /**
     * Settings for inbound proxy. Must be one of the inbound proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage proxy_settings = 3;</code>
     * @return \Bluehead\V2ray\Core\Common\Serial\TypedMessage
     */
    public function getProxySettings()
    {
        return $this->proxy_settings;
    }

    /**
     * Settings for inbound proxy. Must be one of the inbound proxies.
     *
     * Generated from protobuf field <code>.bluehead.v2ray.core.common.serial.TypedMessage proxy_settings = 3;</code>
     * @param \Bluehead\V2ray\Core\Common\Serial\TypedMessage $var
     * @return $this
     */
    public function setProxySettings($var)
    {
        GPBUtil::checkMessage($var, \Bluehead\V2ray\Core\Common\Serial\TypedMessage::class);
        $this->proxy_settings = $var;

        return $this;
    }

}

