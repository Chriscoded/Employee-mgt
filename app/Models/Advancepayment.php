<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Advancepayment extends Model
{
    public function employees()
    {
        return $this->belongsTo('App\Models\User', 'employee_id');
    }
}
