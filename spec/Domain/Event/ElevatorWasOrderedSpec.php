<?php

namespace spec\Domain\Event;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ElevatorWasOrderedSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\Event\ElevatorWasOrdered');
    }

    function it_should_be_an_domain_event()
    {
        $this->shouldHaveType('Domain\Definition\Event');
    }
}
