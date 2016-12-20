<?php

namespace Domain\Event;

use Domain\Definition\Event;

class ElevatorWasOrdered implements Event
{
    public function getAggregateId()
    {
        return null;
    }
}
