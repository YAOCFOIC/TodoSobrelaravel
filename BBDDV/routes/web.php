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

Route::get('/',"MyController@index");
Route::get('/crear',"MyController@create");
Route::get('/articulos',"MyController@store");
Route::get('/galeria',"MyController@galeria");
Route::get('/mostrar',"MyController@show");
Route::get('/contacto',"MyController@contactar");


Route::get('/insertar',function(){
	DB::insert("INSERT INTO articulos(Name_A,Price_A,Country_A,ob_A)VALUES(?,?,?,?)",
	["JARRON",15,"JAPON","PELOTA"]);
});

Route::get('/leer',function(){
	$resultado=DB::select("SELECT * FROM articulos WHERE ID=?",[1]);
	foreach ($resultado as $articulo) {
		return $articulo->Name_A;

	}
});

Route::get('/actualiza',function(){
	DB::update("UPDATE articulos SET Name_A='DESCONOCIDO' WHERE ID=?",[1]);
});

Route::get('/eliminar',function(){
	DB::delete("DELETE FROM articulos WHERE ID=?",[1]);
});