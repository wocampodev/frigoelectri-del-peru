<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        $messages = [
            'location' => 'Contacto',
            'greeting' => 'Te asesoramos gratis!'
        ];

        return view('contact', compact('messages'));
    }
}
