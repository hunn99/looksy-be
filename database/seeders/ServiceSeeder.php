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
            ['name' => 'Reguler Haircut', 'price' => 20000, 'barbershop_id' => 1],
            ['name' => 'Premium Haircut', 'price' => 40000, 'barbershop_id' => 1],
            ['name' => 'Beard Trim', 'price' => 15000, 'barbershop_id' => 1],
            ['name' => 'Pomping', 'price' => 20000, 'barbershop_id' => 1],
            ['name' => 'Hair Colour', 'price' => 135000, 'barbershop_id' => 1],
            ['name' => 'Fashion Colour', 'price' => 300000, 'barbershop_id' => 1],
            ['name' => 'Bleach', 'price' => 50000, 'barbershop_id' => 1],
            ['name' => 'Dread Lock', 'price' => 700000, 'barbershop_id' => 1],
            ['name' => 'Hair Perm', 'price' => 300000, 'barbershop_id' => 1],
            ['name' => 'Cornrow', 'price' => 500000, 'barbershop_id' => 1],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
