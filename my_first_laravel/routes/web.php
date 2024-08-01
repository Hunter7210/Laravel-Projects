<?php

use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('HelloWorld'); /* Nome da pagina view*/
}); 


Route::get('/test', function() {
    return view('test'); /* Nome da pagina view */
});