<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'order_date',
        'order_time',
        'total_price',
        'status',
        'barbershop_id',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function barbershop()
    {
        return $this->belongsTo(Barbershop::class);
    }

    public function services()
    {
        return $this->hasManyThrough(
            Service::class,
            OrderDetail::class,
            'order_id', // Foreign key di tabel order_details
            'id',        // Foreign key di tabel services
            'id',        // Local key di tabel orders
            'service_id' // Local key di tabel order_details
        );
    }
}
