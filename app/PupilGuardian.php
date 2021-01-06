<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PupilGuardian extends Model
{
    protected $fillable = [
        'pupilId', 'names', 'idn', 'phone', 'email', 'occupation'
    ];
}
