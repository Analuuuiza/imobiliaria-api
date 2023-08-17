<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImovelRequest;
use App\Models\ImovelModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ImovelController extends Controller
{
    public function imovel(ImovelRequest $request){
        $imovel = ImovelModel::create([
            'tipos' => $request->tipos,
            'endereço' => $request->endereço,
            'valor' => $request->valor,
            'alugar' => $request->alugar,
            'comprar' => $request->comprar,
            'comodos' => $request->comodos,
            'tamanho' => $request->tamanho,
            'imagem' => $request->imagem
        ]);

        return response()->json([
            "success" => true,
            "message" => "Cliente Cadastrado com Sucesso",
            "data" => $imovel
        ], 200);
    }
}
