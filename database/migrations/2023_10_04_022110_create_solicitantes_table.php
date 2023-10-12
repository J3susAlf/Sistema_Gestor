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
        Schema::create('solicitantes', function (Blueprint $table) {
            $table->id('Id_Solicitante');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Telefono',20);
            $table->string('Correo');
            $table->string('Contrasena');
            $table->unsignedBigInteger('Id_Area'); // Usar unsignedBigInteger para claves foráneas
            $table->unsignedBigInteger('Id_Rol');
        
            $table->foreign('Id_Area')->references('Id_Area')->on('areas');
            $table->foreign('Id_Rol')->references('Id_Rol')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitantes');
    }
};