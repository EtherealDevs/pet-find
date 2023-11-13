<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendemail(Request $request){
        $name = $request->input('name');
        $subject = $request->input('subject');
        $email = $request->input('email');
        $message = $request->input('message');
        $for = 'joaccofranc02@icloud.com';

        Mail::send('correo.email', $request->all(), function($msg) use($subject,$message,$name,$email,$for){
            $msg->from($email,$name);
            $msg->subject($subject);
            $msg->text($message);
            $msg->to($for);
        });
        return view('home.index');
    }

        

}
    /*  
    public function enviodecorreo(Request $request){

        $para = 'Nosotros@gmail.com';

        Mail::send('email.correo',$request->all(), function($msj) use($asunto,$nombre,$email,$para){
            $msj->from($email,$nombre);
            $msj->subject($asunto);
            $msj->to($para);
        });
        return view('welcome');

    }
    */