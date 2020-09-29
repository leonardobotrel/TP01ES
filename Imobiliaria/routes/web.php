<?php

use Illuminate\Support\Facades\Route;
Route::get('/ViewBairros', 'Admin\BairroController@view')->name('Bairro.view');
Route::any('/pesquisa', 'Admin\ImoveisController@search')->name('imovel.search');
Route::get('/detalhe{id}', 'Admin\ImoveisController@detalhe')->name('imovel.detalhe');
Route::get('/cadastrar', 'Admin\ImoveisController@showCadastrar');
Route::post('/cadastrar', 'Admin\ImoveisController@postCadastrar');
Route::get('/visualizar', 'Admin\ImoveisController@visualizar');
Route::get('/', function () {
    return view('welcome');
});
