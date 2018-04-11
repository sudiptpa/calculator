<?php

namespace Lalustine7\Calculator;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;

class CalculatorServiceProvider extends ServiceProvider
{

	public function boot()
	{
		Schema::defaultStringLength(191);
		$this->loadRoutesFrom(__DIR__.'/routes/web.php');
		$this->loadViewsFrom(__DIR__.'/./../resources/views','calculator');
	}

	public function register()
	{
		$this->registerPublishables();

	}

	private function registerPublishables()
	{
		$basePath = dirname(__DIR__);

		$arrPublishable = [
			'migrations' => [
				"$basePath/publishable/database/migrations" => database_path('migrations'),
			],
			'config' => [
				"$basePath/publishable/config/calculator.php" => config_path('calculator.php'),
			]
		];

		
		foreach($arrPublishable as $group => $paths) {
			$this->publishes($paths,$group);
		}

		$this->publishes([
      "$basePath/publishable/assets/js" => base_path('public/js'),
				"$basePath/publishable/assets/css" => base_path('public/css'),
    ], 'public');

	}
}