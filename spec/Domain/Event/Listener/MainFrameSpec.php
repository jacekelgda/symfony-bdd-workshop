<?php

namespace spec\Domain\Event\Listener;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Domain\UseCase\CheckElevatorLocation;
use Domain\UseCase\OpenElevator;

class MainFrameSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\Event\Listener\MainFrame');
    }

    function it_should_prepare_elevator_for_entrance(
        CheckElevatorLocation $checkElevatorLocation,
        OpenElevator $openElevator
    ) {
        $checkElevatorLocation->execute()->shouldBeCalled();
        $openElevator->execute()->shouldBeCalled();
        $this->onElevatorWasOrdered();
    }
}
