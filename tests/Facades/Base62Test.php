<?php

namespace Vinkla\Tests\Base62\Facades;

use GrahamCampbell\TestBench\Traits\FacadeTestCaseTrait;
use Vinkla\Tests\Base62\AbstractTestCase;

class Base62Test extends AbstractTestCase
{
	use FacadeTestCaseTrait;

	/**
	 * Get the facade accessor.
	 *
	 * @return string
	 */
	protected function getFacadeAccessor()
	{
		return 'base62';
	}

	/**
	 * Get the facade class.
	 *
	 * @return string
	 */
	protected function getFacadeClass()
	{
		return 'Vinkla\Base62\Facades\Base62';
	}

	/**
	 * Get the facade route.
	 *
	 * @return string
	 */
	protected function getFacadeRoot()
	{
		return 'Vinkla\Base62\Base62';
	}
}
