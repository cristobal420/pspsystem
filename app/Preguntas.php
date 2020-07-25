<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Preguntas extends Model
{
	use SoftDeletes;
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
