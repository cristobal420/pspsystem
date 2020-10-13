<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActividadesAsignadas extends Model
{
	protected $table = "actividades_asignadas";
	protected $guarded = [];
	
	public function actividades()
	{
		return $this->belongsTo('App\Actividades');
	}
	public function profesores()
	{
		return $this->belongsTo('App\Profesores');
	}
}
