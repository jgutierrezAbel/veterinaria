<?php

namespace App\Http\Controllers;

use App\Models\especialidades;
use App\Models\nacionalidad;
use App\Models\veterinario;
use Illuminate\Http\Request;

class veterinarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datovet=veterinario::all();
        
        return view('veterinario.index')->with('vet',$datovet);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $espe=especialidades::all();
        $nacio=nacionalidad::all();
        return view('veterinario.create')->with('espe',$espe)->with('nacio',$nacio);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $vet=new veterinario();
        $vet->nombre=$request->get('nombre');
        $vet->apellido=$request->get('apellido');
        $vet->fecha_nac=$request->get('fecha_nac');
        $vet->id_especialidad=$request->get('espe');
        $vet->id_nacionalidad=$request->get('nacio');
        $vet->id_genero=$request->get('id_genero');
        $vet-> save();
        return redirect('veterinario');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $veteliminar=veterinario::find($id);
        return view('veterinario.delete')->with('veteliminar',$veteliminar);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editar= veterinario::find($id);
        $espe=especialidades::all();
        $nacio=nacionalidad::all();
        return view('veterinario.edit')->with('editarvet',$editar)->with('espe',$espe)->with('nacio',$nacio);;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $vet=veterinario::find($id);
        $vet->nombre=$request->get('nombre');
        $vet->apellido=$request->get('apellido');
        $vet->fecha_nac=$request->get('fecha_nac');
        $vet->id_especialidad=$request->get('espe');
        $vet->id_nacionalidad=$request->get('nacio');
        $vet->id_genero=$request->get('id_genero');
        $vet-> save();
        return redirect('veterinario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado = veterinario::find($id);
        $eliminado->delete();
        return redirect('veterinario');
    }
}
