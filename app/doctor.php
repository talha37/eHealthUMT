<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['doc_id', 'doc_name', 'spec', 
                             'timings', 'email', 'phone', 
                             'department', 'doc_type'];
}
