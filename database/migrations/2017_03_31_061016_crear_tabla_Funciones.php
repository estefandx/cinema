<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaFunciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Funciones', function (Blueprint $table) {
            $table->increments('funcion_id');
            $table->integer("pelicula_id")->unsigned()->nullable();
            $table->integer("sala_id")->unsigned()->nullable();

            $table->foreign("pelicula_id")->references('pelicula_id')->on('Peliculas')->onDelete("cascade");
            $table->foreign("sala_id")->references('sala_id')->on('Salas')->onDelete("cascade");
            $table->dateTime('horario');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Funciones");
    }
}
