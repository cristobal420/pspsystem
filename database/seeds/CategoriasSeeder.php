<?php

use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('categorias')->insert([
            'COD' => 'MAT',
            'nombre' => 'Matematicas'
        ]);
        DB::table('categorias')->insert([
            'COD' => 'LEN',
            'nombre' => 'Lenguaje'
        ]);
        DB::table('categorias')->insert([
            'COD' => 'HIS',
            'nombre' => 'Historia'
        ]); 

        DB::table('subcategorias')->insert([
            'nombre' => 'Sumas',
            'categorias_id' => '1'
        ]); 
        DB::table('subcategorias')->insert([
            'nombre' => 'Restas',
            'categorias_id' => '1'
        ]); 
        DB::table('subcategorias')->insert([
            'nombre' => 'Multiplicacion',
            'categorias_id' => '1'
        ]); 
        DB::table('subcategorias')->insert([
            'nombre' => 'Comprension lectora',
            'categorias_id' => '2'
        ]); 
        DB::table('subcategorias')->insert([
            'nombre' => 'Redaccion',
            'categorias_id' => '2'
        ]); 
    }
}
