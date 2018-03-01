<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BloodgroupController;
use App\User;

class BloodgroupController extends Controller
{
    public function searchBG(Request $request){
     $bloodgroup = $request['bloodgroup'];
     $results = 'result';
     return view('layouts.search-BG')->with('bloodgroup', $bloodgroup);
     
    }
    public function donorsList(){
        $donors = Donors::all();
        return view('layouts.donors-list')->with('donors', $donors);
    }
    
    public function selectGender(Request $request){
       if ($gender == 'male')
       echo $male;
       else 
       echo $female;
       return view('layouts.select-gender')->compact('bloodgroups');
    }
}
