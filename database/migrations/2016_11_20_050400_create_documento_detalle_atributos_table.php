<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoDetalleAtributosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_detalle_atributos', function (Blueprint $table) {
            $table->increments('id');

            $table->string('atributo', 25);
            $table->string('descripcion', 300);

            $table->integer('cabecera_detalles_id')->unsigned()->nullable();
            $table->foreign('cabecera_detalles_id')->references('id')->on('cabecera_detalles');

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
        Schema::drop('documento_detalle_atributos');
    }
}
