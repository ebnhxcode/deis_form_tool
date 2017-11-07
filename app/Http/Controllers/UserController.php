<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\User;

class UserController extends Controller
{

    public function __construct () {
        $this->middleware('auth', ['except' => ['registro', 'procesar_solicitud_clave', 'crear_clave', 'enviar_llaves_secretas']]);
    }

    public function registro (Request $request) {



        return view ('usuarios.create');
    }

    public static function quickRandom ($length = 16) {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
    }

    public function enviar_llaves_secretas () {
        $users = User::all();
        foreach($users as $key => $user){

            if ($user->confirmado_llave_secreta != 'enviado' && $user->email != null) {
                $user->clave_electronica = $this->quickRandom(8);
                $user->confirmado_llave_secreta = 'enviado';
                $user->save();
                $email = $user->email;
		          $returnData = ['llave' => $user->clave_electronica, 'nombre' => $user->name];
                Mail::send('email.envio_clave_electronica', $returnData, function ($message) use ($email) {
                    $message->to(trim(str_replace(' ', '',$email)), 'Envio de llave para generar clave')->subject('Envio de Llave!');
                });

            }
        }
        echo 'Finalizado';
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

            /*
            return response()->json(['rd' => $user]);

            return response()->json([
               'email' => $email,
               'run' => $run,
               'clave_electronica' => $clave_electronica,
            ]);
            */

            if ($user) {
                return response()->json(['rd' => 'true']);
            }else{
                return response()->json(['rd' => 'false']);
            }
            #return $user;
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
