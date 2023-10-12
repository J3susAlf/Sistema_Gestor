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
        Schema::create('detalles', function (Blueprint $table) {
            $table->id('Id_Detalles');
            $table->unsignedBigInteger('Id_Requerimiento');
            $table->unsignedBigInteger('Id_Productos'); // Usar unsignedBigInteger para claves foráneas
            $table->foreign('Id_Requerimiento')->references('Id_Requerimiento')->on('requerimientos');
            $table->foreign('Id_Productos')->references('Id_Productos')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalles');
    }
};
