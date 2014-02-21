<?php namespace Vinkla\Base62;

class TestCase extends \PHPUnit_Framework_TestCase {

    protected $base62 = null;

    public function setUp() {
        $this->base62 = new Base62();
    }

    public function testEncode() {
        $converted = $this->base62->encode(36);
        $this->assertEquals('A', $converted);
    }

    public function testDecode() {
        $reversed = $this->base62->decode('A');
        $this->assertEquals(36, $reversed);
    }
}
