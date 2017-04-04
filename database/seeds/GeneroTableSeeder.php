<?php

use Illuminate\Database\Seeder;
use App\Genero;
class GeneroTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Genero::create(['descripcion' => 'Acción']);
        Genero::create(['descripcion' => 'Suspenso']);
        Genero::create(['descripcion' => 'Drama']);
        Genero::create(['descripcion' => 'Comedia']);
        Genero::create(['descripcion' => 'Terror']);
        Genero::create(['descripcion' => 'Animada']);
        Genero::create(['descripcion' => 'Belica']);
        Genero::create(['descripcion' => 'Ficción']);
        Genero::create(['descripcion' => 'Musicales']);
    }
}
