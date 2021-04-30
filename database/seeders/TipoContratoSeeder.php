<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TipoContratoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_contratos')->insert([
            ['descripcion' =>'CONTRATO PLAZO FIJO'],
            ['descripcion' =>'CONTRATO INDEFINIDO'],
            ['descripcion' =>'CONTRATO HONORARIOS'],
            ['descripcion' =>'CONTRATO PART-TIME'],
        ]);
    }
}
