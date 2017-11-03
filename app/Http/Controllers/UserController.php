<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;

class UserController extends Controller
{

    public function __construct () {
        $this->middleware('auth', ['except' => ['registro', 'procesar_solicitud_clave', 'crear_clave']]);
    }

    public function registro (Request $request) {



        return view ('usuarios.create');
    }

    public function procesar_solicitud_clave (Request $request) {
        /*
        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
        */
        Mail::send('email.solicitud_clave_electronica', [], function ($message) {
            $message->to('esteban.ramos@taisachile.cl', 'example_name')->subject('Welcome!');
        });
    }

    public function crear_clave (Request $request) {
        $email = $request->email;
        




        Mail::send('email.solicitud_clave_electronica', [], function ($message) {
            $message->to('esteban.ramos@taisachile.cl', 'example_name')->subject('Welcome!');
        });
    }

}
