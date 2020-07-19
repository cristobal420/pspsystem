<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Profesores extends Authenticatable
{
    protected $table='profesores';
	protected  $guarded = [];

    public function alumnos ()
	{
		return $this->hasMany('App\Alumnos');
	}

}
