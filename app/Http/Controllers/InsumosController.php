<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsumosController extends Controller
{
    //
    create function index()
    {
        header('Content-Type: application/json');
        return Insumos::all()->toJson();
    }
     public function create(Request $request)
    {
        Client::create([
            'nombre' => $request->get('nombre'),
            'cantidad' => $request->get('cantidad'),
        ]);
        return json_encode(['message' => 'Guardado']);
    }

    public function update(Request $request, Client $client)
    {
        $client->update([
            'nombre' => $request->get('nombre'),
            'cantidad' => $request->get('cantidad'),
        ]);
        return json_encode(['message' => 'Actualizado']);
    }
}
