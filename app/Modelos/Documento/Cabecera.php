<?php

namespace imfa\Modelos\Documento;

use Illuminate\Database\Eloquent\Model;

class Cabecera extends Model
{
    protected $table = "cabeceras";

    protected $fillable = [

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
