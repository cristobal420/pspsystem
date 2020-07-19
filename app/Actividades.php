<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    //
    protected $table='actividades';
	protected  $guarded = [];

	public function subcategorias ()
	{
		return $this->belongsTo('App\Subcategorias');
	}
	public function niveles ()
	{
		return $this->belongsTo('App\Niveles');
	}
	public function preguntas ()
	{
		return $this->hasMany('App\Preguntas');
	}
}
