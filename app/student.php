<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['stu_id', 'stu_name', 'stu_dept',
                           'stu_gender', 'stu_mail', 'stu_phone'];
}
