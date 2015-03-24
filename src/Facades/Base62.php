<?php

/*
 * This file is part of Base62.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Base62\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * This is the Base62 facade class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Base62 extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'base62';
    }
}
