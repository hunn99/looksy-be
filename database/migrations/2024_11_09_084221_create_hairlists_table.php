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
        Schema::create('hairlists', function (Blueprint $table) {
            $table->id();
            $table->string('hairstyle');
            $table->string('face_shape');
            $table->text('photo');
            $table->text('characteristics');
            $table->string('faceSuitability');
            $table->string('maintenance');            
            $table->string('impression');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hairlists');
    }
};
