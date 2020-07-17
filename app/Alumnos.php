<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
     protected $fillable = [
        'rut', 'nombres', 'apellidos','fnac','telefono','email','password','NEE','profesor_id'
    ];
}
