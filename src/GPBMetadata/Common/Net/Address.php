<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: common/net/address.proto

namespace Bluehead\V2ray\GPBMetadata\Common\Net;

class Address
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ab7010a18636f6d6d6f6e2f6e65742f616464726573732e70726f746f12" .
            "1e626c7565686561642e76327261792e636f72652e636f6d6d6f6e2e6e65" .
            "7422370a0a49504f72446f6d61696e120c0a02697018012001280c480012" .
            "100a06646f6d61696e180220012809480042090a0761646472657373423a" .
            "0a19636f6d2e76327261792e636f72652e636f6d6d6f6e2e6e657450015a" .
            "036e6574aa021556325261792e436f72652e436f6d6d6f6e2e4e65746206" .
            "70726f746f33"
        ));

        static::$is_initialized = true;
    }
}

