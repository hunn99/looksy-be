<?php

namespace Database\Seeders;

use App\Models\Hairlist;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HairlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hairlist::create([
            'hairstyle_id' => 1,
            'user_id' => 1,
        ]);
    }
}
