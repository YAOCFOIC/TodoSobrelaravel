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

Route::get('/', function () {
    return view('welcome');
});







Route::get('sendemail', function(){

	$data = array(
		'name' => "Curso laravel",
	);

	Mail::send('emails.welcome', $data, function ($message) {

		$message->from('lawiert02@gmail.com','Curso laravel');

		$message->to('lawiert02@gmail.com')->subject('test email curso laravel');

	});

	return "Tú email ha sido enviado correctamente";

});