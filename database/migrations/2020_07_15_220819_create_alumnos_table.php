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
            $table->string('rut')->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fnac');
            $table->integer('telefono');
            $table->string('email');
            $table->string('password');
            $table->string('NEE');
            $table->unsignedBigInteger('profesores_id');
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
