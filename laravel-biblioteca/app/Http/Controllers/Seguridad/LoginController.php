<?php

namespace App\Http\Controllers\seguridad;

use Illuminate\Http\Request;

class LoginController
{
    public function Login(Request $request){

        //Data del formulario
        $DatoForm = $request->validate([
            'email' => 'required|string|max:50',
            'password' => 'required|string|max:50',
        ]);

        return $DatoForm['email'].' - '.$DatoForm['password'];
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
