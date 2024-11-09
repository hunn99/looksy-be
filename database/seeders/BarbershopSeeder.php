<?php

namespace Database\Seeders;

use App\Models\Barbershop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BarbershopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Barbershop::create([
            'name' => 'Berkah Barbershop',
            'address' => 'Jl. Danau Toba No.6, Malang',
            'status' => 'open',
        ]);
    }
}
