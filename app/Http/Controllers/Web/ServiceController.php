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

    public function show_all_services(Request $request)
    {
        $services = Service::select('slug', 'name', 'short_description')/* ->orderBy('id', 'DESC') */->paginate(6);

        //$all = Service::select('*')->get();

        return [
            //'all' => $all,
            'services' => $services,
            'pagination' => [
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
