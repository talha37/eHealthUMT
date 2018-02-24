<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BloodgroupController extends Controller
{
    public function searchBG(Request $request){
     $blood_group = $request['bloodgroup'];
     $results = 'result';
     return view('pages.search-BG')->with('bloodgroup', $bloodgroup);
     
    }
    public function displayBG(){
//all blood groups and its recipient and donors functions will be added in it
        $donors = Donors::all();
        return view('pages.donors-list')->with('donors', $donors);
    }
    
    public function selectGender(Request $request){
       if ($gender == 'male')
       echo $male;
       else 
       echo $female;
       return view('pages.select-gender')->compact('bloodgroups');
    }
}
