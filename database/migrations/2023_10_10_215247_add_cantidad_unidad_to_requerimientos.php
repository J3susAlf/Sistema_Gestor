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
        Schema::table('requerimientos', function (Blueprint $table) {
            $table->string('Cantidad',255); // Agrega la columna 'Cantidad' como número entero
            $table->string('Unidad', 255);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('requerimientos', function (Blueprint $table) {
            //
        });
    }
};
