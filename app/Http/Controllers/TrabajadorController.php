<?php

namespace App\Http\Controllers;

use App\Models\trabajador;
use Illuminate\Http\Request;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        return view('admin.trabajador.index');
    }

    public function lista_trabajadores()
    {
        $trabajadores = trabajador::all();

        return response()->json($trabajadores, 200);
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
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function show(trabajador $trabajador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajador $trabajador)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trabajador $trabajador)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\trabajador  $trabajador
     * @return \Illuminate\Http\Response
     */
    public function destroy(trabajador $trabajador)
    {
        //
    }
}
