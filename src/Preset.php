<?php

namespace CharlieInCharge\TakingCharge;


use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;


class Preset extends LaravelPreset
{
	public static function install() 
	{
		static::updateEnv();
		static::createProcfile();
	}

	public static function updateEnv()
	{
		copy(__DIR__."/stubs/.env", base_path('.env'));
	}

	public static function createProcfile()
	{
		copy(__DIR__."/stubs/Procfile", base_path('Procfile'));
	}
}