<?php

namespace A2881dante\BlockchainApi;

class BlockchainApi{

    public static function getRecivingAdress($callback){
        return ReceivePaymentsApiV2::getRecivingAdress(
            config('blockchain-api')['xpub']
            , config('blockchain-api')['api-key']
            , $callback);
    }

}