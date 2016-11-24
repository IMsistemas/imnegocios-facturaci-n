<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoAdicionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_adicionals', function (Blueprint $table) {
            $table->increments('id');

            $table->string('nombre', 25);
            $table->string('descripcion', 300);

            $table->integer('cabeceras_id')->unsigned()->nullable();
            $table->foreign('cabeceras_id')->references('id')->on('cabeceras');

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
        Schema::drop('documento_adicionals');
    }
}
