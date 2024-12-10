<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hair_styles', function (Blueprint $table) {
            $table->id();
            $table->string('hairstyle');
            $table->string('face_shape');
            $table->string('photo');
            $table->text('characteristics');
            $table->text('faceSuitability');
            $table->text('maintenance');
            $table->text('impression');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hairstyle');
    }
};
