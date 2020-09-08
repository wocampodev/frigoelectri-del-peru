<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
use App\Mail\EmailOrderService;
use Mail, Validator,DB;
use App\Mail\EmailConfirmService;
use App\Service;
use App\Company;
use Carbon\Carbon;

class OrderController extends Controller
{
    public function new_order(Request $request){

        $service_id = $request->service;
        $client_name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $date = $request->date;
        $message =$request->message;

        $input  = [
            'service_id' => $service_id,
            'client_name' => $client_name,
            'email' => $email,
            'phone' => $phone,
            'date' => $date,
            'message' => $message,

        ];
        $reglas = [
            'service_id'=> 'required',
            'client_name' => 'required|max:150',
            'email' => 'email|max:80',
            'phone' => 'required|digits_between:9,14',
            'date' => 'date',
            'message' => 'required|max:300',
        ];

        $validation = Validator::make($input, $reglas);
        
        if ($validation->fails()){
            $response = ['status'=>'fail-validate', 'errors' => $validation->errors()];
        }else{

            //$data_company = Company::data_company();
            //$email_company = $data_company->email;
            $email_company = 'fearless347@gmail.com';
            $search_service = Service::select('name')->where('id', $service_id)->first();

            $service_name = $search_service->name;

            $client['name'] = $client_name;
            $client['email'] = $email;
            $client['phone'] = $phone;
            $client['date'] = $date;
            $client['msg'] = $message;
            $service['name'] = $service_name;
            
            $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
            $fecha = Carbon::parse($client['date']);
            $mes = $meses[($fecha->format('n')) - 1];
            $client['date'] = $fecha->format('d') . ' de ' . $mes . ' de ' . $fecha->format('Y');
            
            
            try {
                DB::beginTransaction();
                $service['name'] = $service_name;
                $new_order = new Order();
                $new_order->service_id = $service_id;
                $new_order->name = $client_name;
                $new_order->phone = $phone;
                $new_order->email = $email;
                $new_order->date = $date;
                $new_order->message = $message;
                $new_order->save();

                //CONFIRMACIÓN AL CLIENTE
                $confirm_service = new EmailConfirmService($service);
                Mail::to($email)->send($confirm_service); 

                //ENVÍO A LA EMPRESA 
                $order_service = new EmailOrderService($client, $service);
                Mail::to($email_company)->send($order_service);

                $response = ['status'=>'success'];
                
                DB::commit();
            }catch(\Exception $e) {
                dd($e);
                DB::rollback();
                $response = ['status'=>'fail-send'];
            }
        }

        return $response; 
        
    }
}
