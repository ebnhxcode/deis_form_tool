<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#Route::get('/', function () {return view('welcome');});

Route::auth();



Route::get('/formulario/testapi', 'FormDeisController@testapi');

Route::post ('/formulario/buscar_por_rut' , 'FormDeisController@buscar_por_rut') ;
Route::get ('/formulario/datos_formulario' , 'FormDeisController@datos_formulario') ;
Route::get ('/formulario/inputs_formulario' , 'FormDeisController@inputs_formulario') ;

Route::get ('/formulario/transmision_vertical' , 'FormDeisController@create') ;
Route::get ('/formulario/create' , 'FormDeisController@create') ;
Route::get ('/formulario/new' , 'FormDeisController@create') ;
Route::get ('/formulario/' , 'FormDeisController@create') ;
Route::get ('/plataforma/' , 'FormDeisController@create') ;
Route::get ('/plataforma' , 'FormDeisController@create') ;
Route::get ('/deis' , 'FormDeisController@create') ;
Route::get ('/home' , 'FormDeisController@create') ;
Route::get ('/' , 'FormDeisController@create') ;

Route::resource ('/formulario' , 'FormDeisController') ;

Route::post ('/input/add/label' , 'InputController@addLabelToInput') ;
Route::resource ('/input' , 'InputController') ;

Route::get ('/home', 'HomeController@index') ;
