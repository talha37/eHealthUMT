<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class bloodgroup extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['A+', 'A-', 'AB+', 'AB-',
                             'B+', 'B-', 'O+', 'O-'];


public function User(){
    return $this->belongsTo('App\user', 'user_id');
}
}