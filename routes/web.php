<?php

use Illuminate\Support\Facades\Route;
use Illuminate\View\View;


// rota para a página principal
Route::get('/', function () {
    return view('welcome');
});

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