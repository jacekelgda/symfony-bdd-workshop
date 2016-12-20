<?php

namespace spec\Domain\Aggregate;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ElevatorRequestSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\Aggregate\ElevatorRequest');
    }

    function it_should_be_aggregate()
    {
        $this->shouldHaveType('Domain\Definition\Aggregate');
    }
}
