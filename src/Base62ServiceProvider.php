<?php

namespace Vinkla\Base62;

use Illuminate\Support\ServiceProvider;

class Base62ServiceProvider extends ServiceProvider
{
	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->setupConfig();
	}

	/**
	 * Setup the config.
	 *
	 * @return void
	 */
	protected function setupConfig()
	{
		$source = realpath(__DIR__.'/../config/base62.php');
		$this->publishes([$source => config_path('base62.php')]);
		$this->mergeConfigFrom($source, 'base62');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('base62', function($app)
		{
			return new Base62($app['config']['base62.key']);
		});

		$this->app->alias('base62', 'Vinkla\Base62\Base62');
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['base62'];
	}
}
