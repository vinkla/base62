<?php namespace Vinkla\Base62;

class Base62 {

	/**
	 * @var mixed
	 */
	private $app;

	/**
	 * @param $app
	 */
	function __construct($app)
	{
		$this->app = $app;
	}

	/**
	 * Decode a string to a integer.
	 *
	 * @param string $value
	 * @param int $b
	 * @return int
	 */
	public function decode($value, $b = 62)
	{
		$base = $this->getBase();
		$limit = strlen($value);
		$result = strpos($this->base, $value[0]);

		for ($i = 1; $i < $limit; $i++)
		{
			$result = $b * $result + strpos($this->base, $value[$i]);
		}

		return $result;
	}

	/**
	 * Encode an integer to a string.
	 *
	 * @param int $value
	 * @param int $b
	 * @return string
	 */
	public function encode($value, $b = 62)
	{
		$base = $this->getBase();
		$r = (int) $value % $b;
		$result = $base[$r];
		$q = floor((int) $value / $b);

		while ($q)
		{
			$r = $q % $b;
			$q = floor($q / $b);
			$result = $base[$r] . $result;
		}

		return $result;
	}

	/**
	 * @return string
	 */
	public function getBase()
	{
		return $this->app['config']['base62.base'];
	}
}
