<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo', 1)->unique()->index();
            $table->string('descripcion');
            $table->boolean('habilitado');
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
        Schema::drop('tipo_clientes');
    }
}
