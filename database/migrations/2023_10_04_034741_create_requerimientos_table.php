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
        Schema::create('requerimientos', function (Blueprint $table) {
            $table->id('Id_Requerimiento');
            $table->string('Requesicion_No');
            $table->string('Fecha'); 
            $table->string('Descripcion_General');
            $table->string('Justificacion');
            $table->unsignedBigInteger('Id_Empresa'); // Usar unsignedBigInteger para claves foráneas
            $table->unsignedBigInteger('Id_Solicitante');
            $table->timestamps();
            $table->foreign('Id_Solicitante')->references('Id_Solicitante')->on('solicitantes');
            $table->foreign('Id_Empresa')->references('Id_Empresa')->on('empresas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requerimientos');
    }
};
