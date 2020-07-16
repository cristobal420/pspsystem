<?php

use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profesores')->insert([
            'rut' => '1.111.111-1',
            'nombres' => 'Nombre Nombre',
            'apellidos' => 'Apellido Apellido',
            'fnac' => '2020-01-01',
            'telefono' => '123123123',
            'email' => 'prueba@prueba.com',
            'password' => bcrypt('123123')
        ]);
    }
}
