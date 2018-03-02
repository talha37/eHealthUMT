<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class appointment extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['name', 'setTime', 'symptoms', 'status'];
    
    public function Doctor(){
    return $this->belongsTo('App\Doctor', 'doc_id');
}
}