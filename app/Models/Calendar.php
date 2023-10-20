<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    protected $table = 'calendars';
    protected $fillable = ['title','color','start_date','end_date'];
}
