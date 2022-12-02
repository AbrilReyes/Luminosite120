<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MapasModel extends Model
{
    protected $table = 'tb_mapas';
    protected $primaryKey = 'id_mapa';
    protected $fillable = [
        'nombre',
        'latitude',
        'longitude'
    ];
}
