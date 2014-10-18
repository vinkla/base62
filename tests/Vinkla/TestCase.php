<?php namespace Vinkla\Base62;

class TestCase extends \PHPUnit_Framework_TestCase{

    protected $base = null;

    public function setUp() {
        $string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $this->base = new Base62($string);
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
