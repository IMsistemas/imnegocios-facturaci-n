<?php

namespace imfa\Modelos\Nomencladores;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
        'identificacion', 'razonSocial', 'direccion', 'telefonoConvencional',
        'extencion', 'telefonoMovil', 'correoElectronico', 'habilitado',
        'tipo_identificacion_id', 'schemas_id',
    ];


}
