<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Bluehead\V2ray\Core\App\Stats\Command;

/**
 */
class StatsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Stats\Command\GetStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetStats(\Bluehead\V2ray\Core\App\Stats\Command\GetStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/v2ray.core.app.stats.command.StatsService/GetStats',
        $argument,
        ['\Bluehead\V2ray\Core\App\Stats\Command\GetStatsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Bluehead\V2ray\Core\App\Stats\Command\QueryStatsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function QueryStats(\Bluehead\V2ray\Core\App\Stats\Command\QueryStatsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/v2ray.core.app.stats.command.StatsService/QueryStats',
        $argument,
        ['\Bluehead\V2ray\Core\App\Stats\Command\QueryStatsResponse', 'decode'],
        $metadata, $options);
    }

}
