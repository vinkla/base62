<?php namespace Vinkla\Base62\Contracts;

interface Base62 {

	/**
	 * Decode a string to a integer.
	 *
	 * @param string $value
	 * @param int $b
	 * @return int
	 */
	public function decode($value, $b = 62);

	/**
	 * Encode an integer to a string.
	 *
	 * @param int $value
	 * @param int $b
	 * @return string
	 */
	public function encode($value, $b = 62);

}
