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
        Schema::create('package_logs', function (Blueprint $table) {
            $table->id();
            $table->string('numero_paquete');
            $table->string('nombre_destinatario');
            $table->string('direccion_destino');
            $table->string('ciudad_destino');
            $table->string('codigo_postal');
            $table->string('contenido_paquete');
            $table->string('peso');
            $table->string('fecha_envio');
            $table->string('tarifa');
            $table->decimal('precio', 8, 2); // Agregar campo de precio
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_log');
    }
};
