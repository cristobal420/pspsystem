<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActividadesAsignadasTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('actividades_asignadas', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('profesores_id')->nullable();
			$table->unsignedBigInteger('alumnos_id')->nullable();
			$table->date('fecha_inicio')->nullable();
			$table->date('fecha_termino')->nullable();
			$table->time('tiempo')->nullable();
			$table->string('estado')->nullable();
			$table->softDeletes();
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
		Schema::dropIfExists('actividades_asignadas');
	}
}
