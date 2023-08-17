<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\ClienteModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ClienteController extends Controller
{
    public function cliente(ClienteRequest $request){
        $cliente = ClienteModel::create([
            'nome' => $request->nome,
            'email' => $request->email,
            'telefone' => $request->celular,
            'cpf' => $request->cpf,
            'password' => Hash::make($request->password)
        ]);

        return response()->json([
            "success" => true,
            "message" => "Cliente Cadastrado com Sucesso",
            "data" => $cliente
        ], 200);
    }
}
