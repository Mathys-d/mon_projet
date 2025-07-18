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
        Schema::create('lunettes', function (Blueprint $table) {
            $table->id(); 
            $table->string('name', 100);
            $table->decimal('prix', 10, 2);
            $table->string('img', 255);
            $table->string('genre', 50)->nullable();
            $table->string('taille', 50)->nullable();
            $table->string('type', 50)->nullable();
            $table->string('forme', 50)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lunettes');
    }
};


