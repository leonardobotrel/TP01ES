<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastrar', 'Admin\ImoveisController@cadastrar');
Route::get('/cadastrocasa', 'Admin\ImoveisController@cadastrocasa');
Route::get('/visualizar', 'Admin\ImoveisController@visualizar');
Route::get('/', function () {
    return view('welcome');
});
