<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Email;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;


class EmailController extends Controller
{
    public function sendEmailContact(Request $request){
         
          if($this->validate($request, [
               "name" => "required",
               "email" => "required",
               "subject" => "required",
               "phone" => "required",
               "message" => "required"
          ])){
       
               try{
                    Mail::to(env('MAIL_USERNAME'))
                    ->cc($request['email'])
                    ->send(new Email('emails.contact', $request));
               }catch(Exception $e){
                    return response()->json(['success'=>'false']);
               }    

              return response()->json(['success'=>'true']);

          }else{
               return response()->json(['success'=>'false']);
          }
    }
}

?>