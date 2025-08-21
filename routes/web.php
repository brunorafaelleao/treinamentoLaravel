<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;

//importando o controlador de eventos
use App\Http\Controllers\EventController;


// rota para a página principal
Route::get('/', [EventController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

//Rota pra criar um evento
Route::get('/events/create', [EventController::class, 'create']);


//rota de teste para contatos
Route::get('/contatos', function () {
    return view('contatos');
});

// rota para a página de saúde da criança
Route::get('/crianca', function (): View {
    return view('criancas');
});

//rota para a página de saude do adolescente
Route::get('/adolescente', function (): View {
    return view('adolescentes');
});