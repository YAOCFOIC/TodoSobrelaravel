<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
   	public function calificaciones()
    {
    	return $this->morphMany("App\Calificaciones","calificacion");
    	
    }

    protected $fillable = [ 'Nombre' , 'Apellidos' ]; 

}
