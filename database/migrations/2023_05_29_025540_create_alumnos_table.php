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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id('id_alumno');
            $table->string('nombre_alumno',120);
            $table->string('apellido_paterno',120);
            $table->string('apellido_materno',120);
            $table->string('edad',120);
            $table->unsignedBigInteger('id_cursos');
            $table->timestamps();
            $table->foreign('id_cursos')->references('id_curso')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
