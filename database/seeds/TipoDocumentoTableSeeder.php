<?php

use Illuminate\Database\Seeder;
use App\TipoDocumento;

class TipoDocumentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoDocumento::create(['descripcion' => 'Cedula de ciudadania']);
        TipoDocumento::create(['descripcion' => 'Tarjeta de identidad']);
        TipoDocumento::create(['descripcion' => 'Otro']);
    }
}
