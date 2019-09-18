<?php

namespace App\Http\Controllers;

use App\Supports;
use Illuminate\Http\Request;

class SupportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('es.supports');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\limits  $limits
     * @return \Illuminate\Http\Response
     */
    public function show(limits $limits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\limits  $limits
     * @return \Illuminate\Http\Response
     */
    public function edit(limits $limits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\limits  $limits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, limits $limits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\limits  $limits
     * @return \Illuminate\Http\Response
     */
    public function destroy(limits $limits)
    {
        //
    }
}
