<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Insumos extends Model
{
    //
    protected $table='insumos';

    protected $fillable=['nombre','cantidad'];
  
}
