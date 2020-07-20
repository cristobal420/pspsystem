<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('rut',191)->unique()->nullable();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->date('fnac')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('NEE')->nullable();
            $table->unsignedBigInteger('profesores_id')->nullable();
            $table->foreign('profesores_id')->references('id')->on('profesores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
