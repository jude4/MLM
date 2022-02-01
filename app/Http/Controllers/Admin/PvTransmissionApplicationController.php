<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PvTransmissionApplication;
use App\Models\User;
use Illuminate\Http\Request;

class PvTransmissionApplicationController extends Controller
{
    public function approve($id)
    {
        $data = PvTransmissionApplication::findOrFail($id);
        $data->status = 2;
        $data->save();

        $reciever = User::findOrFail($data->incoming_id);

        $reciever->available_pv = $reciever->available_pv + ($data->amount - $data->fee);

        $reciever->save();
        
        return redirect()->route('admin.pvtransmissionapplicationdetails')->with('toast_success', 'Successfully Approved!');

        return view('admin.pv_transmission_application_details');
    }

    public function decline($id)
    {
        $data = PvTransmissionApplication::findOrFail($id);
        $data->status = 1;
        $data->save();

        return redirect()->route('admin.pvtransmissionapplicationdetails')->with('toast_success', 'Successfully Cancelled!');

        return view('admin.pv_transmission_application_details');
    }
}