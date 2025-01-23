<?php

if (!function_exists('autenticacion')) {
    function autenticacion() {
        // Verifica si la sesión tiene una clave 'Session'
        if (!session()->has('Session')) {
            // Redirige al login si no está autenticado
            return redirect('/login');
        }
    }
}
