<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class persona_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('persona')->insert([

         'id'=>'01',
         'nombre'=>'nombre',
         'apellido'=>'abelardes',
         'direccion'=>'carrera 6',
         'telefono'=>'2222'


        ]);
    }
}
