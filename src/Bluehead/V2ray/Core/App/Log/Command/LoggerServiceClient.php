<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Bluehead\V2ray\Core\App\Log\Command;

/**
 */
class LoggerServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Log\Command\RestartLoggerRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function RestartLogger(\Bluehead\V2ray\Core\App\Log\Command\RestartLoggerRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/v2ray.core.app.log.command.LoggerService/RestartLogger',
        $argument,
        ['\Bluehead\V2ray\Core\App\Log\Command\RestartLoggerResponse', 'decode'],
        $metadata, $options);
    }

}
