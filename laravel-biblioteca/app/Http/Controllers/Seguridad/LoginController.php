<?php

namespace App\Http\Controllers\seguridad;

use App\Http\Controllers\AutenticController;
use App\Mail\TestMail;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;



class LoginController
{
    public function Accion_Login(Request $request){

        //Data del formulario
        $DatoForm = $request->validate([
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        //Extraer datos de api
        $DataEntidad = json_decode(Http::get(config('global.Api.usuario_correo').$DatoForm['email']), true);
        //existe el dato buscado?
        if ($DataEntidad == [null]){
            session(['mensaje' => 'Acceso inválido. Por favor, inténtelo otra vez.']);
            return redirect('/login');
        }
        if ($DataEntidad['ESTADO_USUARIO'] == json_decode(Http::get(config('global.Api.usuarioEstado_id').'2'),true)['DESCRIPCION']){ //2:bloqueado
            session(['mensaje' => 'Usuario Bloqueado']);
            return redirect('/login');
        }
        $Verificar_Contra = $DataEntidad['CONTRASENA'] == $DatoForm['password'];//Hash::check($DatoForm['password'], '$2y$10$hQ1m.3mnBqdKBH845.Y.8ua.3JJeOzDWd0WRiKsbktF'); 

        /// si la contrase;a no es valida
        if (!$Verificar_Contra){
            if ($DataEntidad['INTENTOS'] <= 1){
                Http::put(config('global.Api.usuario_Estado_bloqueado'), ['p0'=>$DataEntidad['ID_USUARIO']]);
                session(['mensaje' => 'Usuario Bloqueado']);
                return redirect('/login');
            }else{
                //$parametro = json_decode(Http::get(config('global.Api.parametro_id').'1'), true);
                Http::put(config('global.Api.usuario_intento_Menos'), ['p0'=>$DataEntidad['ID_USUARIO']]);
                session(['mensaje' => 'Acceso inválido. Por favor, inténtelo otra vez.']);
                return redirect('/login');
            }
        }

        

        // Si todo es correcto
        ///restablese los intentos
        Http::put(config('global.Api.usuario_intento_Restableser'), ['p0'=>$DataEntidad['ID_USUARIO']]);
        
        //dd($DataEntidad['ESTADO_USUARIO'], json_decode(Http::get(config('global.Api.usuarioEstado_id').'3'),true)['DESCRIPCION'] );
        //obtener datos para la session
        if ($DataEntidad['ESTADO_USUARIO'] == json_decode(Http::get(config('global.Api.usuarioEstado_id').'1'),true)['DESCRIPCION'] ){  //1: Activar
            Session::put('user_id',     $DataEntidad['ID_USUARIO']);
            Session::put('user_nombre', $DataEntidad['NOMBRE_USUARIO']);
            Session::put('user_Correo', $DataEntidad['CORREO_ELECTRONICO']);
            Session::put('user_Rol',    $DataEntidad['ROL_USUARIO']);
            Session::put('Session',     1);
            
            return redirect('/');
        }else if ($DataEntidad['ESTADO_USUARIO'] == json_decode(Http::get(config('global.Api.usuarioEstado_id').'3'),true)['DESCRIPCION'] ){ //3: primera vez
            return redirect('/url_para la primera vez');
        }


    }

    public function Accion_Registrarse(Request $request){

        //Data del formulario
        $DatoForm = $request->validate([
            'name' => 'required|string|max:50',
            'DNI' => 'required|string|max:15',
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
            'password_r' => 'required|string|max:50',
        ]);

        /// si los input de las contrase;as no son iguales entonces devolverse al login
        if ($DatoForm['password'] != $DatoForm['password_r']) return redirect()->back();

        $hashedPassword = $DatoForm['password'];//Hash::make($DatoForm['password']);
        $parametro_Intentos = json_decode(Http::get(config('global.Api.parametro_id').'1'), true);
        $parametro_DiasVenc = json_decode(Http::get(config('global.Api.parametro_id').'3'), true);
        $Codigo_Ingreso = Str::random(20);
        Mail::to($DatoForm['email'])->send(new TestMail($Codigo_Ingreso));







        $DataEntidad = Http::post(config('global.Api.usuario_add'), [
            "p0" => json_decode(Http::get(config('global.Api.usuarioEstado_id').'4'),true)['DESCRIPCION'],                  // estado usuario 3:usuario nuevo
            "p1" => 1,                  // rol
            "p2" => 1,                  // centroReginal
            "p3" => $DatoForm['name'],  // Nombre Usuario
            "p4" => $hashedPassword,    // contrasena
            "p5" => $DatoForm['email'], // correo electrónico
            "p6" => $DatoForm['DNI'],   // DNI
            "p7" => Carbon::today(),    // fecha_conexion_ultima
            "p8" => $Codigo_Ingreso,    // cod primer ingreso
            "p9" => Carbon::today()->addDays($parametro_DiasVenc['VALOR']),          // fecha_vencimiento
            "p10"=> intval($parametro_Intentos['VALOR'])    
        ]);
        
        return redirect('/');
        //return $DatoForm['name'].' - '.$DatoForm['DNI'].' - '.$DatoForm['email'].' - '.$DatoForm['password'].' - '.$DatoForm['password_r'];
    }

    public function Accion_Logout(){
        Session::flush();   ///borra todo los datos de una seccion
        return redirect('/login');
    }

    public function ruta_index(){
        $redirect = AutenticController::autenticacion();
        if ($redirect) return $redirect;

        return view('index');
    }

    public function ruta_login(){
            return view('login.login');
    }

    public function Get_Mail(){
        Mail::to('catstormy9@gmail.com')->send(new TestMail("hola"));
    }

}