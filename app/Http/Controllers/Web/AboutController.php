<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        $messages = [
            'location' => 'Nosostros',
            'greeting' => 'Conocenos un poco más'
        ];

        return view('about', compact('messages'));
    }
}
