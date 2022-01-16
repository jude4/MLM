<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\ElimPointApplication;
use Illuminate\Http\Request;

class ElimPointDepositInformationController extends Controller
{
    public function show($id)
    {
        $elimPointApplication = ElimPointApplication::findOrFail($id);
        
        return view('user.elim_point_deposit_information', compact('elimPointApplication'));
    }
}