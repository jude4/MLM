<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class MemberTreeStructureController extends Controller
{
    public function __invoke($id)
    {
        $user = User::findOrFail($id);
        return view('admin.member-tree-structure', compact('user'));
    }
}