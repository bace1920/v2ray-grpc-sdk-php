<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/config.proto

namespace Bluehead\V2ray\Core\Transport;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Global transport settings. This affects all type of connections that go through V2Ray.
 * Deprecated. Use each settings in StreamConfig.
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.TransportConfig transport_settings = 1;</code>
     */
    private $transport_settings;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Bluehead\V2ray\Core\Transport\Internet\TransportConfig[]|\Google\Protobuf\Internal\RepeatedField $transport_settings
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Transport\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.TransportConfig transport_settings = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransportSettings()
    {
        return $this->transport_settings;
    }

    /**
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.TransportConfig transport_settings = 1;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\TransportConfig[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransportSettings($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Transport\Internet\TransportConfig::class);
        $this->transport_settings = $arr;

        return $this;
    }

}

