<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('homepage');
});

Route::get('/chi-siamo', function(){
    return view('pagina-1');
});

Route::get('/contatti', function(){
    return view('pagina-2');
});