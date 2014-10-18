<?php

use Vinkla\Base62\Base62;

class TestCase extends PHPUnit_Framework_TestCase {

    protected $base = null;

    public function setUp() {
        $this->base = new Base62('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }

    public function testEncode() {
        $this->assertEquals('5fRVGK', $this->base->encode(4815162342));
    }

    public function testDecode() {
        $this->assertEquals(4815162342, $this->base->decode('5fRVGK'));
    }
}
