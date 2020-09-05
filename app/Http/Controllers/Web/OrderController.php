<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace App\Http\Controllers;
//
//use Illuminate\Http\Request;
//use App\Order;
//use App\Mail\EmailOrderProduct;
//use App\Mail\EmailOrderService;
//use Mail, Validator,DB;
//use App\Mail\EmailConfirmProduct;
//use App\Mail\EmailConfirmService;   
//use App\Product;
//use App\Service;
//use App\Company;

class OrderController extends Controller
{
    //public function store_service(Request $request){
    //    $data_company = Company::data_company();
    //    $email_company = $data_company->email;
    //    //$email_company = 'jorgealvarobarreravasquez@gmail.com';
//
    //    $prod_id = $request->get('ser_id');
    //    $cli_name = $request->get('name');
    //    $phone = $request->get('phone');
    //    $message =$request->get('message');
    //    $email = $request->get('email');
    //    $company = $request->get('company');
    //    $input  = [
    //        'prod_id' => $prod_id,
    //        'cli_name' => $cli_name,
    //        'email' => $email,
    //        'message' => $message,
    //        'phone' => $phone,
//
    //    ];
    //    $reglas = [
    //        'prod_id'=> 'required',
    //        //quantity especificar o no cantidad
    //        'cli_name' => 'required|max:150',
    //        'email' => 'email|max:80',
    //        'message' => 'required|max:300',
    //        'phone' => 'required|digits_between:9,14',
    //    ];
    //    $validacion = Validator::make($input, $reglas);
    //    
    //    if ($validacion->fails()){
    //        $response = ['status'=>'fail'];
    //    }else{
    //        $search_service = Service::select('services.name as ser_nam')->from('services')
    //        ->where('services.id',$prod_id)->first();
//
    //        $service_name = $search_service->ser_nam;
//
    //        $client['name'] = $cli_name;
    //        $client['email'] = $email;
    //        $client['phone'] = $phone;
    //        $client['company'] = $company;
    //        $client['msg'] = $message;
    //        $product['name'] = $service_name;
//
    //        
    //                try {
    //                    DB::beginTransaction();
    //                    $service['name'] = $service_name;
    //                    $new_order = new Order();
    //                    $new_order->service_id = $prod_id;
    //                    //$new_order->quantity = $quantity;
    //                    $new_order->name = $cli_name;
    //                    $new_order->phone = $phone;
    //                    $new_order->email = $email;
    //                    $new_order->company = $company;
    //                    $new_order->save();
    //                    //CONFIRMACIÓN AL CLIENTE
    //                    $confirm_service = new EmailConfirmService($service);
    //                    Mail::to($email)->send($confirm_service); 
    //                    //ENVÍO A LA EMPRESA 
    //                    $order_product = new EmailOrderService($client, $product);
    //                    Mail::to($email_company)->send($order_product); 
    //                    $response = ['status'=>'success'];
    //                    DB::commit();
    //                }catch(\Exception $e) {
    //                    DB::rollback();
    //                    $response = ['status'=>'fail'];
    //                }
    //    }
//
    //    return $response; 
    //    
    //}
}
