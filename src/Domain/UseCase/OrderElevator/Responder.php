<?php

namespace Domain\UseCase\OrderElevator;

use Domain\Aggregate\ElevatorRequest;

interface Responder {

    public function elevatorOrdered(ElevatorRequest $elevatorRequest);
}
