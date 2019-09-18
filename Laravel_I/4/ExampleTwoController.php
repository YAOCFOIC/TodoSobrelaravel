<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleTwoController extends Controller
{
    //
    public function inicio(){
    	return view('welcome');
    }

    public function NOSOTROS(){
    	return view('NOSOTROS');
    }

    public function TESTIMONIOS(){
    	return view('TESTIMONIOS');
    }

    public function SERVICIOS(){
    	return view('SERVICIOS');
    }

    public function TRABAJOS(){
    	return view('TRABAJOS');
    }

    public function CONTACTO(){
    	return view('CONTACTO');
    }
}
