<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveles extends Model
{
    //
    protected $table='niveles';
	protected  $guarded = [];
	public function actividades ()
	{
		return $this->hasMany('App\Actividades');
	}
}
