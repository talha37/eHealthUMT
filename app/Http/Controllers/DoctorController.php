<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function MakeAppointment(Request $request){
       $appointment = new Appointment;
        $appointment->name = $request->input('name');
        $appointment->phoneNumber = $request->input('phoneNumber');
        $appointment->setTime = $request->input('setTime');
        $appointment->symptoms = $request->input('symptoms');
       // $appointment->when = $request->input('when');
        $appointment->save();
    }
    public function CancelAppointment(){
        Appointment::find($id)->delete();
        return redirect()->route('');
    }
}
