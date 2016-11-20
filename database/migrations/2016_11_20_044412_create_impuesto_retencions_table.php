<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImpuestoRetencionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('impuesto_retencions', function (Blueprint $table) {
            $table->increments('id');

            $table->string('codigo', 5)->nullable();
            $table->string('descripcion', 1024)->nullable();
            $table->decimal('porcentaje', 19, 4)->nullable();
            $table->decimal('maximo', 19, 4)->nullable();
            $table->decimal('minimo', 19, 4)->nullable();
            $table->boolean('habilitado')->nullable();
            $table->boolean('variable')->nullable();

            $table->integer('tipo_impuesto_id')->unsigned();
            $table->foreign('tipo_impuesto_id')->references('id')->on('tipo_impuestos');

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
        Schema::drop('impuesto_retencions');
    }
}
