<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("Usuarios", function(Blueprint $table){
            $table->increments("usuario_id");
            //$table->string("nombre_usuario");
            $table->string("nombre");
            $table->string("apellido");
            $table->string("email")->unique();
            $table->string('password');
            $table->string("telefono", 45);
            $table->integer("tipo_documento_id")->unsigned()->nullable();
            $table->integer("Tipo_usuario_id")->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign("tipo_documento_id")->references('tipo_documento_id')->on('Tipo_documento')->onDelete("cascade");
            $table->foreign("Tipo_usuario_id")->references('Tipo_usuario_id')->on('Tipo_usuario')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("Usuario");
    }
}
