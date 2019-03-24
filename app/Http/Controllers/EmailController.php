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
               "message" => "required"
          ])){

               Mail::to(env('MAIL_USERNAME'))
                    ->cc(env('MAIL_CC_USERNAME'))
                    ->send(new Email('emails.contact', $request));

               return redirect()->action('IndexController@contact');

          }else{
               return redirect()->action('IndexController@index');
          }
    }
}

?>