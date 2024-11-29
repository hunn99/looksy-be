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
            'hairstyle' => 'Pompadour',
            'face_shape' => 'Oval',
            'photo' => 'pompadour.jpg',
            'characteristics' => 'Volume tinggi di bagian atas.',
            'faceSuitability' => 'Cocok untuk wajah oval atau persegi.',
            'maintenance' => 'Rendah hingga sedang.',
            'impression' => 'Elegan dan modern.',
            'user_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
            // Tambahkan data lainnya jika perlu
        ]);
    }
}
