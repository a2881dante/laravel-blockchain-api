<?php

namespace A2881dante\BlockchainApi;

use Illuminate\Support\ServiceProvider;
use App;

class BlockchainApiServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/' => config_path() . '/']);
    }

    public function register()
    {

        App::singleton('blockchain-api', function(){
            return new \A2881dante\BlockchainApi\BlockchainApi();
        });

    }

}