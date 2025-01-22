<?php

namespace App\Http\Controllers\seguridad;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController
{
    public function Login(Request $request){

        //Data del formulario
        $DatoForm = $request->validate([
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        $url = 'http://localhost:3000/usuario/2';
        $DataEntidad = json_decode(Http::get($url), true);  // Decodificamos la respuesta como un array
        if ($DataEntidad['CORREO_ELECTRONICO'] == $DatoForm['email'] && $DataEntidad['CONTRASENA'] == $DatoForm['password']){
            return "son iguales";
        }
        return "Error";

    }

    public function Registrarse(Request $request){

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
}