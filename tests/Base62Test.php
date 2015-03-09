<?php namespace Vinkla\Tests\Base62;

use Mockery;
use PHPUnit_Framework_TestCase;
use Vinkla\Base62\Base62;

class Base62Test extends PHPUnit_Framework_TestCase
{
    public function testEncode()
    {
        $base62 = $this->getBase62Instance();

        $this->assertEquals('5fRVGK', $base62->encode(4815162342));
    }

    public function testDecode()
    {
        $base62 = $this->getBase62Instance();

        $this->assertEquals(4815162342, $base62->decode('5fRVGK'));
    }

    public function getBase62Instance()
    {
        return new Base62('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }
}
