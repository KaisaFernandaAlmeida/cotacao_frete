<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transportadora;


class TransportadoraController extends Controller
{

    /*
    public function getAll(){
        
        $transportadoras = $this->getTransportadora();

        //return response()->json($transportadoras);
        return view('home', compact('transportadoras'));
    }

    public function getById($id){
        $transportadora = null;

        foreach($this->getTransportadora() as $_transportadora){
            if ($_transportadora['id'] ==$id)
                $transportadora = $_transportadora;
        }
        // caso não exista o registro
        return $transportadora ? response()->json($transportadora) : abort( code:500 );
    }

    public function getTransportadoraByNome($nome){

        $transportadoras = [];

        foreach($this->getTransportadora() as $_transportadora){
            if ($_transportadora['nome'] == $nome)
                $transportadoras[] = $_transportadora;
        }  
        
        return response()->json($transportadoras);
    }

    public function lista(Request $request){
        //dd($request->all());

        $validate = $request->validate([
            'id' => 'numeric|unique:posts',
            'uf' => 'numeric|unique:posts',
            'percentual_cotacao' => 'numeric|unique:posts',
            'valor_extra' => 'numeric',
            'transportadora_id' => 'required|unique:posts|min:3'
        ]);

        return response()->json($request->all());
    }

    protected function getTransportadora(){
        return [
            [
                'id' => 1, 
                'uf' => 'PR',
                'percentual_cotacao' => 2.4, 
                'valor_extra' => 16.00, 
                'transportadora_id' => 1
            ],
            [
                'id' => 2, 
                'uf' => 'PR',
                'percentual_cotacao' => 3.5, 
                'valor_extra' => 14.00, 
                'transportadora_id' => 2
            ],
            [
                'id' => 3, 
                'uf' => 'SP',
                'percentual_cotacao' => 1.2, 
                'valor_extra' => 7.00, 
                'transportadora_id' => 1
            ],
            [
                'id' => 4, 
                'uf' => 'PR',
                'percentual_cotacao' => 1.9, 
                'valor_extra' => 10.00, 
                'transportadora_id' => 2
            ],
        ];
    } */
}
