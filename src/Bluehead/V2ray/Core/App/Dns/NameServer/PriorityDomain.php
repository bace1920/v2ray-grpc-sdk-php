<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/dns/config.proto

namespace Bluehead\V2ray\Core\App\Dns\NameServer;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.dns.NameServer.PriorityDomain</code>
 */
class PriorityDomain extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.dns.DomainMatchingType type = 1;</code>
     */
    private $type = 0;
    /**
     * Generated from protobuf field <code>string domain = 2;</code>
     */
    private $domain = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *     @type string $domain
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\App\Dns\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.dns.DomainMatchingType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.bluehead.v2ray.core.app.dns.DomainMatchingType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Bluehead\V2ray\Core\App\Dns\DomainMatchingType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string domain = 2;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PriorityDomain::class, \Bluehead\V2ray\Core\App\Dns\NameServer_PriorityDomain::class);

