<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(TipoDocumentoTableSeeder::class);
        $this->call(TipoUsuarioTableSeeder::class);
        $this->call(UsuarioTableSeeder::class);
        $this->call(GeneroTableSeeder::class);
        $this->call(PeliculaTableSeeder::class);
        $this->call(SalaTableSeeder::class);
    }
}
