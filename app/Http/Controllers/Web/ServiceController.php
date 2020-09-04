<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Service;

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

    public function show_all_services()
    {
        $services = Service::select('id', 'name', 'short_description')->paginate(8);

        return [
            'services' => $services,
            'paginate' => [
                'total'         => $services->total(),
                'current_page'  => $services->currentPage(),
                'per_page'      => $services->perPage(),
                'last_page'     => $services->lastPage(),
                'from'          => $services->firstItem(),
                'to'            => $services->lastPage(),
            ]
        ];
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
