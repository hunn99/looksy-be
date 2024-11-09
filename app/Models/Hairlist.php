<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairlist extends Model
{
    protected $fillable = [
        'face_shape',
        'hairstyle',
        'description',
        'photo',
        'user_id',
    ];
}
