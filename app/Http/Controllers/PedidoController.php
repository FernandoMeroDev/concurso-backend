<?php

namespace App\Http\Controllers;
use App\Models\Pedido;
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
        Pedido::create([
            'fecha_entrega'=>$request->get('fecha_entrega'),
            'direccion'=>$request->get('direccion'),
            'estado'=>$request->get('estado'),


        ]);
        return json_encode(['message'=>'Guardado']);
    }
    public function update(Request $request, Pedido $pedido)
    {
        $pedido->update([
            'fecha_entrega'=>$request->get('fecha_entrega'),
            'direccion'=>$request->get('direccion'),
            'estado'=>$request->get('estado'),
        ]);
        return json_encode(['message' => 'Actualizado']);
    }

    public function
}
