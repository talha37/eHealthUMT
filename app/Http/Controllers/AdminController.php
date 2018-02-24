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
    
    public function viewUserReview()
    {
        
    }
}
