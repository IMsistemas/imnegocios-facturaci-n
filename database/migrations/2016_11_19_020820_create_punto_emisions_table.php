<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePuntoEmisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('punto_emisions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 3)->index();
            $table->string('descripcion', 300);
            $table->boolean('habilitado');
            $table->boolean('conInventario');
            $table->boolean('generaDocumentos');
            $table->timestamps();


            $table->integer('establecimiento_id')->unsigned();
            $table->foreign('establecimiento_id')->references('id')->on('establecimientos');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('punto_emisions');
    }
}
