<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profesores extends Authenticatable
{
	use SoftDeletes;
    protected $table='profesores';
	protected  $guarded = [];

    public function alumnos ()
	{
		return $this->hasMany('App\Alumnos');
	}

}
