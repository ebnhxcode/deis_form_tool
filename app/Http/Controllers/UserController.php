<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{

    public function __construct () {
        $this->middleware('auth', ['except' => ['registro', 'procesar_solicitud_clave', 'crear_clave']]);
    }

    public function registro (Request $request) {



        return view ('usuarios.create');
    }

    public function procesar_solicitud_clave (Request $request) {

        if ($request->wantsJson()) {
            $run = isset($request->run)?$request->run:null;
            $email = isset($request->email)?$request->email:null;
            $clave_electronica = isset($request->clave_electronica)?$request->clave_electronica:null;
            if (!$run) {
                return response()->json(['error:001' => 'El campo run es requerido']);
            }
            if (!$email) {
                return response()->json(['error:002' => 'El campo email es requerido']);
            }
            if (!$clave_electronica) {
                return response()->json(['error:003' => 'La llave es requerida']);
            }
            $user = User::where('email', $email)
               ->where('rut', $run)
               ->where('clave_electronica', $clave_electronica)
               ->first();

            return $user;
        }
        /*
        Mail::send('emails.reminder', ['user' => $user], function ($m) use ($user) {
            $m->from('hello@app.com', 'Your Application');

            $m->to($user->email, $user->name)->subject('Your Reminder!');
        });
        Mail::send('email.solicitud_clave_electronica', [], function ($message) {
            $message->to('esteban.ramos@taisachile.cl', 'example_name')->subject('Welcome!');
        });
        */
    }

    public function crear_clave (Request $request) {
        $email = isset($request->email)?$request->email:null;
        $encrypted_password = isset($request->clave_real)?bcrypt($request->clave_real):null;
        if (!$email) {
            return response()->json(['error:001' => 'El campo email es requerido']);
        }
        if (!$encrypted_password) {
            return response()->json(['error:002' => 'El campo clave es requerido']);
        }

        $user = User::where('email', $email)->first();
        $user->password = $encrypted_password;
        $user->save();

        Mail::send('email.solicitud_clave_electronica', [], function ($message) use ($email) {
            $message->to($email, 'Cambio de Clave')->subject('Clave cambiada!');
        });
    }

}
