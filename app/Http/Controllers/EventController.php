<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    //função para o index
    public function index()
    {

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }


    //função para criar um evento
    public function create()
    {
        return view('events.create');
    }

    //função para salvar um evento
    public function store(Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/');

    }
}
