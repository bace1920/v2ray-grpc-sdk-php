<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/command/command.proto

namespace Bluehead\V2ray\Core\App\Proxyman\Command;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>bluehead.v2ray.core.app.proxyman.command.RemoveUserOperation</code>
 */
class RemoveUserOperation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1;</code>
     */
    private $email = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     * }
     */
    public function __construct($data = NULL) {
        \Bluehead\V2ray\GPBMetadata\App\Proxyman\Command\Command::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

}

