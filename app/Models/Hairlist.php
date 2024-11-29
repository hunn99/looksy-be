<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairlist extends Model
{
    protected $fillable = [
        'hairstyle',
        'face_shape',
        'photo',
        'characteristics',
        'faceSuitability',
        'maintenance',
        'impression',
        'user_id',
    ];
}
