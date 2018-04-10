<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = Cliente::all();

        return response()->json([
            'clientes' => $clientes
        ]);
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
