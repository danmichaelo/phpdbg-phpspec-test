<?php

namespace spec\Test\Test;

use PhpSpec\ObjectBehavior;
use Test\Test\Hello;

class HelloSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Hello::class);
    }
}
