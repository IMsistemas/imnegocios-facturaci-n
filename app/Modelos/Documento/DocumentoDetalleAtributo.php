<?php

namespace imfa\Modelos\Documento;

use Illuminate\Database\Eloquent\Model;

class DocumentoDetalleAtributo extends Model
{
    protected $table = "documento_detalle_atributos";

    protected $fillable = [
        'atributo', 'descripcion', 'cabecera_detalles_id',
    ];

    public function cabeceraDetalles()
    {
        return $this->belongsTo('imfa\Modelos\Documento\CabeceraDetalle', 'cabecera_detalles_id');
    }

}
