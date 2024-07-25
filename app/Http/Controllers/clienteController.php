<?php

namespace App\Http\Controllers;
use App\Models\Cliente;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    public function index()
    {   
        $clientes=Cliente::all();
        if ($clientes->isEmpty()) {
            $data=[
                'message'=>'no se encontraron estudiantes',
                'status'=>404
            ];
            return response()->json($data, 404);
        }
        return response()->json($clientes, 200);
    }
}
