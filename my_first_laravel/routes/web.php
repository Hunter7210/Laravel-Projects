<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/contatos', function () {
    return view('Contatos'); /* Nome da pagina view*/
});


Route::get('/produtos', function () {
    return view('Produtos'); /* Nome da pagina view */
});
