<?php

namespace Source\Collection;

use Source\Definition\Storage;

class Users
{
    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    public function find(string $username)
    {
        return $this->storage->findBy(['username' => $username]);
    }
}
