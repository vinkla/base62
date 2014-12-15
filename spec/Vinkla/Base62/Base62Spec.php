<?php namespace spec\Vinkla\Base62;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Base62Spec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Vinkla\Base62\Base62');
    }

    function it_decodes_a_string_into_an_integer()
    {
        $this->decode('5fRVGK')->shouldReturn(4815162342);
    }

    function it_encodes_an_integer_into_an_string()
    {
        $this->encode(4815162342)->shouldReturn('5fRVGK');
    }

}
