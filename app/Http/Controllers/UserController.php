<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;
use Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    public function viewprofile(){
        return view('layouts.view-profile');
    }
    public function index(){
        return view('layouts.edit-profile');
    }
    public function register_api(Request $request){
        $user = User::create([
            'email' => $request['email'],
            'password' => bcrypt($request->get('password'))
        ]);
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['invalid_email_or_password'], 422);
            }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
        //TODO add email functionality for account verification when internet is working again
    }
     public function login_api(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['invalid_email_or_password'], 422);
            }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }
    public function update($user_id)
    {
         $user_id = $user->id;

        $name = $request['name'];
        $email = $request['email'];
        $phone = $request['phone'];
        $gender = $request['gender'];
        $department = $request['department'];
    
      if($name != null){
            User::where('id', $user_id)->update(['name'=>$name]);
            return redirect('/view-profile')->with('status', 'Profile updated!');

        }
        if($email != null){
            User::where('id', $user_id)->update(['email'=>$email]);
             return redirect('/view-profile')->with('status', 'Profile updated!');

        }
          if($phone != null){
            User::where('id', $user_id)->update(['phone'=>$phone]);
           return redirect('/view-profile')->with('status', 'Profile updated!');

        }
        if($gender != null){
            User::where('id', $user_id)->update(['gender'=>$gender]);
           return redirect('/view-profile')->with('status', 'Profile updated!');

        }
          if($department != null){
            User::where('id', $user_id)->update(['department'=>$department]);
             return redirect('/view-profile')->with('status', 'Profile updated!');

        }

        
    }
    public function contactDonor()
    {
       $donor = $request->all();
       $donor = new Donor($donor);
       $donor->save();
    }
    public function bmiCalculator(Request $request)
    {
        $result = $weight/($h*$h); 
        return view('layouts.view-bmi')->with(compact('users'));
   }
   public function review(Request $request, $doc_id)
   {
       $doctors = DB::table('doctors')
       ->where('doc_id')
       ->update(['rating' => $request['stars']]);
       return view('layouts.view-review')->with('doctor', $doctor);
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
    public function activeDonor(){
        return view('layouts.donors-list');
  }
    public function inactiveDonor(Request $request){
        $donors = DB::table('donors')
        ->where('donor_id')
        ->update(['inactive' => 0]);
         return view('layouts.donors-list');
}
}