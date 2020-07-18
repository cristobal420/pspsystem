<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actividades extends Model
{
    //
    protected $table='actividades';
    
    protected  $fillable = [
        'nombre', 'subcategoria_id','nivel_id'
    ];
}
