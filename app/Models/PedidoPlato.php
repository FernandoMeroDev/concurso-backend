<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PedidoPlato extends Model
{
    //
    protected $table = 'ped_plat';
    protected $fillable = ['id_pedido', 'id_plato'];
}
