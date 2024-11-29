<?php

use Illuminate\Support\Facades\Route;


///     Systema     ///////////////////////////////////////////////////////////////////////////////////////////////
Route::get('/', function () {       return view('index');   });     ///Ruta Index
Route::get('/index', function () {  return view('index');   });     ///Ruta Index
Route::get('/login',function () {   return view('login.login'); }); ///Ruta del login

///     MODULOS     ///////////////////////////////////////////////////////////////////////////////////////////////
///Seguridad
//Usuarios
Route::get('/table_usuarios',function () {              return view('Modulos.Seguridad.Usuarios.tabla_usuarios'); });
Route::get('/table_usuariosPendietes',function () {     return view('Modulos.Seguridad.Usuarios.tabla_usuariosPendientes'); });
Route::get('/form_agregarUsuario',function () {         return view('Modulos.Seguridad.Usuarios.form_agregarUsuarios'); });
//Seguridad
Route::get('/table_bitacora',function () {              return view('Modulos.Seguridad.Seguridad.tabla_bitacora'); });
Route::get('/table_parametros',function () {            return view('Modulos.Seguridad.Seguridad.tabla_parametros'); });
Route::get('/tabla_permisos',function () {              return view('Modulos.Seguridad.Seguridad.tabla_permisos'); });
Route::get('/tabla_rol',function () {                   return view('Modulos.Seguridad.Seguridad.tabla_rol'); });

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








///ejemplos
Route::get('/ejemplo_tabla',function () {   return view('ejemplos.tabla'); });
Route::get('/ejemplo_formulario',function () {   return view('ejemplos.formulario'); });
Route::get('/ejemplo_proceso',function () {   return view('ejemplos.proceso'); });

Route::get('/ukcjkuawjdkuakwd',function () {   return "hola mundo"; });
