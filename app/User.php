<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'full_name',
        'position',
        'establecimiento',
        'rut',
        'email',
        'password',
        'created_at',
        'updated_at',
        'confirmado_llave_secreta',
        'clave_electronica',
        'telefono',
        'id_role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role () {
        return $this->belongsTo('App\Role', 'id_role');
    }


}
