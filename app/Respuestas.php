<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Respuestas extends Model
{
	use SoftDeletes;
	protected $table = "respuestas";
	protected $guarded = [];
	public function preguntas ()
	{
		$this->belongsTo('App\Preguntas');
	}
}
