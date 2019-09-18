<?php
use App\Articulo;
use App\Cliente;
use App\Perfil;
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
	/*$articulos=Articulo::find(2);
	
	$articulos->Price_A=10000;
	

	$articulos->save();*/
	Articulo::where('Country_A','Colombia')->where('Price_A','10000')->update(['Price_A'=>1000000]);
});

Route::get("/borrar",function(){
	/*$articulo=Articulo::find(2);
	$articulo->delete();*/
	$articulo::where("Name_A","Gafas")->delete();
});

Route::get('/insercion',function(){
	Articulo::create(["Name_A"=>"Computador", "Price_A"=>100000000,"Country_A"=>"Colombia","ob_A"=>"Nada"]);
});

Route::get("/sofdelete",function(){
	Articulo::find(9)->delete();
});
Route:: get("/leeyendo",function(){

$articulos=Articulo::withTrashed()
            ->where('id', 9)
            ->get();
return $articulos;
});

Route::get("/cliente/{id}/articulos",function($id){
	return Cliente::find($id)->articulo;
});

Route::get("/articulo/{id}/clientes",function($id){
	
	return Articulo::find($id)->cliente->nombre;
});

Route::get("/articuloscompra",function(){
	$articulos = Cliente::find(1)->articulos->where("Country_A","Colombia");

	foreach ($articulos as $articulo) {
    	//
    	echo $articulo->Name_A."<br/>";
	}
});
Route::get("/cliente/{id}/perfil",function($id){
	$cliente=Cliente::find($id);

	foreach ($cliente->perfils as $perfil) {
		return $perfil->nombre;
	}
});

Route::get("/calificaciones",function(){
	$cliente=Cliente::find(1);

	foreach ($cliente->calificaciones as $calificacion) {
		return $calificacion->calificacion;
	}
});