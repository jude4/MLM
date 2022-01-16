<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;

class FakeUser
{
    public $id;

    public function __construct()
    {
        $this->id = Auth::user()->id?? null;
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

    public function parent()
    {
        return new self;
    }

    public function nthParent(int $n)
    {
        if($n <= 1){
            return $this->parent();
        }

        return $this->parent()->nthParent($n - 1);
    }

    public function rewardPv()
    {
        return true;
    }

    public function rewardParents()
    {

    }
}