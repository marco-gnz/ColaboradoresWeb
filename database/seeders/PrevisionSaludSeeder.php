<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PrevisionSaludSeeder extends Seeder
{
    public function run()
    {
        DB::table('prevision_saluds')->insert([
            ['descripcion' =>'HABILITADO'],
            ['descripcion' =>'DESHABILITADO']
        ]);
    }

}
