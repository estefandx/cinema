<?php

use Illuminate\Database\Seeder;
use App\Sala;

class SalaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sala::create(['nombre' => 'Sala General','numero_sillas' => 60]);
        Sala::create(['nombre' => 'Sala Premiun','numero_sillas' => 80]);
        Sala::create(['nombre' => 'Sala Sencilla','numero_sillas' => 40]);
        Sala::create(['nombre' => 'Sala  General 2','numero_sillas' => 60]);
        Sala::create(['nombre' => 'Sala VIP','numero_sillas' => 100]);
        Sala::create(['nombre' => 'Sala General 3','numero_sillas' => 60]);
    }
}
