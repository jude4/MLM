<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PvTransmissionApplication;
use Illuminate\Http\Request;

class PvTransmissionApplicationController extends Controller
{
    public function approve($id)
    {
        $data = PvTransmissionApplication::findOrFail($id);
        $data->status = 2;
        $data->save();

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