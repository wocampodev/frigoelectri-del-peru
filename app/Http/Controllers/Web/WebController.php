<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Service;
use App\Client;
use App\Http\Controllers\Controller;

class WebController extends Controller
{
    public function show_view_home()
    {
        $services = Service::select('name', 'slug', 'short_description')->get()->take(4);
        $clients = Client::select('id', 'name', 'image')->get()->take(6);
        return view('home', compact('services', 'clients'));
    }

    public function show_view_about()
    {
        $messages = [
            'location' => 'Nosotros',
            'greeting' => 'Conocenos más!'
        ];
        return view('about', compact('messages'));
    }

    public function show_view_contact()
    {
        $messages = [
            'location' => 'Contacto',
            'greeting' => 'Te asesoramos gratis!'
        ];
        return view('contact', compact('messages'));
    }
}
