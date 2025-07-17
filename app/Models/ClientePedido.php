<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientePedido extends Model
{
    //
    protected $table ='cli_ped';
    protected $fillable = ['id_cliente', 'id_pedido'];
}
