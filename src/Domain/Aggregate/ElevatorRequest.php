<?php

namespace Domain\Aggregate;

use Domain\Definition\Aggregate;
use Domain\Definition\Event;

class ElevatorRequest implements Aggregate
{
    public function recordThat(Event $event)
    {
        // todo
    }

    public static function create()
    {
        return new self();
    }
}
