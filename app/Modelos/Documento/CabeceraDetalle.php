<?php

namespace imfa\Modelos\Documento;

use Illuminate\Database\Eloquent\Model;

class CabeceraDetalle extends Model
{
    protected $table = "cabecera_detalles";

    protected $fillable = [
        'cabeceras_id' ,

        'codigoProducto',
        'codigoAuxiliarProducto',
        'descripcion',
        'numero',
        'cantidad',
        'costo',
        'precio',
        'importe',
        'descuento',
        'valorBase',
        'impuestos',
        'valorTotal',

        'ivaID',
        'ivaCodigo',
        'ivaTipoImpuestoCodigo',
        'ivaPorcentaje',
        'valorIva',

        'iceID',
        'iceCodigo',
        'iceTipoImpuestoCodigo',
        'icePorcentaje',
        'valorIce',

        'impuesto_retencion_id',
        'impuestoRetencionCodigo',
        'impuestoRetencionTipoImpuestoCodigo',
        'impuestoRetencionPorcentaje',

        'tipoDocumentoRetenido_id',
        'tipoDocumentoRetenidoCodigo',
        'documentoRetenido',
        'fechaDocumentoRetenido',
        'razonModificacion',

        'valorModificacion',
        'baseImponible',
        'valorRetencion',

    ];

    public function cabeceras()
    {
        return $this->belongsTo('imfa\Modelos\Documento\Cabecera', 'cabeceras_id');
    }

    public function documentoDetalleAtributos()
    {
        return $this->hasMany('imfa\Modelos\Documento\DocumentoDetalleAtributo');
    }
}
