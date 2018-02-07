<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function signUp()
    {

    }
    public function blockUser()
    {
 $user = JWTAuth::parseToken()->authenticate();
        $user_id = $user->id;
        $unblock = new BlockedUser();
        $blocked_by = auth::id();
        $unblock->blocked_by = $user_id;
        $unblock->blocked_user = $id;
        $blocked_user_id = $user;
        $unblock->save();
        return view ('pages.blockuser')->with(compact('User blocked', 200));
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
        }
        if($email != null){
            User::where('id', $user_id)->update(['email'=>$email]);
        }
          if($phone != null){
            User::where('id', $user_id)->update(['phone'=>$phone]);
        }
        if($gender != null){
            User::where('id', $user_id)->update(['gender'=>$gender]);
        }
          if($department != null){
            User::where('id', $user_id)->update(['department'=>$department]);
        }
        return view ('pages.update_profile')->with(compact(' '));
        return redirect('');
        
    }
    public function viewUserReview()
    {
        
    }
}
