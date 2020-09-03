<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{
    public function index()
    {
        $messages = [
            'location' => 'Servicios',
            'greeting' => 'Nuestros Servicios'
        ];
        
        return view('service', compact('messages'));
    }

    public function show_service()
    {
        $messages = [
            'location' => 'Servicios',
            'greeting' => 'Detalle del Servicio'
        ];

        return view('service-detail', compact('messages'));
    }
}
