<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EstadoTrabajadorSeeder extends Seeder
{
    public function run()
    {
        DB::table('estado_trabajadors')->insert([
            ['descripcion' =>'EN VACACIONES'],
            ['descripcion' =>'CON LICENCIA'],
            ['descripcion' =>'EN FUNCIONES'],
            ['descripcion' =>'DESHABILITADO'],
        ]);
    }
}
