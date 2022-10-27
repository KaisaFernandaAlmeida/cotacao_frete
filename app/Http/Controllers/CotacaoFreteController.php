<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateUserFormRequest;
use App\Models\CotacaoFrete;
use App\Models\Transportadora;
use Illuminate\Http\Request;

class CotacaoFreteController extends Controller 
{
    
    // LISTA OS CADASTROS DE COTAÇÃO DE FRETE
    public function salvarCadastroCotacao(StoreUpdateUserFormRequest $request){

        //Str::plural('cotacao_frete') == "cotacao_fretes";    

        // VISUALIZAR OS CAMPOS QUE SERÃO SALVOS
        //dd($request->all()); 

        CotacaoFrete::create([
            'transportadora_id' => $request->transportadora_id,
            'uf' => $request->uf,
            'percentual_cotacao' => $request->percentual_cotacao,
            'valor_extra' => $request->valor_extra
        ]);
    
        return redirect()->back()->with('sucesso', 'Cadastro criado com sucesso!');

    }    
    
    
    // LISTA OS CADASTROS DE COTAÇÃO DE FRETE
    public function getAllCadastros(){
        
        $cadastros       =  CotacaoFrete::get(); 
        $transportadoras =  Transportadora::get(); 

        return view('home', compact('cadastros','transportadoras'));
    }

    

    
    
}
