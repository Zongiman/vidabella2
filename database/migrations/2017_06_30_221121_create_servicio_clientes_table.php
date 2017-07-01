<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicioClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicio_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_servicio')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('usuarios');
            $table->foreign('id_servicio')->references('id')->on('servicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('servicio_clientes');
    }
}
