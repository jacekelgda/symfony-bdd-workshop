<?php

namespace Domain\UseCase;

use Domain\Aggregate\ElevatorRequest;

class OrderElevator
{
    public function execute(OrderElevator\Command $command, OrderElevator\Responder $responder)
    {
        $elevatorRequest = ElevatorRequest::create();
        // dispatch events to get event listeners working
        $responder->elevatorOrdered($elevatorRequest);
    }
}
