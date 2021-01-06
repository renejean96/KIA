<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pupil extends Model
{
    protected $fillable = [
        'firstName', 'lastName', 'nationality', 'dob', 'sex', 'lunch', 'breakfast', 'transport'
    ];
}
