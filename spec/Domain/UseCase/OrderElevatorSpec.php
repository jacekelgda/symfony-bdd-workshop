<?php

namespace spec\Domain\UseCase;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Domain\UseCase\OrderElevator;

class OrderElevatorSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Domain\UseCase\OrderElevator');
    }

    function it_should_order_elevator(OrderElevator\Responder $responder)
    {
        $responder->elevatorOrdered(Argument::type('Domain\Definition\Aggregate'))->shouldBeCalled();
        $command = new OrderElevator\Command();
        $command->floorNumber = 0;
        $this->execute($command, $responder);
    }
}
