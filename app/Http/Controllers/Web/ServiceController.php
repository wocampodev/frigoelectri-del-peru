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

        $services = Service::select('slug', 'name', 'short_description')->paginate(6);
        
        return view('service', compact('messages', 'services'));
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

    public function show_service(Request $request)
    {
        $service = Service::where('slug', $request->slug)->firstOrFail();
        $services_random = Service::inRandomOrder()->limit(8)->get();
        $messages = [
            'location' => 'Servicios',
            'greeting' => $service->name
        ];

        return view('service-detail', compact('messages', 'service', 'services_random'));
    }

    public function search_service(Request $request)
    {
        $term = $request->term;
        //dd($term);
        $data = Service::where('name', 'LIKE' ,'%'.$term.'%')->get();

        $services = [];

        foreach ($data as $item) {
            $services[] = ['label' => $item->name, 'slug' => $item->slug];
        }

        return $services;
    }
}
