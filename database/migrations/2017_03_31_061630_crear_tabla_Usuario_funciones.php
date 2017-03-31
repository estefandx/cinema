<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioFunciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuarios_funciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('usuario_id')->unsigned();
            $table->integer('funcion_id')->unsigned();
            $table->integer('Numero_reservas')->unsigned();
            $table->foreign('funcion_id')->references('funcion_id')->on('Funciones')->onDelete("cascade");
            $table->foreign('usuario_id')->references('usuario_id')->on('Usuarios')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Usuarios_funciones");
    }
}
