<?php

namespace App\Http\Controllers;
use App\Models\Insumos;
use Illuminate\Http\Request;

class InsumosController extends Controller
{
    //
    public function index()
    {
        header('Content-Type: application/json');
        return Insumos::all()->toJson();
    }
     public function create(Request $request)
    {
        Insumos::create([
            'nombre' => $request->get('nombre'),
            'cantidad' => $request->get('cantidad'),
        ]);
        return json_encode(['message' => 'Guardado']);
    }

    public function update(Request $request, Insumos $insumos)
    {
        
        $insumos->update([
            'nombre' => $request->get('nombre'),
            'cantidad' => $request->get('cantidad'),
        ]);
        return json_encode(['message' => 'Actualizado']);
    }
}
