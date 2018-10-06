<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transport/internet/tls/config.proto

namespace Bluehead\V2ray\Core\Transport\Internet\Tls\Certificate;

/**
 * Protobuf type <code>bluehead.v2ray.core.transport.internet.tls.Certificate.Usage</code>
 */
class Usage
{
    /**
     * Generated from protobuf enum <code>ENCIPHERMENT = 0;</code>
     */
    const ENCIPHERMENT = 0;
    /**
     * Generated from protobuf enum <code>AUTHORITY_VERIFY = 1;</code>
     */
    const AUTHORITY_VERIFY = 1;
    /**
     * Generated from protobuf enum <code>AUTHORITY_ISSUE = 2;</code>
     */
    const AUTHORITY_ISSUE = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Usage::class, \Bluehead\V2ray\Core\Transport\Internet\Tls\Certificate_Usage::class);

