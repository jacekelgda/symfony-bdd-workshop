<?php

namespace spec\Source\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class AdminUserSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith('john');
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Source\Model\AdminUser');
    }

    function it_should_create_itself()
    {
        $this->create('john')->shouldHaveType('Source\Model\AdminUser');
    }
}
