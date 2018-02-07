<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function contactDonor()
    {
$donor = $request->all();
$donor = new Donor($donor);
$donor->save();
    }
    public function bmiCalculator(Request $request)
    {
        $result = $weight/($h*$h); 
        return view('pages.view-bmi.php')->with(compact('users'));
   }
   public function review()
   {
       
   }
     public function makeAppointment(Request $request){
       $appointment = new Appointment;
        $appointment->name = $request->input('name');
        $appointment->phoneNumber = $request->input('phoneNumber');
        $appointment->setTime = $request->input('setTime');
        $appointment->symptoms = $request->input('symptoms');
       // $appointment->when = $request->input('when');
        $appointment->save();
}
