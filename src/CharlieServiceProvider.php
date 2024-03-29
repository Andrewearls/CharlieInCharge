<?php

namespace CharlieInCharge\TakingCharge;

use CharlieInCharge\TakingCharge\Preset;
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
        PresetCommand::macro('charlie', function($command){
            Preset::install();

            $command->info('Charlie was successful!');
        });
    }
}
