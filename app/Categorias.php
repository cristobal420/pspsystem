<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
	protected $table='categorias';
	protected  $guarded = [];
	public function subcategorias ()
	{
		return $this->hasMany('App\Subcategorias');
	}
}
