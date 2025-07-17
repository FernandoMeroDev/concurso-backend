<?php

namespace App\Http\Controllers;

use App\Models\Insumos;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    public function index()
    {
        header('Content-Type: application/json');
        return Insumos::all()->toJson();
    }

    public function store(Request $request)
    {
        Insumos::create([
            'nombre' => $request->input('nombre'),
            'cantidad' => $request->input('cantidad'),
        ]);
        header('Content-Type: application/json');
        return json_encode([
            'message' => 'Guardado'
        ]);
    }
}
