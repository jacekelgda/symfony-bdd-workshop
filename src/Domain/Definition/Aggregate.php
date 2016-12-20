<?php

namespace Domain\Definition;

interface Aggregate {

    public function recordThat(Event $event);
}
