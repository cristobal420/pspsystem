<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    protected $table='Categorias';
    
    protected  $fillable = [
        'COD', 'nombre'
    ];
}
