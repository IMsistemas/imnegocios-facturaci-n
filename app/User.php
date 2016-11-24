<?php

namespace imfa;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'name', 'email', 'password', 'primerApellido',

        'segundoApellido', 'direccion', 'telefonoConvencional',
        'telefonoMovil', 'fechaAlta', 'descripcion', 'foto', 'schemaID',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
