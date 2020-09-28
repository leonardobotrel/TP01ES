<?php

use Illuminate\Support\Facades\Route;

Route::any('/pesquisa', 'Admin\ImoveisController@search')->name('imovel.search');
Route::get('/detalhe{id}', 'Admin\ImoveisController@detalhe')->name('imovel.detalhe');
Route::get('/cadastrar', 'Admin\ImoveisController@showCadastrar');
Route::post('/cadastrar', 'Admin\ImoveisController@postCadastrar');
Route::get('/cadastrocasa', 'Admin\ImoveisController@cadastrocasa');
Route::get('/visualizar', 'Admin\ImoveisController@visualizar');
Route::get('/', function () {
    return view('welcome');
});
