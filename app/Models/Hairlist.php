<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hairlist extends Model
{
    protected $fillable = [
        'hairstyle_id',
        'user_id',
    ];
}
