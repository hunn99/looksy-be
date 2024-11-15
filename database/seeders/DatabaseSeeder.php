<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'username' => 'Satria',
            'email' => 'satria@gmail.com',
            'password' => bcrypt('123456'),
            'photo' => null,
        ]);

        $this->call(BarbershopSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(ServiceSeeder::class);
        $this->call(HairTipsSeeder::class);
        $this->call(OrderSeeder::class);

    }
}
