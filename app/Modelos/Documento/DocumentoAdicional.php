<?php

namespace imfa\Modelos\Documento;

use Illuminate\Database\Eloquent\Model;

class DocumentoAdicional extends Model
{
    protected $table = "documento_adicionals";

    protected $fillable = [
        'nombre', 'descripcion', 'cabeceras_id',
    ];

    public function cabeceras()
    {
        return $this->belongsTo('imfa\Modelos\Documento\Cabecera', 'cabeceras_id');
    }
}
