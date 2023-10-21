<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Managesalary extends Model
{
    public function usersss()
    {
        return $this->belongsTo('App\Models\User', 'employee_id');
    }

    public function advanceSum()
    {
        return $this->hasMany('App\Models\Advancepayment')
            ->selectRaw('SUM(amount) as total')
            ->groupBy('employee_id');
    }
}
