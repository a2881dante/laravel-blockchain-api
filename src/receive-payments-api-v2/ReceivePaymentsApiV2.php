<?php

namespace A2881dante\BlockchainApi;

class ReceivePaymentsApiV2
{

    public static function getRecivingAdress($xpub, $apiKey, $callback){
        $root_url = 'https://api.blockchain.info/v2/receive';
        $parameters = 'xpub=' .$xpub. '&callback=' .urlencode($callback). '&key=' .$apiKey;
        $ch = curl_init();
        curl_setopt_array($ch, array(
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_URL => $root_url . '?' . $parameters,
                CURLOPT_RETURNTRANSFER => true)
        );
        $data = curl_exec($ch);
        curl_close($ch);
        $object = json_decode($data);
        return $object;
    }

}