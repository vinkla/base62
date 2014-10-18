<?php namespace Vinkla\Base62;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;

class Base62ServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// Get the configuration component.
		$config = $this->app->make('config');

		// Register 'base62' instance container to our Base62 object.
		$this->app['base62'] = $this->app->share(function() use ($config)
		{
			return new Base62($config->get('base62.base'));
		});

		// Shortcut so developers don't need to add an alias in config/app.php.
		$this->app->booting(function()
		{
			$loader = AliasLoader::getInstance();
			$loader->alias('Base62', 'Vinkla\Base62\Facades\Base62');
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
