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
/* Es aquí donde podemos configurar nuestras rutas*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sobrenosotros', function () {
    return 'Esta es la página que habla de nosotros';
});

Route::get('/contactenos', function () {
    return 'Aquí nos podran contactar';
});
/* pasamos parametros a la url*/
/* Expresiones regulares php para */
Route::get('/Page/{id}/{nombre}', function ($id,$nombre) {
    return 'está es la página: ' . $id . "Creado por: " . $nombre;
})->where('nombre','[a-zA-Z]+');