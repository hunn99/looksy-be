<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class HairTips extends Model
{
    protected $fillable = [
        'hair_type',
        'characteristic_hair',
        'description',
        'photo',
    ];

    // public function getPhotoAttribute($value)
    // {
    //     if (filter_var($value, FILTER_VALIDATE_URL)) {
    //         // Jika sudah berupa URL lengkap, kembalikan langsung
    //         return $value;
    //     }

    //     // Jika path relatif, buat URL lengkap dari disk publik
    //     return Storage::disk('public')->exists($value)
    //         ? asset('storage/' . $value)
    //         : null; // Jika file tidak ditemukan, kembalikan null
    // }
}
