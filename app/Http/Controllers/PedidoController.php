<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    //
    public function index()
    {
        header('Content-Type: application/json');
        return Pedido::all()->toJson();
    }

    public function create(Request $request)
    {
        Client::create([
            'fecha_entrega'=>$request->get('fecha_entrega'),
            'estado'=>$request->get('estado'),


        ]);
        return json_encode(['message'=>'Guardado']);
    }
    public function update(Request $request, Client $client)
    {
        $client->update([
            'fecha_entrega'=>$request->get('fecha_entrega'),
            'estado'=>$request->get('estado'),
        ]);
        return json_encode(['message' => 'Actualizado']);
    }

    public function
}
