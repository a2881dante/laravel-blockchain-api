<?php

namespace A2881dante\BlockchainApi;

class ReceivePaymentsApiV2
{

    public static function getRecivingAdress($xpub, $apiKey, $callback){
        $root_url = 'https://api.blockchain.info/v2/receive';
        $parameters = 'xpub=' .$xpub. '&callback=' .urlencode($callback). '&key=' .$apiKey;
        $response = file_get_contents($root_url . '?' . $parameters);
        $object = json_decode($response);
        return $object;
    }

}