<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Producto;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Productos=Producto::all();
        return view("productos.index",compact("Productos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("Productos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['NombreArticulo'=>'required','Seccion'=>'required','Precio'=>'required','Fecha'=>'required']);
        $Producto = new Producto;
        $Producto->NombreArticulo=$request->NombreArticulo;
        $Producto->Seccion=$request->Seccion;
        $Producto->Precio=$request->Precio;
        $Producto->Fecha=$request->Fecha;
        $Producto->PaisOrigen=$request->PaisOrigen;
        $Producto->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $Producto=Producto::findOrFail($id);
        return view("productos.show",compact("Producto"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Producto=Producto::findOrFail($id);
        return view("productos.edit",compact("Producto"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $Producto=Producto::findOrFail($id);
        
        $Producto->update($request->all());

        return redirect("/productos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $Producto=Producto::findOrFail($id);
        
        $Producto->delete();

        return redirect("/productos");
    }
}
