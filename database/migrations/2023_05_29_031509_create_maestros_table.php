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
        Schema::create('maestros', function (Blueprint $table) {
            $table->id('id_maestro');
            $table->string('nombre_maestro',120);
            $table->string('apellido',120);
            $table->string('edad_maestro',120);

            $table->unsignedBigInteger('id_ciudad');

            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudades');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maestros');
    }
};
