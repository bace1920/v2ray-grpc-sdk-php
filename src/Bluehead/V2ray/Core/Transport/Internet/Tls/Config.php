<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/tls/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Tls;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.transport.internet.tls.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether or not to allow self-signed certificates.
     *
     * Generated from protobuf field <code>bool allow_insecure = 1;</code>
     */
    private $allow_insecure = false;
    /**
     * Whether or not to allow insecure cipher suites.
     *
     * Generated from protobuf field <code>bool allow_insecure_ciphers = 5;</code>
     */
    private $allow_insecure_ciphers = false;
    /**
     * List of certificates to be served on server.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.tls.Certificate certificate = 2;</code>
     */
    private $certificate;
    /**
     * Override server name.
     *
     * Generated from protobuf field <code>string server_name = 3;</code>
     */
    private $server_name = '';
    /**
     * Lists of string as ALPN values.
     *
     * Generated from protobuf field <code>repeated string next_protocol = 4;</code>
     */
    private $next_protocol;
    /**
     * Whether or not to disable session (ticket) resumption.
     *
     * Generated from protobuf field <code>bool disable_session_resumption = 6;</code>
     */
    private $disable_session_resumption = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $allow_insecure
     *           Whether or not to allow self-signed certificates.
     *     @type bool $allow_insecure_ciphers
     *           Whether or not to allow insecure cipher suites.
     *     @type \Bluehead\V2ray\Core\Transport\Internet\Tls\Certificate[]|\Google\Protobuf\Internal\RepeatedField $certificate
     *           List of certificates to be served on server.
     *     @type string $server_name
     *           Override server name.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $next_protocol
     *           Lists of string as ALPN values.
     *     @type bool $disable_session_resumption
     *           Whether or not to disable session (ticket) resumption.
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\Transport\Internet\Tls\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether or not to allow self-signed certificates.
     *
     * Generated from protobuf field <code>bool allow_insecure = 1;</code>
     * @return bool
     */
    public function getAllowInsecure()
    {
        return $this->allow_insecure;
    }

    /**
     * Whether or not to allow self-signed certificates.
     *
     * Generated from protobuf field <code>bool allow_insecure = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowInsecure($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_insecure = $var;

        return $this;
    }

    /**
     * Whether or not to allow insecure cipher suites.
     *
     * Generated from protobuf field <code>bool allow_insecure_ciphers = 5;</code>
     * @return bool
     */
    public function getAllowInsecureCiphers()
    {
        return $this->allow_insecure_ciphers;
    }

    /**
     * Whether or not to allow insecure cipher suites.
     *
     * Generated from protobuf field <code>bool allow_insecure_ciphers = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowInsecureCiphers($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_insecure_ciphers = $var;

        return $this;
    }

    /**
     * List of certificates to be served on server.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.tls.Certificate certificate = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * List of certificates to be served on server.
     *
     * Generated from protobuf field <code>repeated .bluehead.v2ray.core.transport.internet.tls.Certificate certificate = 2;</code>
     * @param \Bluehead\V2ray\Core\Transport\Internet\Tls\Certificate[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCertificate($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Bluehead\V2ray\Core\Transport\Internet\Tls\Certificate::class);
        $this->certificate = $arr;

        return $this;
    }

    /**
     * Override server name.
     *
     * Generated from protobuf field <code>string server_name = 3;</code>
     * @return string
     */
    public function getServerName()
    {
        return $this->server_name;
    }

    /**
     * Override server name.
     *
     * Generated from protobuf field <code>string server_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServerName($var)
    {
        GPBUtil::checkString($var, True);
        $this->server_name = $var;

        return $this;
    }

    /**
     * Lists of string as ALPN values.
     *
     * Generated from protobuf field <code>repeated string next_protocol = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNextProtocol()
    {
        return $this->next_protocol;
    }

    /**
     * Lists of string as ALPN values.
     *
     * Generated from protobuf field <code>repeated string next_protocol = 4;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNextProtocol($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->next_protocol = $arr;

        return $this;
    }

    /**
     * Whether or not to disable session (ticket) resumption.
     *
     * Generated from protobuf field <code>bool disable_session_resumption = 6;</code>
     * @return bool
     */
    public function getDisableSessionResumption()
    {
        return $this->disable_session_resumption;
    }

    /**
     * Whether or not to disable session (ticket) resumption.
     *
     * Generated from protobuf field <code>bool disable_session_resumption = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableSessionResumption($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_session_resumption = $var;

        return $this;
    }

}

