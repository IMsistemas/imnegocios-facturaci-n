<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstablecimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('establecimientos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 3)->index();
            $table->string('descripcion', 300)->nullable();
            $table->string('direccion');
            $table->boolean('habilitado');


            $table->integer('schemas_id')->unsigned();
            $table->foreign('schemas_id')->references('id')->on('schemas');


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
        Schema::drop('establecimientos');
    }
}
