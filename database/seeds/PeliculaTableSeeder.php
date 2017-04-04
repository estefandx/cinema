<?php

use Illuminate\Database\Seeder;
use App\Pelicula;

class PeliculaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peliculas = factory(Pelicula::class)->times(20)->create();
    }
}
