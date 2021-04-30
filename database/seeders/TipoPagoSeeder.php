<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TipoPagoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_pagos')->insert([
            ['descripcion' =>'EFECTIVO'],
            ['descripcion' =>'TRANSFERENCIA BANCARIA'],
            ['descripcion' =>'CHEQUE'],
        ]);
    }
}
