<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HairTips extends Model
{
    protected $fillable = [
        'hair_type',
        'characteristic',
        'description',
        'photo',
    ];
}
