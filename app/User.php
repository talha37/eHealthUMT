<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\BloodGroup;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'phone', 'gender', 'department'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function Doctor(){
        return $this->hasMany('App\User', 'doc_id');
    }
    public function BloodGroup(){
        return $this->belongsTo('App\BloodGroup', 'bloodgroup_id');
    }
}
