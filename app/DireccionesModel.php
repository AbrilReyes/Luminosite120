<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DireccionesModel extends Model
{
    protected $table = 'tb_direcciones';
    protected $primaryKey = 'id_direccion';
    protected $fillable = [
       'clientes_id',
       'calle',
       'numero_direccion',
       'localidad',
       'municipio',
       'estado'
    ];
}
