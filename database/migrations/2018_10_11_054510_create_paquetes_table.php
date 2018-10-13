<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaquetesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquetes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_agencia')->unsigned();
            $table->foreign('id_agencia')->references('id')->on('users');
            $table->string('estado_llegada');
            $table->string('ciudad_llegada');
            $table->string('estado_salida');
            $table->string('ciudad_salida');
            $table->string('nombre');
            $table->float('precio_original')->default(0);
            $table->float('precio_max')->default(0);
            $table->float('precio_min')->default(0);
            $table->string('descripcion');
            $table->string('fecha_fin');
            $table->integer('lugares');
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
        Schema::dropIfExists('paquetes');
    }
}
