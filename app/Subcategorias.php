<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
	
	protected $table='subcategorias';
	protected  $guarded = [];

	public function categorias ()
	{
		return $this->belongsTo('App\Categorias');
	}

	public function actividades ()
	{
		return $this->hasMany('App\Actividades');
	}
}
