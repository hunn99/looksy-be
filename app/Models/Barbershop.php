<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barbershop extends Model
{
    protected $fillable = [
        'name',
        'address',
        'status',
    ];
}
