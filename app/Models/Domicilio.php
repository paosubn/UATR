<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilio';

    protected $fillable = [
        'id', 'idMunicipio', 'idLocalidad', 'idColonia',  'calle', 'numExterno',  'numInterno',
    ];

    public function variablesPersonas()
    {
        return $this->hasMany('App\Models\VariablesPersona');
    }

    public function dirNotificaciones()
    {
        return $this->hasMany('App\Models\DirNotificacion');
    }

    public function preregistro()
    {
        return $this->hasMany('App\Models\Preregistro');
    }
    // public function tipifDelitos()
    // {
    //     return $this->hasMany('App\Models\TipifDelito');
    // }

    public function municipio()
    {
        return $this->belongsTo('App\Models\CatMunicipio');
    }

    public function localidad()
    {
        return $this->belongsTo('App\Models\CatLocalidad');
    }


    public function colonia()
    {
        return $this->belongsTo('App\Models\CatColonia');
    }
}
