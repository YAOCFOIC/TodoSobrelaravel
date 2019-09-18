<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Articulo extends Model
{
    //
    use SoftDeletes;
    protected $dates = ['delete_at'];

    public function cliente(){
    	return $this->belongsTo("App\Cliente");
    }
}
