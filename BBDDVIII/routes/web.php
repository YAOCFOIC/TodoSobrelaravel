<?php
use App\Articulo;
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

Route:: get("/leer",function(){
/*

	$articulos = Articulo::all();

	foreach($articulos as $articulo){

		echo $articulo->Name_A ."<br/>";
		echo " Nombre: " . $articulo->Name_A . " Precio: " .$articulo->Price_A ."<br/>";

	}
*/
$articulos=Articulo::where("Country_A","venezuela")->min("Price_A");
return $articulos;
});

Route::get("/insertar",function(){
	$articulos=new Articulo;
	$articulos->Name_A="Pantalones";
	$articulos->Price_A=10000;
	$articulos->Country_A="Colombia";
	$articulos->ob_A="Nose";

	$articulos->save();
});

Route::get("/actualizar",function(){
	$articulos=Articulo::find(2);
	
	$articulos->Price_A=10000;
	

	$articulos->save();
});