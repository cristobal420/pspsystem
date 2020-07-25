<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumnos extends Model
{
	use SoftDeletes;
    protected $table='alumnos';
	protected  $guarded = [];
	public function profesores()
	{
		return $this->belongsTo('App\Profesores');
	}
}
