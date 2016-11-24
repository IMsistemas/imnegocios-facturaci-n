<?php

namespace imfa\Modelos\Documento;

use Illuminate\Database\Eloquent\Model;

class Cabecera extends Model
{
    protected $table = "cabeceras";

    protected $fillable = [

        'comprobante', 'tipoDocumentoCodigo', 'tipo_documento_id',

        'establecimientoCodigo', 'establecimientoDireccion', 'puntoEmisionCodigo', 'punto_emision_id',

        'codigoNumerico', 'schemaID', 'cliente_id', 'tipoIdentificacionClienteCodigo', 'identificacionCliente',

        'razonSocialCliente', 'direccionCliente', 'fechaEmision', 'guiaRemision', 'tipoDocumentoIDModificado',

        'tipoDocumentoModificadoCodigo', 'documentoModificado', 'motivoModificacion', 'fechaDocumentoModificado',

        'importe', 'descuento', 'valorBase', 'impuestos', 'valorTotal',

        'ivaID', 'ivaCodigo', 'ivaTipoImpuestoCodigo', 'ivaPorcentaje', 'valorIva',

        'iceID', 'iceCodigo', 'iceTipoImpuestoCodigo', 'icePorcentaje', 'valorIce',

        'periodoFiscal', 'propina', 'transportista_id', 'tipoIdentificacionTransportistaCodigo', 'identificacionTransportista',

        'razonSocialTransportista', 'placaTransportista', 'direccionPartida', 'fechaInicioTransporte', 'fechaFinTransporte',

        'enviado', 'autorizado', 'fechaAutorizo', 'autorizo', 'tipo_ambiente_id', 'tipoAmbienteCodigo', 'tipo_emision_id',

        'tipoEmisionCodigo', 'claveAcceso', 'claveAccesoBarcode', 'claveAccesoOriginal', 'motivo', 'declaracionAduanera',

        'codigoEstablecimientoDestinatario', 'ruta', 'correoEnviado', 'seleccionado', 'xml', 'schemas_id',

    ];

    public function cabeceraDetalles()
    {
        return $this->hasMany('imfa\Modelos\Documento\CabeceraDetalle');
    }

    public function documentoAdicional()
    {
        return $this->hasMany('imfa\Modelos\Documento\DocumentoAdicional');
    }
}
