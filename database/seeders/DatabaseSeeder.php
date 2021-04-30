<?php

namespace Database\Seeders;

use App\Http\Controllers\TipoPagoController;
use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /*DB::statement('SET FOREIGN_KEY_CHECKS=0;');*/

        $this->call([
            AfpSeeder::class,
            EstadoTrabajadorSeeder::class,
            PrevisionSaludSeeder::class,
            EstadoUsuarioSeeder::class,
            TipoPagoSeeder::class,
            TipoContratoSeeder::class,
            TipoPagoSeeder::class,
            TipoContratoSeeder::class,
            RegionSeeder::class,
            TipoDocumentoSeeder::class,
        ]);

       /* DB::statement('SET FOREIGN_KEY_CHECKS=1;');*/
    }
}
