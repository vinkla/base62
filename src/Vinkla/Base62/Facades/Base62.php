<?php namespace Vinkla\Base62\Facades;

use Illuminate\Support\Facades\Facade;

class Base62 extends Facade {

	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor() { return 'base62'; }

}
