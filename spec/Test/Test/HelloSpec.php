<?php

namespace spec\Test\Test;

use Test\Test\Hello;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class HelloSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Hello::class);
    }
}
