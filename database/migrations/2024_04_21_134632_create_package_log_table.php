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
        Schema::create('package_log', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_destinatario');
            $table->string('direccion_destino');
            $table->string('ciudad_destino');
            $table->string('codigo_postal');
            $table->string('contenido_paquete');
            $table->string('peso');
            $table->timestamps('fecha_envio');
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
