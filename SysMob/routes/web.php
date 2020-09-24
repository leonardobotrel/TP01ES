<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastrar', 'Controller@cadastrar')->name('cadastro.index');

Route::get('/', function () {
    return view('welcome');
});
