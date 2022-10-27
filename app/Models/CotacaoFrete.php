<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;


class CotacaoFrete extends Model
{
    use HasFactory;

    protected $fillable = [
        'transportadora_id',
        'uf', 
        'percentual_cotacao', 
        'valor_extra', 
    ];
}
