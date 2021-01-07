<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PupilMother extends Model
{
    protected $fillable = [
        'pupilId', 'names', 'idn', 'phone', 'email', 'occupation'
    ];
}
