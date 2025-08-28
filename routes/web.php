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


//Rota para postar um evento
Route::post('/events', [EventController::class, 'store']);