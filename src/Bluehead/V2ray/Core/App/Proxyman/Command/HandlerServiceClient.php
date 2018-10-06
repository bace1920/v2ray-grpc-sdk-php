<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Bluehead\V2ray\Core\App\Proxyman\Command;

/**
 */
class HandlerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Proxyman\Command\AddInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddInbound(\Bluehead\V2ray\Core\App\Proxyman\Command\AddInboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluehead.v2ray.core.app.proxyman.command.HandlerService/AddInbound',
        $argument,
        ['\Bluehead\V2ray\Core\App\Proxyman\Command\AddInboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Proxyman\Command\RemoveInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveInbound(\Bluehead\V2ray\Core\App\Proxyman\Command\RemoveInboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluehead.v2ray.core.app.proxyman.command.HandlerService/RemoveInbound',
        $argument,
        ['\Bluehead\V2ray\Core\App\Proxyman\Command\RemoveInboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Proxyman\Command\AlterInboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AlterInbound(\Bluehead\V2ray\Core\App\Proxyman\Command\AlterInboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluehead.v2ray.core.app.proxyman.command.HandlerService/AlterInbound',
        $argument,
        ['\Bluehead\V2ray\Core\App\Proxyman\Command\AlterInboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Proxyman\Command\AddOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AddOutbound(\Bluehead\V2ray\Core\App\Proxyman\Command\AddOutboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluehead.v2ray.core.app.proxyman.command.HandlerService/AddOutbound',
        $argument,
        ['\Bluehead\V2ray\Core\App\Proxyman\Command\AddOutboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Proxyman\Command\RemoveOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RemoveOutbound(\Bluehead\V2ray\Core\App\Proxyman\Command\RemoveOutboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluehead.v2ray.core.app.proxyman.command.HandlerService/RemoveOutbound',
        $argument,
        ['\Bluehead\V2ray\Core\App\Proxyman\Command\RemoveOutboundResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Proxyman\Command\AlterOutboundRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function AlterOutbound(\Bluehead\V2ray\Core\App\Proxyman\Command\AlterOutboundRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/bluehead.v2ray.core.app.proxyman.command.HandlerService/AlterOutbound',
        $argument,
        ['\Bluehead\V2ray\Core\App\Proxyman\Command\AlterOutboundResponse', 'decode'],
        $metadata, $options);
    }

}
