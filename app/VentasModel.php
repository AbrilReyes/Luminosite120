<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VentasModel extends Model
{
    protected $table = 'tb_ventas';
    protected $primaryKey = 'id_venta';
    protected $fillable = [
       'monto_total',
       'direcciones_id',
       'clientes_id'
    ];
}
