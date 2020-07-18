<?php

use Illuminate\Database\Seeder;

class NivelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('niveles')->insert([
            'COD' => 'BAJ',
            'nivel' => 'Bajo'
        ]);
        DB::table('niveles')->insert([
            'COD' => 'MED',
            'nivel' => 'Medio'
        ]);
        DB::table('niveles')->insert([
            'COD' => 'ALT',
            'nivel' => 'Alto'
        ]);
    }
}
