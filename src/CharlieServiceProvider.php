<?php

namespace CharlieInCharge\TakingCharge;

use CharlieInCharge\Preset;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Console\PresetCommand;

class CharlieServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        PresetCommand::macro('CharlieInCharge', function($command){
            Preset::install();
        });
    }
}
