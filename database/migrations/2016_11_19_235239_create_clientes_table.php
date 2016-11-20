<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identificacion', 13);
            $table->string('razonSocial', 300);
            $table->string('direccion', 300);
            $table->string('telefonoConvencional', 15)->nullable();
            $table->string('extencion', 6)->nullable();
            $table->string('telefonoMovil', 15)->nullable();
            $table->string('correoElectronico')->nullable();
            $table->boolean('habilitado');

            $table->integer('tipo_identificacion_id')->unsigned();
            $table->foreign('tipo_identificacion_id')->references('id')->on('tipo_identificacions');

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
        Schema::drop('clientes');
    }
}
