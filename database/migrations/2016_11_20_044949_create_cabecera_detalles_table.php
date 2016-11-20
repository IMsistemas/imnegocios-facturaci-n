<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabeceraDetallesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabecera_detalles', function (Blueprint $table) {
            $table->increments('id');


            $table->integer('numero')->nullable();
            $table->decimal('cantidad', 19, 6)->nullable();
            $table->decimal('costo', 19, 6)->nullable();
            $table->decimal('precio', 19, 6)->nullable();
            $table->decimal('importe', 19, 2)->nullable();
            $table->decimal('descuento', 19, 2)->nullable();
            $table->decimal('valorBase', 19, 2)->nullable();
            $table->decimal('impuestos', 19, 2)->nullable();
            $table->decimal('valorTotal', 19, 2)->nullable();


            $table->string('ivaID')->nullable();                    // siempre convertir a int
            $table->string('ivaCodigo', 4)->nullable();
            $table->string('ivaTipoImpuestoCodigo', 2)->nullable();
            $table->decimal('ivaPorcentaje', 19, 2)->nullable();
            $table->decimal('valorIva', 19, 2)->nullable();


            $table->string('iceID')->nullable();
            $table->string('iceCodigo', 4)->nullable();
            $table->string('iceTipoImpuestoCodigo', 2)->nullable();
            $table->decimal('icePorcentaje', 19, 2)->nullable();
            $table->decimal('valorIce', 19, 2)->nullable();


            // impuesto retencion ....
            $table->integer('impuesto_retencion_id')->unsigned()->nullable();
            $table->foreign('impuesto_retencion_id')->references('id')->on('impuesto_retencions');
            $table->string('impuestoRetencionCodigo', 4)->nullable();
            $table->string('impuestoRetencionTipoImpuestoCodigo', 1)->nullable();
            $table->decimal('impuestoRetencionPorcentaje', 19, 2)->nullable();


            $table->integer('tipoDocumentoRetenido_id')->unsigned()->nullable();
            $table->foreign('tipoDocumentoRetenido_id')->references('id')->on('tipo_documentos');
            $table->string('tipoDocumentoRetenidoCodigo', 2)->nullable();
            $table->string('documentoRetenido', 15)->nullable();
            $table->date('fechaDocumentoRetenido')->nullable();
            $table->string('razonModificacion', 300)->nullable();


            $table->decimal('valorModificacion', 19, 2)->nullable();
            $table->decimal('baseImponible', 19, 2)->nullable();
            $table->decimal('valorRetencion', 19, 2)->nullable();


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
        Schema::drop('cabecera_detalles');
    }
}
