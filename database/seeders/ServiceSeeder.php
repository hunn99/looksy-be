<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            ['name' => 'Hair cut', 'price' => 1000, 'barbershop_id' => 1],
            ['name' => 'Nail Trim', 'price' => 500, 'barbershop_id' => 1],
            ['name' => 'Shave', 'price' => 700, 'barbershop_id' => 1],
            ['name' => 'Facial', 'price' => 1500, 'barbershop_id' => 1],
            ['name' => 'Massage', 'price' => 2000, 'barbershop_id' => 1],
            ['name' => 'Pedicure', 'price' => 1200, 'barbershop_id' => 1],
            ['name' => 'Hair Coloring', 'price' => 2500, 'barbershop_id' => 1],
            ['name' => 'Hair Treatment', 'price' => 1800, 'barbershop_id' => 1],
            ['name' => 'Blow Dry', 'price' => 800, 'barbershop_id' => 1],
            ['name' => 'Waxing', 'price' => 500, 'barbershop_id' => 1],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
