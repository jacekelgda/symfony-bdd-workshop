<?php

namespace spec\Source\Collection;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

use Source\Definition\Storage;
use Source\Model\User;

class UsersSpec extends ObjectBehavior
{
    function let(Storage $storage)
    {
        $this->beConstructedWith($storage);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Source\Collection\Users');
    }

    function it_should_find_user_by_username(Storage $storage)
    {
        $storage->findBy(['username' => 'john'])->willReturn(new User('john'));
        $this->find('john')->shouldHaveType('Source\Model\User');
    }
}
