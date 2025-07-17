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
        Client::create([
            'nombre' => $request->get('nombre'),
        ]);
        return json_encode(['message' => 'Guardado']);
    }
}
