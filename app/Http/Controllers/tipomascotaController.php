<?php

namespace App\Http\Controllers;

use App\Models\tipo_mascota;
use Illuminate\Http\Request;

class tipomascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datotipo=tipo_mascota::all();
        return view('tipomascota.index')->with('tipo',$datotipo);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('tipomascota.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $tipomasco=new tipo_mascota(); //Agente es la que dice el modelo 
        $tipomasco->tipo_mascota=$request->get('tipo');
        $tipomasco->descripcion=$request->get('descripcion');
        $tipomasco-> save();
        return redirect('tipomascota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar= tipo_mascota::find($id);
        return view('tipomascota.edit')->with('editarcli',$editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tipo=tipo_mascota::find($id);
        $tipo->tipo_mascota=$request->get('tipo');
        $tipo->descripcion=$request->get('descripcion');
       
        $tipo -> save();
       return redirect('tipomascota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=tipo_mascota::find($id);
        $eliminado->delete();

        return redirect('tipomascota');
    }
}