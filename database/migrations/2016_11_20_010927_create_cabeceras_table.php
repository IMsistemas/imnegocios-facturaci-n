<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCabecerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cabeceras', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('comprobante');
            $table->string('tipoDocumentoCodigo', 2);
            $table->integer('tipo_documento_id')->unsigned();
            $table->foreign('tipo_documento_id')->references('id')->on('tipo_documentos');

            $table->string('establecimientoCodigo', 3);
            $table->string('establecimientoDireccion', 300)->nullable();

            $table->string('puntoEmisionCodigo', 3);
            $table->integer('punto_emision_id')->unsigned();
            $table->foreign('punto_emision_id')->references('id')->on('punto_emisions');

            $table->string('codigoNumerico', 23);
            $table->string('schemaID');

            $table->integer('cliente_id')->unsigned();
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->string('tipoIdentificacionClienteCodigo', 2);
            $table->string('identificacionCliente', 20);
            $table->string('razonSocialCliente');
            $table->string('direccionCliente', 300);

            $table->date('fechaEmision')->nullable();
            $table->string('guiaRemision', 15)->nullable();

            $table->string('tipoDocumentoIDModificado')->nullable();
            $table->string('tipoDocumentoModificadoCodigo', 2)->nullable();
            $table->string('documentoModificado', 15)->nullable();
            $table->string('motivoModificacion', 300)->nullable();
            $table->date('fechaDocumentoModificado')->nullable();

            $table->decimal('importe', 19, 2)->nullable();
            $table->decimal('descuento', 19, 2)->nullable();
            $table->decimal('valorBase', 19, 2)->nullable();
            $table->decimal('impuestos', 19, 2)->nullable();
            $table->decimal('valorTotal', 19, 2)->nullable();

            $table->string('ivaID')->nullable();
            $table->string('ivaCodigo', 4)->nullable();
            $table->string('ivaTipoImpuestoCodigo', 2)->nullable();
            $table->decimal('ivaPorcentaje', 19, 2)->nullable();
            $table->decimal('valorIva', 19, 2)->nullable();

            $table->string('iceID')->nullable();
            $table->string('iceCodigo', 4)->nullable();
            $table->string('iceTipoImpuestoCodigo', 2)->nullable();
            $table->decimal('icePorcentaje', 19, 2)->nullable();
            $table->decimal('valorIce', 19, 2)->nullable();

            $table->date('periodoFiscal')->nullable();
            $table->decimal('propina', 19, 2)->nullable();

            $table->integer('transportista_id')->unsigned()->nullable();
            $table->foreign('transportista_id')->references('id')->on('transportistas');

            $table->string('tipoIdentificacionTransportistaCodigo', 2)->nullable();
            $table->string('identificacionTransportista', 20)->nullable();
            $table->string('razonSocialTransportista')->nullable();
            $table->string('placaTransportista')->nullable();
            $table->string('direccionPartida')->nullable();

            $table->date('fechaInicioTransporte')->nullable();
            $table->date('fechaFinTransporte')->nullable();

            $table->boolean('enviado')->nullable();
            $table->boolean('autorizado')->nullable();
            $table->date('fechaAutorizo')->nullable();
            $table->string('autorizo')->nullable();

            $table->integer('tipo_ambiente_id')->unsigned();
            $table->foreign('tipo_ambiente_id')->references('id')->on('tipo_ambientes');
            $table->string('tipoAmbienteCodigo', 1);

            $table->integer('tipo_emision_id')->unsigned();
            $table->foreign('tipo_emision_id')->references('id')->on('tipo_emisions');
            $table->string('tipoEmisionCodigo', 1);

            $table->string('claveAcceso')->nullable();
            $table->string('claveAccesoBarcode')->nullable();  // revisar deberia ser byte[]
            $table->string('claveAccesoOriginal')->nullable();
            $table->string('motivo', 300)->nullable();
            $table->string('declaracionAduanera');
            $table->string('codigoEstablecimientoDestinatario', 3)->nullable();
            $table->string('ruta', 300)->nullable();

            $table->boolean('correoEnviado')->nullable();
            $table->boolean('seleccionado', false );
            $table->string('xml')->nullable();

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
        Schema::drop('cabeceras');
    }
}
