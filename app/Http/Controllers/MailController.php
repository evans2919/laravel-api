<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function EnviarBasico() {
        $data = ['mensaje' => 'Bienvenidos a mi API'];

        Mail::send([], $data, function($body){
            //cuerpo del envío del correo electrónico
            // to - para quien
            // FROM - desde donde
            $body->to('info@gl-commerce.com', 'Global Coommere')->subject('Laravel');
            $body->from('info@gl-commerce.com', 'Global Commerce');

        });

        return response()->json([
            'response' => 'Se envió correctamente el correo',
            'code' => '200',
        ]);

     
    }
}
