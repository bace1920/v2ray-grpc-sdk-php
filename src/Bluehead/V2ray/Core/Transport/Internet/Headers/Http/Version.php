<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/headers/http/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Headers\Http;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * HTTP version. Default value "1.1".
 *
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.headers.http.Version</code>
 */
class Version extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string value = 1;</code>
     */
    private $value = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Transport\Internet\Headers\Http\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string value = 1;</code>
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>string value = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkString($var, True);
        $this->value = $var;

        return $this;
    }

}
