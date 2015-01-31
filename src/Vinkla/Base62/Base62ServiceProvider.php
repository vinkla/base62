<?php namespace Vinkla\Base62;

use Illuminate\Support\ServiceProvider;

class Base62ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Boot the service provider.
	 *
	 * @return void
	 */
	public function boot()
	{
		$source = sprintf('%s/../../config/base62.php', __DIR__);

		$this->publishes([$source => config_path('base62.php')]);

		$this->mergeConfigFrom($source, 'base62.php');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->singleton('Vinkla\Base62\Contracts\Base62', function()
		{
			return new Base62(config('base62.base'));
		});
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['Vinkla\Base62\Contracts\Base62'];
	}

}
