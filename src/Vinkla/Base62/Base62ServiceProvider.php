<?php namespace Vinkla\Base62;

use Illuminate\Foundation\AliasLoader;
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
		// Register 'base62' instance container to our Base62 object.
		$this->app->bindShared('Vinkla\Base62\Contracts\Base62', function($app)
		{
			return new Base62($app['config']['base62::base']);
		});
	}

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('vinkla/base62');
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
