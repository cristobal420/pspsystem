<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividades extends Model
{
	use SoftDeletes;
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
