<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = [
        'name',
        'price',
        'barbershop_id'
    ];

    protected $hidden = [
        'barbershop_id',
        'created_at',
        'updated_at',
    ];
}
