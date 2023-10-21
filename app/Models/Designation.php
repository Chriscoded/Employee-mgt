<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Designation extends Model
{
    public function userss()
    {
        return $this->belongsTo('App\Models\User', 'employee_id');
    }
}
