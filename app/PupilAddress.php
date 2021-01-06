<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PupilAddress extends Model
{
    protected $fillable = [
        'pupilId', 'country', 'province', 'district', 'sector', 'cell', 'village'
    ];
}
