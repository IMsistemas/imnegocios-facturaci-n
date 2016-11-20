<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransportistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transportistas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('identificacion', 20)->unique();
            $table->string('razonSocial', 300);

            $table->string('correoElectronico')->nullable();
            $table->string('placa', 20);
            $table->string('ruc', 13)->nullable();
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
        Schema::drop('transportistas');
    }
}
