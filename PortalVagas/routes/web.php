<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


// Rota para exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->
name('usuarios.login');


// Rota para processar o login
Route::post('/login', [UsuarioController::class, 'login'])->
name('usuarios.login');


// Rota para exibir o formulário de registro
Route::get('/registro', [UsuarioController::class, 'showRegistroForm'])->
name('usuarios.registro');


// Rota para processar o registro
Route::post('/registro', [UsuarioController::class, 'registro'])->
name('usuarios.registro');

// Rota para logout
Route::post('/logout', [UsuarioController::class, 'logout'])->
name('usuarios.logout');


// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');


Route::get('/', function () {
    return view('Home');
});

Route::get('/registro', function () {
    return view('usuarios.registro');
});
