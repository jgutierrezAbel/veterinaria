<?php

namespace App\Http\Controllers;

use App\Models\mascota;
use Illuminate\Http\Request;

class mascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosmascota=mascota::all();
        return view('mascotas.index')->with('mascota',$datosmascota);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mascotas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mascota=new mascota(); //Agente es la que dice el modelo 
        $mascota->nombre_mascota=$request->get('nombre_mascota');
        $mascota->id_especialidad=$request->get('id_especialidad');
        $mascota->fecha_nac=$request->get('fecha_nac');
        $mascota->id_cli=$request->get('id_cli');
        $mascota-> save();
        return redirect('mascota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $MascotaEliminar=mascota::find($id);
        return view('mascotas.delete')->with('MascotaEliminar',$MascotaEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=mascota::find($id);
        return view('mascotas.edit')->with('editarmascota',$editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $mascota=mascota::find($id);
        $mascota->nombre_mascota=$request->get('nombre_mascota');
        $mascota->id_especialidad=$request->get('id_especialidad');
        $mascota->fecha_nac=$request->get('fecha_nac');
        $mascota->id_cli=$request->get('id_cli');
        $mascota-> save();
        return redirect('mascota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=mascota::find($id);
        $eliminado->delete();

        return redirect('mascota');
    }
}
