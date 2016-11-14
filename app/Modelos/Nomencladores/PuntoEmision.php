<?php

namespace imfa\Modelos\Nomencladores;

use Illuminate\Database\Eloquent\Model;

class PuntoEmision extends Model
{
    protected $table = "punto_emisions";

    protected $fillable = [
        'codigo', 'descripcion', 'habilitado', 'conInventario', 'generaDocumentos',
    ];

    public function establecimiento()
    {
        return $this->belongsTo('imfa\Modelos\Nomencladores\Establecimiento', 'establecimiento_id');
    }
}
