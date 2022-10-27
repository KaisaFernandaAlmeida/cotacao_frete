<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CotacaoFrete;


class Cotacao extends Controller
{
    public function getCotacao(Request $request){
        
            foreach(CotacaoFrete::get() as $_cotacao){
                if ($_cotacao['uf'] == $request->uf_cotar){
                    
                    $_cotacao['percentual_cotacao'];
                    $_cotacao['valor_extra'];
                  
                    $calculoimposto = [];
                    foreach($this->getCalculoImposto() as $_transportadora){
                        if ($_transportadora['uf'] ==$request->uf_cotar)

                            if($_transportadora['valor_pedido'] != ""){
                                $calculoimposto = $_transportadora['valor_pedido'];
                            
                                //CALCULO
                                dd(($calculoimposto/100 * $_cotacao['percentual_cotacao']) + $_cotacao['valor_extra']);
                                
                                


                            // MENSAGEM DE ERRO QUANDO NÃO EXISTE O REGISTRO
                            }else {  
                                return $calculoimposto ? response()->json($calculoimposto) : abort( code:500 );
                            }
                    }
                }    
                                        
            } 
            
            

    } 
        
    protected function getCalculoImposto(){
        return [
            [
                'uf' => 'SC',
                'valor_pedido' => 565.70
            ],
        ];
    } 
}
