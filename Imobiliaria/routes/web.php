<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastrar', 'Admin\ImoveisController@cadastrar');
Route::get('/visualizar', 'Admin\ImoveisController@visualizar');
Route::get('/', function () {
    return view('welcome');
});
