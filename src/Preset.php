<?php

namespace CharlieInCharge\TakingCharge;


use Illuminate\Foundation\Console\Presets\Preset as LaravelPreset;


class Preset extends LaravelPreset
{
	public static function install() 
	{
		static::updateEnv();
	}

	public static function updateEnv()
	{
		copy(__DIR__."/stubs/.env", base_path('.env'));
	}
}