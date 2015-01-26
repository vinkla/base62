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
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$source = sprintf('%s/../../config/config.php', __DIR__);
		$destination = config_path('base62.php');

		$this->publishes([$source => $destination]);

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
