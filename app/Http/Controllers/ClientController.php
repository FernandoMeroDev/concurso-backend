<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        header('Conte-Type: application/json');
        return Client::all()->toJson();
    }

    public function create(Request $request)
    {
        header('Conte-Type: application/json');
        Client::create([
            'nombre' => $request->input('nombre'),
        ]);
        return json_encode(['message' => 'Guardado']);
    }

    public function update(Request $request, Client $client)
    {
        header('Conte-Type: application/json');
        $client->update([
            'nombre' => $request->get('nombre'),
        ]);
        return json_encode(['message' => 'Actualizado']);
    }
}
