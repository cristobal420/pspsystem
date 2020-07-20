<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model
{
	protected $table='preguntas';
	protected  $guarded = [];
	public function actividades ()
	{
		return $this->belongsTo('App\Actividades');
	}
	public function respuestas ()
	{
		return $this->HasMany('App\Respuestas');
	}
}
