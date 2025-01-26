<?php
return [
    'Api' => [
        'usuario'       => 'http://localhost:3000/usuario',
        'usuario_id'    => 'http://localhost:3000/usuario/',
        'usuario_correo'=> 'http://localhost:3000/usuario/correo/',
        'usuario_add'   => 'http://localhost:3000/usuario/add',
        'usuario_modify'=> 'http://localhost:3000/usuario/modify',
        'usuario_Tcd'=> 'http://localhost:3000/usuario/t/',
        'usuVerific'=> 'http://localhost:3000/usuario/verific',
        
        'usuario_intento_Menos' => 'http://localhost:3000/persona/Intento/menos',
        'usuario_intento_Restableser' => 'http://localhost:3000/persona/Intento/Restableser',
        'usuario_Estado_bloqueado' => 'http://localhost:3000/persona/Estado/Bloqueado',
        'usuarioEstado_id' => 'http://localhost:3000/estado/',
        'parametro_id'  => 'http://localhost:3000/parametro/'
        ],
    'variables' =>[
        'token_time_min' => 30,
        'token_lenght'   => 60,
        ],
    'Mensaje_texto'=>[
        'Usuario_bloqueado' => [
            'mensaje' => 'Usuario Bloqueado',
            'tipo' => 'danger'
        ],
        'Usuario_noAsseso' => [
            'mensaje' => 'Acceso inválido. Por favor, inténtelo otra vez.',
            'tipo' => 'danger'
        ],
        'Usuario_resgistrado' => [
            'mensaje' => 'se registro con exito su correo electronico, porfavor revisa tu bandeja de entrada',
            'tipo' => 'success'
        ],
        'link_caducado' => [
            'mensaje' => 'El enlace ha caducado o es inválido.',
            'tipo' => 'danger'
        ],
        'link_verificar' => [
            'mensaje' => 'Se logro verificar su usuario.',
            'tipo' => 'success'
        ],
        'no_autentificado' => [
            'mensaje' => 'inicia secion, primero antes de usar la plataforma',
            'tipo' => 'warning'
        ],
    ]
    
];