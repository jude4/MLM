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

    public function cancel($id)
    {
        $elimPointApplication = ElimPointApplication::findOrFail($id);
        if ($elimPointApplication->status == 'pending') {
            $elimPointApplication->status = 1;
            $elimPointApplication->save();
            return back()->with('toast_success', 'successfully cancelled emim point application!');
        } else {
            return back()->with('toast_error', 'Cannot cancel application!');
        }
                
    }
}