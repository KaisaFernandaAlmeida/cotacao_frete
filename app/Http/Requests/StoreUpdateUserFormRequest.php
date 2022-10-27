<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\Str;

//Str::plural('cotacao_frete') == "cotacao_fretes"; 

class StoreUpdateUserFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {   // VALIDAÇÃO DE USUÁRIOS
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        
        return [
            'transportadora_id'  => 'required',
            'uf'                 => 'required',
            'percentual_cotacao' => 'required|numeric|between:0,9999999999.99',
            'valor_extra'        => 'numeric',
        ]; 
    }

    public function messages()
    {
        return [
            'transportadora_id.required'  => 'Campo obrigatório',
            'uf.required'                 => 'Campo obrigatório',
            'percentual_cotacao.required' => 'Campo obrigatório',
            'valor_extra.numeric'         => 'Campo deve receber um valor numérico',
        ];
    }
}
