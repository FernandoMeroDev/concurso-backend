<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InsumoPlato extends Model
{
    //
    protected $table = 'pla_ins';
    protected $fillable= ['id_plato','id_insumo'];
}
