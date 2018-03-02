<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['doc_name', 'spec', 
                             'timings', 'email', 'phone', 
                             'department', 'doc_type'];

    public function User(){
        return $this->belongsTo('App\Doctor', 'user_id');
    }
}

