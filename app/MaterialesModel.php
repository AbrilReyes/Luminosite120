<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MaterialesModel extends Model
{
    protected $table = 'tb_materiales';
    protected $primaryKey = 'id_material';
    protected $fillable = [
       'nombre',
       'tipo_material'
    ];
}
