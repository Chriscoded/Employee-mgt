<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    public function users()
    {
        return $this->belongsTo('App\Models\User', 'employee_id');
    }

    public function scopeAdvance($query)
    {
        return $query->where('salary_amount',true);
    }
}
