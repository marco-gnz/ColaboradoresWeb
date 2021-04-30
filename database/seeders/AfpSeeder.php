<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AfpSeeder extends Seeder
{
    public function run()
    {
    DB::table('afps')->insert([
        ['descripcion' => 'AFP Capital'],
        ['descripcion' => 'AFP Cuprum'],
        ['descripcion' => 'AFP Habitat'],
        ['descripcion' => 'AFP Modelo' ],
        ['descripcion' => 'AFP Planvital'],
        ['descripcion' => 'AFP Provida']]);
    }
}
