<?php

use App\Http\Controllers\ProdutoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/contatos', function () {
    return view('Contatos'); /* Nome da pagina view*/
});

 
// Route::get('/produtos', function () {
//     return view('Produtos'); /* Nome da pagina view */
// });
 
//Rota para listar todos os produtos
Route::get('/produtos', [ProdutoController::class, 'index']); //Função index no meu produto controller sua função listar
