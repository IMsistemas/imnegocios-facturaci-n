<?php

namespace imfa\Modelos\Documento;

use Illuminate\Database\Eloquent\Model;

class CabeceraDetalle extends Model
{
    protected $table = "cabecera_detalles";

    protected $fillable = [

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
