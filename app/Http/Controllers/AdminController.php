<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function administratorList()
    {
        return view('admin.administrator_list');
    }

    public function profile()
    {
        return view('admin.profile');
    }

}
