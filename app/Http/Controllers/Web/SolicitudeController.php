<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//namespace App\Http\Controllers;
//use App\Solicitude;
//use App\Company;
//use Validator, Mail;
//use App\Mail\EmailQueryCompany;
//use App\Mail\EmailQueryClient;
//use DB;
//use Illuminate\Http\Request;

class SolicitudeController extends Controller
{
    //public function store(Request $request){
    //    $name = $request->get('name');
    //    $email = $request->get('email');
    //    $message = $request->get('message');
    //    $phone =  $request->get('phone');
    //    $company = $request->get('company');
//
    //    $input  = [
    //        'name' => $name,
    //        'email' => $email,
    //        'message' => $message,
    //        'phone' => $phone,
    //    ];
    //    $reglas = [
    //        'name' => 'required|max:80',
    //        'email' => 'email|max:80',
    //        'message' => 'required|max:300',
    //        'phone' => 'required|digits_between:9,14',
    //    ];
//
    //    $validacion = Validator::make($input, $reglas);
    //    
    //    if ($validacion->fails()){
    //        $response = ['status'=>'fail'];
    //        return $response;
    //    }
//
    //    $data_company = Company::data_company();
    //    $email_company = $data_company->email;
    //    //$email_company = 'jorgealvarobarreravasquez@gmail.com';
    //    $client['name'] = $name;
    //    $client['email'] = $email;
    //    $client['phone'] = $phone;
    //    $client['company'] = $company;
//
    //    $client['description'] = $message;
//
    //    try {
    //        DB::beginTransaction(); 
    //        $new_solicitude = new Solicitude();
    //        $new_solicitude->name = $name;
    //        $new_solicitude->email = $email;
    //        $new_solicitude->message = $message;
    //        $new_solicitude->phone = $phone;
//
    //        $new_solicitude->save();
//
    //        //$details = ['name'=>$name,'email'=>$email,'msg'=>$message,'phone'=>$phone];
    //        $confirm_solicitude = new EmailQueryCompany($client);
    //            Mail::to($email_company)->send($confirm_solicitude); 
    //            
    //        $confirm_client = new EmailQueryClient($client);
    //            Mail::to($email)->send($confirm_client); 
    //        $response = ['status'=>'success'];
    //        DB::commit();
    //    }catch(\Exception $e) {
    //        dd($e);
    //        DB::rollback();
    //        $response = ['status'=>'fail'];
    //    }
    //    
    //    return $response;
    //}
}
