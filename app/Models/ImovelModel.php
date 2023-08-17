<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImovelModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'tipos',
        'endereço',
        'valor',
        'alugar',
        'comprar',
        'comodos',
        'tamanho',
        'imagem'
    ];
}
