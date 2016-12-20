<?php

namespace Source\Model;

class User
{
    protected $username;

    public function __construct(string $username)
    {
        $this->username = $username;
    }

    public static function create(string $username)
    {
        return new self($username);
    }
}
