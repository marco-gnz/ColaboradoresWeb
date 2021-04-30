<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class TipoDocumentoSeeder extends Seeder
{
    public function run()
    {
        DB::table('tipo_documentos')->insert([
            ['descripcion' =>'CONTRATO'],
            ['descripcion' =>'CURRICULUM VITAE'],
            ['descripcion' =>'FOTOCOPIA CARNET'],
            ['descripcion' =>'CERTIFICADO DE TITULO'],
            ['descripcion' =>'CERTIFICADO DE ANTECEDENTES PERSONALES'],
            ['descripcion' =>'CERTIFICADO DE NACIMIENTO'],
            ['descripcion' =>'CERTIFICADO DE AFP'],
            ['descripcion' =>'CERTIFICADO DE PREVISION'],
            ['descripcion' =>'SOLICITUD DE VACACIONES'],
            ['descripcion' =>'SOLICITUD DE PERMISO ADMINSITRATIVO'],
            ['descripcion' =>'LICENCIA MEDICA'],
        ]);
    }
}
