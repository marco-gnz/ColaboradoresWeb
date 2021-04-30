<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EstadoUsuarioSeeder extends Seeder
{
    public function run()
    {
        DB::table('estado_usuarios')->insert([
            ['descripcion' =>'HABILITADO'],
            ['descripcion' =>'DESHABILITADO']
        ]);
    }
}
