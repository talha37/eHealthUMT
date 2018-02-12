<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
   /* public function MakeAppointment(Request $request){
       $appointment = new Appointment;
        $appointment->name = $request->input('name');
        $appointment->phoneNumber = $request->input('phoneNumber');
        $appointment->setTime = $request->input('setTime');
        $appointment->symptoms = $request->input('symptoms');
       // $appointment->when = $request->input('when');
        $appointment->save();
    } */
    public function cancelAppointment($user_id)
    {
        Appointment::find($user_id)->delete();
        return redirect();
    }
    public function approveAppointment(Request $request, $appointment_id)
    {
        DB::table('appointments')
        ->where($appointment_id)
        ->update(['status' => 'Approved']);

    }
    public function makeProfile()
    {
     $doctor = new Doctor();       

         $doc_id = $request['doc_id'];
        $doc_name = $request['doc_name'];
        $spec = $request['spec'];
        $timings = $request['timings'];
        $email = $request['email'];
        $phone = $request['phone'];
        $department = $request['department'];
        $doc_type = $request['doc_type'];
        
//save to db
         $doctor->doc_id=$doc_id;
        $doctor->doc_name=$doc_name;
        $doctor->spec=$spec;
        $doctor->timings=$timings;
        $doctor->email=$email;
        $doctor->phone=$phone;
        $doctor->department=$department;
        $doctor->doctor_type=$doc_type;
        $doctor->save();      
    }
}
//$data = $request->all();
//$user = new User($data);
//$user->save();