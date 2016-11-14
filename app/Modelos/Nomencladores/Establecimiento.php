<?php

namespace imfa\Modelos\Nomencladores;

use Illuminate\Database\Eloquent\Model;

class Establecimiento extends Model
{
    protected $table = "establecimientos";

    protected $fillable = [
        'codigo', 'descripcion', 'direccion' ,'habilitado',
    ];

    public function puntoEmisiones()
    {
        return $this->hasMany('imfa\Modelos\Nomencladores\PuntoEmision');
    }


}
