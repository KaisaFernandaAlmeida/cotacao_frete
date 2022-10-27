<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
/*
Route::get('cotacao-frete/{name}', function($name){
    return 'Olaaaa ' . $name;
});

Route::get('cotacao/{name}', 'App\Http\Controllers\CotacaoFreteController@cotacao');
*/
/*
Route::get('cotacao_frete', function () {
    return view('home');
});
*/

Route::get('transportadora', 'App\Http\Controllers\TransportadoraController@getAll');
Route::post('transportadora/lista', 'App\Http\Controllers\TransportadoraController@lista');
Route::get('transportadora/{id}', 'App\Http\Controllers\TransportadoraController@getById');
Route::get('transportadora/nome/{nome}', 'App\Http\Controllers\TransportadoraController@getTransportadoraByNome');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
