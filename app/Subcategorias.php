<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategorias extends Model
{
    
    protected $table='Subcategorias';

    protected  $fillable = [
        'nombre', 'categorias_id'
    ];


}
