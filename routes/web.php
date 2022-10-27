<?php
namespace App\Models;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/cotacao_frete', function () {
    return view('home');
}); */


// EXIBIR A HOME
Route::get('/cotacao_frete', 'App\Http\Controllers\HomeController@home');

// LISTAR OS CADASTROS
Route::get('/cotacao_frete', 'App\Http\Controllers\CotacaoFreteController@getAllCadastros');

// SALVAR CADASTRO DE COTAÇÃO DE FRETE NO BANCO
Route::post('/cotacao_frete', 'App\Http\Controllers\CotacaoFreteController@salvarCadastroCotacao');

// ENVIAR JSON DA COTAÇÃO E EFETUAR O CÁLCULO
Route::post('/cotacao_frete', 'App\Http\Controllers\Cotacao@getCotacao');

/*
Route::get('/cotacao_frete/{id}', function ($id) {
    //dd(CotacaoFrete::find($id));
    $cotacao = CotacaoFrete::find($id);
    return view('ver', ['cotacao' => $cotacao]);
});
*/

// SALVAR REGISTRO NO BANCO
/*
Route::post('/cotacao_frete', function (Request $request) {
    //dd($request->all());
    CotacaoFrete::create([
        'transportadora_id' => $request->transportadora_id,
        'uf' => $request->uf,
        'percentual_cotacao' => $request->percentual_cotacao,
        'valor_extra' => $request->valor_extra
    ]);

    echo "Cadastro criado com sucesso!";
}); */

// EXIBIR REGISTRO DO BANCO
Route::get('/cotacao_frete/{id}', function ($id) {
    //dd(CotacaoFrete::find($id));
    $cotacao = CotacaoFrete::find($id);
    return view('ver', ['cotacao' => $cotacao]);
});

// EDITAR REGISTRO
Route::get('/cotacao_frete/{id}', function ($id) {
    //dd(CotacaoFrete::find($id));
    $cotacao = CotacaoFrete::find($id);
    return view('editar', ['cotacao' => $cotacao]);
});

// EDITAR REGISTRO
Route::post('/editar-frete/{id}', function (Request $request, $id) {
    //dd(CotacaoFrete::find($id));
    $cotacao = CotacaoFrete::find($id);
    $cotacao->update([
        'transportadora_id' => $request->transportadora_id,
        'uf' => $request->uf /* ,
        'percentual_cotacao' => $request->percentual_cotacao,
        'valor_extra' => $request->valor_extra */
    ]);

    //return view('editar-produto', ['cotacao' => $cotacao]);

    echo "Cotação editada com sucesso!";
});


// EXCLUIR REGISTRO
Route::get('/excluir-frete/{id}', function ($id) {
    //dd(CotacaoFrete::find($id));
    $cotacao = CotacaoFrete::find($id);
    $cotacao->delete();

    //return view('editar-produto', ['cotacao' => $cotacao]);

    echo "Cotação excluida com sucesso!";
});
//Route::get('/', 'App\Http\Controllers\HomeController@home');

//Route::get('transportadora', 'App\Http\Controllers\HomeController@home');