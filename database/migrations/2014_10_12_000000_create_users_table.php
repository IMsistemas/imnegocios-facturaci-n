<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username')->unique();
            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->rememberToken();

            $table->string('primerApellido');
            $table->string('segundoApellido')->nullable();
            $table->string('direccion', 300)->nullable();
            $table->string('telefonoConvencional')->nullable();
            $table->string('telefonoMovil')->nullable();
            $table->date('fechaAlta')->nullable();
            $table->string('descripcion', 1000)->nullable();
            $table->string('foto', 1000000)->nullable();
            $table->string('schemaID')->nullable();
            $table->integer('claveRegistro')->nullable();

            $table->timestamps();

            $table->index('username', 'im_index_username');
            $table->index('email', 'im_index_email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
