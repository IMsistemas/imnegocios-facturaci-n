<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schemas', function (Blueprint $table) {
            $table->increments('id');

            $table->string('ruc', 13)->index();
            $table->string('nombre')->unique()->index();
            $table->date('fechaActivacion');

            // antes de general
            $table->string('razonSocial');
            $table->string('direccionMatriz', 300);
            $table->string('contribuyenteEspecialNo', 5)->nullable();
            $table->string('correoElectronico');

            $table->string('logo')->nullable();
            $table->string('keyToken')->nullable();
            $table->string('passwordToken')->nullable();

            $table->integer('tipo_ambiente_id')->unsigned();
            $table->foreign('tipo_ambiente_id')->references('id')->on('tipo_ambientes');

            $table->string('telefonoConvencionalPrincipal')->nullable();
            $table->string('telefonoConvencionalSecundario')->nullable();
            $table->string('telefonoMovil')->nullable();

            $table->boolean('enviarDocumentos', true)->nullable();
            $table->boolean('contabilidad', true)->nullable();
            $table->boolean('propina', true)->nullable();
            $table->boolean('habilitado', true)->nullable();

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
        Schema::drop('schemas');
    }
}
