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
        Schema::create('cartes_bancaires', function (Blueprint $table) {
            $table->id();
            $table->string('numero_carte');
            $table->string('nom_titulaire');
            $table->string('expiration');
            $table->string('code_securite');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cartes_bancaires');
    }
};
