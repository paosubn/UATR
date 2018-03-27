<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    protected $table = 'domicilio';

    protected $fillable = [
        'id', 'idMunicipio', 'idLocalidad', 'idColonia',  'calle', 'numExterno',  'numInterno',
    ];

    public function preregistro()
    {
        return $this->hasMany('App\Models\Preregistro');
    }

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
