<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcademicCalendar extends Model
{
    protected $fillable = [
        'period', 'details'
    ];
}
