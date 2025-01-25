<?php

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

if (!function_exists('autenticacion')) {
    function autenticacion() {
        // Verificar si la sesión existe
        if (!Session::has('Session')) {
            // Redirigir si no hay sesión
            return Redirect::to('/holaa');
        }
        
        // Si la sesión está activa, puedes retornar algo o nada
        // por ahora retornamos null si todo está bien
        return null;
    }
}
