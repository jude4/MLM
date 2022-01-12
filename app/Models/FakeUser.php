<?php

namespace App\Models;

class FakeUser
{
    public function firstChildExists()
    {
        return false;
    }

    public function lastChildExists()
    {
        return false;
    }

    public function firstChild()
    {
        return new self;
    }

    public function lastChild()
    {
        return new self;
    }
}