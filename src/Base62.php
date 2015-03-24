<?php

/*
 * This file is part of Base62.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vinkla\Base62;

/**
 * This is the Base62 class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class Base62
{
    /**
     * The base string.
     *
     * @var string
     */
    protected $base;

    /**
     * @param $base
     */
    public function __construct($base)
    {
        $this->base = $base;
    }

    /**
     * Decode a string to a integer.
     *
     * @param string $value
     * @param int $b
     *
     * @return int
     */
    public function decode($value, $b = 62)
    {
        $limit = strlen($value);
        $result = strpos($this->base, $value[0]);

        for ($i = 1; $i < $limit; $i++) {
            $result = $b * $result + strpos($this->base, $value[$i]);
        }

        return $result;
    }

    /**
     * Encode an integer to a string.
     *
     * @param int $value
     * @param int $b
     *
     * @return string
     */
    public function encode($value, $b = 62)
    {
        $r = (int) $value % $b;
        $result = $this->base[$r];
        $q = floor((int) $value / $b);

        while ($q) {
            $r = $q % $b;
            $q = floor($q / $b);
            $result = $this->base[$r].$result;
        }

        return $result;
    }
}
