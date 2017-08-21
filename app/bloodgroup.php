<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bloodgroup extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['A+', 'A-', 'AB+', 'AB-',
                             'B+', 'B-', 'O+', 'O-'];

}
