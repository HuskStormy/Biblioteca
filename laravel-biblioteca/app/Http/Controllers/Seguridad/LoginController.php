<?php

namespace App\Http\Controllers\seguridad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class LoginController
{
    public function Accion_Login(Request $request){

        //Data del formulario
        $DatoForm = $request->validate([
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        //Extraer datos de api
        $url = 'http://localhost:3000/usuario/correo/'.$DatoForm['email'];
        $DataEntidad = json_decode(Http::get($url), true);

        //existe el dato buscado?
        if ($DataEntidad == [null])
            return "no existe";


        //si los datos conididen
        $Verificar_Correo = $DataEntidad['CORREO_ELECTRONICO'] == $DatoForm['email'];
        $Verificar_Contra = $DataEntidad['CONTRASENA'] == $DatoForm['password'];
        $Verificar_Estado = $DataEntidad['ESTADO_USUARIO'] == "activo";

        if ($Verificar_Correo * $Verificar_Contra * $Verificar_Estado){       
            
            Session::put('user_id',     $DataEntidad['ID_USUARIO']);
            Session::put('user_nombre', $DataEntidad['NOMBRE_USUARIO']);
            Session::put('user_Correo', $DataEntidad['CORREO_ELECTRONICO']);
            Session::put('user_Rol',    $DataEntidad['ROL_USUARIO']);
            Session::put('Session',     1);
            return redirect('/');



            // Eliminar los datos del usuario de la sesión
            // Session::flush();  // Borra toda la sesión
            // o si solo quieres eliminar ciertos datos:
            // Session::forget('user_id');
            // Session::forget('user_name');
            // Session::forget('user_email');
        }


        // no coniside el correo ni la contrase;a devolverse a la pagina
        return redirect()->back();

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

        return $DatoForm['name'].' - '.$DatoForm['DNI'].' - '.$DatoForm['email'].' - '.$DatoForm['password'].' - '.$DatoForm['password_r'];
    }

    public function Accion_Logout(){
        Session::flush();   ///borra todo los datos de una seccion
        return redirect('/login');
    }

    public function get_Login(){
        if (Session::has('Session') != true){
            return view('login.login');
        }
        return view('login.login');
    }

    public function get_index(){
        /*
            // Verificar si la sesión está establecida
        if (!session()->has('Session')) {
            return redirect('/login');
        } else {
            $url = 'http://localhost:3000/usuario/correo/' . session('user_Correo');
            $DataEntidad = json_decode(Http::get($url), true);

            // Validar que la respuesta sea válida
            if ($DataEntidad === null) {
                return redirect('/login')->withErrors(['error' => 'Error al obtener los datos del usuario']);
            }

            // Guardar los datos en la sesión
            session()->put('user_nombre', $DataEntidad['NOMBRE_USUARIO']);
            session()->put('user_Correo', $DataEntidad['CORREO_ELECTRONICO']);
            session()->put('user_Rol', $DataEntidad['ROL_USUARIO']);
            session()->put('Session', 1);
        }
*/
        // Retornar la vista
        return view('index');
    }
}