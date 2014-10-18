<?php

use Vinkla\Base62\Base62;

class TestCase extends PHPUnit_Framework_TestCase {

    protected $base = null;

    protected $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    public function testThatProfilerCanBeCreated()
    {
        new Base62($this->string);
    }

    public function setUp() {
        $this->base = new Base62($this->string);
    }

    public function testEncode() {
        $converted = $this->base->encode(36);
        $this->assertEquals('A', $converted);
    }

    public function testDecode() {
        $reversed = $this->base->decode('A');
        $this->assertEquals(36, $reversed);
    }
}
