<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Alumnos extends Authenticatable
{
	use SoftDeletes;
	protected $table='alumnos';
	protected  $guarded = [];

	public function profesores()
	{
		return $this->belongsTo('App\Profesores');
	}
}
