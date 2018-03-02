<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    protected $primarykey = ['id'];
    protected $fillable = ['donor_name', 'age',
                            'gender', 'prev_history', 'recent_donation', 'smoker'];
}
