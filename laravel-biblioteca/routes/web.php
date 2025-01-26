<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

use App\Http\Middleware;
use App\Http\Controllers\seguridad\LoginController;

///     Systema     ///////////////////////////////////////////////////////////////////////////////////////////////





Route::get('/perfil',function () {  return view('login.perfil'); });



Route::get('/',     function () {       return redirect('/index');   })->middleware('middleware_dash');          ///Ruta Index
Route::get('/index',            [LoginController::class, 'ruta_index'])->middleware('middleware_dash');            //Ruta Index

Route::get('/Validacion/{token}',  [LoginController::class, 'ruta_Verificacion'])->name('verificacion.Link'); ///Ruta del login
Route::get('/login',            [LoginController::class, 'ruta_login']);            ///Ruta del login
Route::post('/login/ingresar',  [LoginController::class, 'Accion_Login']);          //form_login_ingresar
Route::post('/login/Registrar', [LoginController::class, 'Accion_Registrarses']);    //form_login_registrase
Route::get('/login/Logout',     [LoginController::class, 'Accion_Logout']);         //form_login_deslogiarse


//Route::get('/login',     [LoginController::class, 'get_']);        //form_login_deslogiarse


Route::get('/restore',function () {   return view('login.restore'); }); ///Ruta del login
Route::get('/backup',function () {   return view('login.backup'); }); ///Ruta del login

///     MODULOS     ///////////////////////////////////////////////////////////////////////////////////////////////
///Seguridad
//Usuarios
Route::get('/table_usuarios',function () {              return view('Modulos.Seguridad.Usuarios.tabla_usuarios'); })->middleware('middleware_dash');
Route::get('/table_usuariosPendietes',function () {     return view('Modulos.Seguridad.Usuarios.tabla_usuariosPendientes'); })->middleware('middleware_dash');
Route::get('/form_agregarUsuario',function () {         return view('Modulos.Seguridad.Usuarios.form_agregarUsuarios'); })->middleware('middleware_dash');
//Seguridad
Route::get('/table_bitacora',function () {              return view('Modulos.Seguridad.Seguridad.tabla_bitacora'); });
Route::get('/table_parametros',function () {            return view('Modulos.Seguridad.Seguridad.tabla_parametros'); });
Route::get('/tabla_permisos',function () {              return view('Modulos.Seguridad.Seguridad.tabla_permisos'); });
Route::get('/tabla_rol',function () {                   return view('Modulos.Seguridad.Seguridad.tabla_rol'); });
Route::get('/tabla_objeto',function () {                return view('Modulos.Seguridad.Seguridad.tabla_objeto'); });

///inventario
//Material
Route::get('/table_material',function () {              return view('Modulos.Inventario.Material.tabla_material'); });
Route::get('/table_audiovideo',function () {            return view('Modulos.Inventario.Material.tabla_audiovideo'); });
Route::get('/form_agregarMateria',function () {         return view('Modulos.Inventario.Material.form_agregarMaterial'); });
Route::get('/form_agregarAudiovideo',function () {      return view('Modulos.Inventario.Material.form_agregarAudiovideo'); });
//sistemas de ordenamiento
Route::get('/table_dewey',function () {                 return view('Modulos.Inventario.Sistema de ordenamiento.tabla_dewey'); });
Route::get('/table_autores',function () {               return view('Modulos.Inventario.Sistema de ordenamiento.tabla_autores'); });
Route::get('/table_cursos',function () {                return view('Modulos.Inventario.Sistema de ordenamiento.tabla_cursos'); });
//destacado
Route::get('/table_destacado',function () {             return view('Modulos.Inventario.destacado.tabla_destacado'); });
Route::get('/form_agregarDestacado',function () {       return view('Modulos.Inventario.destacado.form_agregarDestacado'); });
//repocitorio
Route::get('/table_repocitorioMaterial',function () {   return view('Modulos.Inventario.repocitorio.tabla_repocitorioMaterial'); });
Route::get('/table_repocitorioAudiovideo',function () { return view('Modulos.Inventario.repocitorio.tabla_repocitorioAudiovideo'); });


///Gestiones y precesos
//Solvecias
Route::get('/table_solvencia',function () {             return view('Modulos.Procesos.Solvencias.tabla_solvencias'); });
Route::get('/proc_agregarSolvecia',function () {        return view('Modulos.Procesos.Solvencias.proc_agregarSolvencia'); });
//Prestamo
Route::get('/table_prestamo',function () {              return view('Modulos.Procesos.Prestamos.tabla_Prestamo'); });
Route::get('/proc_solicitarPrestamo',function () {      return view('Modulos.Procesos.Prestamos.proc_solicitudPrestamo'); });
//ficha
Route::get('/table_ficha',function () {                 return view('Modulos.Procesos.Ficha de ingreso.tabla_ficha'); });
Route::get('/proc_agregarFicha',function () {           return view('Modulos.Procesos.Ficha de ingreso.proc_agregarFicha'); });
//centroReginal
Route::get('/table_CentroRegional',function () {        return view('Modulos.Procesos.Centro Regional.tabla_centroRegional'); });
Route::get('/proc_agregarCentroRegional',function () {  return view('Modulos.Procesos.Centro Regional.proc_agregarCentroRegional'); });

Route::get('/mnt-seguridad',function () {  return view('Modulos.matenimiento.mtn-seguridad'); });
Route::get('/mnt-inv',function () {  return view('Modulos.matenimiento.mtn-inventario'); });
Route::get('/mnt-ProcGest',function () {  return view('Modulos.matenimiento.mtn-ProcGest'); });


///pdfs
Route::get('/pdf-usuarios', function () { $pdf = PDF::loadView('PDFs.pdf_usuarios'); return $pdf->stream('usuarios.pdf'); });
Route::get('/pdf-bitacora', function () { $pdf = PDF::loadView('PDFs.pdf_bitacora'); return $pdf->stream('bitacora.pdf'); });
Route::get('/pdf-Parametros', function () { $pdf = PDF::loadView('PDFs.pdf_parametro'); return $pdf->stream('parametros.pdf'); });
Route::get('/pdf-permisos', function () { $pdf = PDF::loadView('PDFs.pdf_permisos'); return $pdf->stream('permisos.pdf'); });
Route::get('/pdf-objeto', function () { $pdf = PDF::loadView('PDFs.pdf_permisos'); return $pdf->download('objeto.pdf'); });


Route::get('/pdf-solvencias', function () { $pdf = PDF::loadView('PDFs.pdf_solvencia'); return $pdf->stream('solvencia.pdf'); });
Route::get('/pdf-prestamos', function () { if (!session()->has('Session')) {return redirect('/login');}  $pdf = PDF::loadView('PDFs.pdf_prestamo'); return $pdf->stream('prestamo.pdf'); });



///ejemplos
Route::get('/ejemplo_tabla',function () {   return view('ejemplos.tabla'); });
Route::get('/ejemplo_formulario',function () {   return view('ejemplos.formulario'); });
Route::get('/ejemplo_proceso',function () {   return view('ejemplos.proceso'); });

Route::get('/ukcjkuawjdkuakwd',function () {   return "hola mundo"; });



Route::get('/pdfprueba', function () {
    $pdf = PDF::loadView('PDFs.pdf_usuarios');      ///la vista .blade.php
    return $pdf->stream('hola.pdf');                ///ver el pdf
    //return $pdf->download('hola.pdf');            ///descargar el pdf ....... por mientras este no lo usaremos
});
