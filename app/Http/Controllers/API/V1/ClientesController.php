<?php


namespace App\Http\Controllers\Api\V1;

use App\Cliente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ClientesController extends Controller
{
    public function index()
    {
        return Cliente::all();
    }

    public function show($id)
    {
        return Cliente::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        return $cliente;
    }

    public function store(Request $request)
    {
        $cliente = Cliente::create($request->all());
        return $cliente;
    }

    public function delete(Cliente $cliente)
    {
        $cliente->delete();
        return response()->json(null, 204);
    }
}

