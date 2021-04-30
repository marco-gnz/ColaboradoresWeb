<?php

namespace App\Http\Controllers;

use App\Models\comuna;
use App\Models\provincia;
use App\Models\region;
use App\Models\trabajador;
use Illuminate\Http\Request;
use Str;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $regions = region::all();
        return view("admin.trabajador.create",compact("regions"));
    }
    public function provincias(Request $request){
        if(isset($request->id)){
            $provincias = provincia::whereRegion_id($request->id)->get();
            return response()->json(
                [
                    'lista' => $provincias,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );
        }
    }
    public function comunas(Request $request){
        if(isset($request->id)){
            $comunas = comuna::whereProvincia_id($request->id)->get();
            return response()->json(
                [
                    'lista' => $comunas,
                    'success' => true
                ]
                );
        }else{
            return response()->json(
                [
                    'success' => false
                ]
                );

            }
        }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'rut' => 'required|max:9',
            'nombres' => 'required|min:4',
            'ap_paterno' => 'required|min:4',
            'ap_materno' =>'required|min:4',
            'telefono' => 'required|max:9',
            'email' => 'required|email',
            'region' => 'required',
            'provincias' => 'required',
            'comunas' => 'required',
            'direccion' => 'required',
            'imagen' => 'required|image',
        ]);

            $trabajador = trabajador::create([
            'rut'                   => $request->rut,
            'uuid'                  => Str::uuid(),
            'nombres'               => $request->nombres,
            'ap_paterno'            => $request->ap_paterno,
            'ap_materno'            =>  $request->ap_materno,
            'fono'                  => $request->telefono,
            'mail'                  => $request->email,
            'direccion'             => $request->direccion,
            'url_foto_perfil'       => 'prueba/prueba',
            'id_comuna'             => $request->comunas,
            'id_estado_trabajador'  => 1,

        ]);
        return view('admin.trabajador.index')
                ->with('success','Trabajador agregado correctamente.');
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
