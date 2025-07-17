<?php
use App\Models\Plato;

namespace App\Http\Controllers; 

use Illuminate\Http\Request;

class PlatoController extends Controller
{
    public function index(){ 
        header('Content-Type: application/json');
        return Plato::all()->toJson();
    }
    //
}

