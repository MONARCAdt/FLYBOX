<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
public function up()
{
    Schema::create('packages', function (Blueprint $table) {
        $table->id(); // ID_PAQUETE
        $table->string('product');
        $table->double('weight');
        $table->char('dimension');
        $table->char('destination');
        $table->date('departure_date');
        $table->time('departure_time');
        $table->date('arrival_date');
        $table->time('arrival_time');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_logs');
    }
};
