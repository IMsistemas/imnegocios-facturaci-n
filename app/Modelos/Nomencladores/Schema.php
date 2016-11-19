<?php

namespace imfa\Modelos\Nomencladores;

use Illuminate\Database\Eloquent\Model;

class Schema extends Model
{
    protected $table = "schemas";

    protected $fillable = [
        'ruc', 'nombre', 'fechaActivacion', 'razonSocial', 'direccionMatriz', 'contribuyenteEspecialNo', 'correoElectronico',
        'logo', 'keyToken', 'passwordToken', 'tipo_ambiente_id', 'telefonoConvencionalPrincipal', 'telefonoConvencionalSecundario',
        'telefonoMovil', 'enviarDocumentos', 'contabilidad', 'propina', 'habilitado',
    ];

    public function tipoAmbiente()
    {
        return $this->belongsTo('imfa\Modelos\Nomencladores\TipoAmbiente', 'tipo_ambiente_id');
    }

}
