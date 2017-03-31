<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPeliculas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('Peliculas', function (Blueprint $table) {
            $table->increments('pelicula_id');
            $table->string('nombre');
            $table->string('url_imagen');
            $table->text('sinopsis');
            $table->integer("genero_id")->unsigned()->nullable();

            $table->foreign("genero_id")->references('genero_id')->on('Generos')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Peliculas");
    }
}
