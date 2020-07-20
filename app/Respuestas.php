<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Respuestas extends Model
{
	protected $table = "respuestas";
	protected $guarded = [];
	public function preguntas ()
	{
		$this->belongsTo('App\Preguntas');
	}
}
