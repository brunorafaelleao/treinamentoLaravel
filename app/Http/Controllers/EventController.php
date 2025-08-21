<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //função para o index
    public function index()
    {
        return view('welcome');
    }


    //função para criar um evento
    public function create()
    {
        return view('events.create');
    }
}
