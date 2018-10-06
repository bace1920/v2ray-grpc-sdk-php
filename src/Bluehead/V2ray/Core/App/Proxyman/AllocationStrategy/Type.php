<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: app/proxyman/config.proto

namespace Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy;

/**
 * Protobuf type <code>bluehead.v2ray.core.app.proxyman.AllocationStrategy.Type</code>
 */
class Type
{
    /**
     * Always allocate all connection handlers.
     *
     * Generated from protobuf enum <code>Always = 0;</code>
     */
    const Always = 0;
    /**
     * Randomly allocate specific range of handlers.
     *
     * Generated from protobuf enum <code>Random = 1;</code>
     */
    const Random = 1;
    /**
     * External. Not supported yet.
     *
     * Generated from protobuf enum <code>External = 2;</code>
     */
    const External = 2;
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Type::class, \Bluehead\V2ray\Core\App\Proxyman\AllocationStrategy_Type::class);
