<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/inicio/{id}','ExampleThreeController@index');
Route::get('/','ExampleTwoController@inicio');
Route::get('/TESTIMONIOS','ExampleTwoController@TESTIMONIOS');
Route::get('/NOSOTROS','ExampleTwoController@NOSOTROS');
Route::get('/SERVICIOS','ExampleTwoController@SERVICIOS');
Route::get('/TRABAJOS','ExampleTwoController@TRABAJOS');
Route::get('/CONTACTO','ExampleTwoController@CONTACTO');