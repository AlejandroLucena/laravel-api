<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
 
class ClienteController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function show(Cliente $cliente)
    {
        return $cliente;
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());

        return response()->json($cliente, 201);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $cliente->update($request->all());

        return response()->json($cliente, 200);
    }

    public function delete(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json(null, 204);
    }
}
