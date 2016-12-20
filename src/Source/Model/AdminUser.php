<?php

namespace Source\Model;

class AdminUser extends User
{
    protected $isAdmin = true;

    public static function create(string $username)
    {
        return new self($username);
    }
}
