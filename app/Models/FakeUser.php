<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;

class FakeUser
{
    private $id;

    public function __construct()
    {
        $this->id = Auth::user()->id;
    }

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