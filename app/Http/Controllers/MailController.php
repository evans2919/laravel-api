<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    //ENVIAMOS CORREO CON MENSAJE BÁSICO

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

    //ENVIAMOS CORREO CON DATOS

    public function EnviarConDatos() {
        $data = ['titulo' => 'Bienvenidos a mi API',
                'mensaje' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',];

        Mail::send('mails.testing', $data, function($body) use ($data){
  
            $body->to('info@gl-commerce.com', 'Global Coommere')
            ->subject('Nuevos cursos '.$data['titulo']);
            $body->from('info@gl-commerce.com', 'Global Commerce');

        });

        return response()->json([
            'response' => 'Se envió correctamente el correo',
            'code' => '200',
        ]);

     
    }

    //ENVIAMOS CORREO CON PLANTILLA
    
    public function EnviarPlantilla() {
        $data = ['titulo' => 'Bienvenidos a mi API',
                'mensaje' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',];

        Mail::send('mails.template', $data, function($body) use ($data){
  
            $body->to('info@gl-commerce.com', 'Global Coommere')
            ->subject('Nuevos cursos '.$data['titulo']);
            $body->from('info@gl-commerce.com', 'Global Commerce');

        });

        return response()->json([
            'response' => 'Se envió correctamente el correo',
            'code' => '200',
        ]);

     
    }
}
