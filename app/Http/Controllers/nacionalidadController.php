<?php

namespace App\Http\Controllers;
use App\Models\nacionalidad;
use Illuminate\Http\Request;

class nacionalidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosnacionalidad=nacionalidad::all();
        return view('nacionalidad.index')->with('nacionalidad',$datosnacionalidad);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('nacionalidad.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nacionalidad=new nacionalidad(); //Agente es la que dice el modelo 
        $nacionalidad->nacionalidad=$request->get('nacionalidad');
        $nacionalidad-> save();
        return redirect('nacionalidad');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $NacionalidadEliminar=nacionalidad::find($id);
        return view('nacionalidad.delete')->with('NacionalidadEliminar',$NacionalidadEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $editarnacionalidad=nacionalidad::find($id);
        return view('nacionalidad.edit')->with('editarnacionalidad',$editarnacionalidad);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nacionalidad=nacionalidad::find($id);
        $nacionalidad->nacionalidad=$request->get('nacionalidad');
        $nacionalidad-> save();
        return redirect('nacionalidad');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado=nacionalidad::find($id);
        $eliminado->delete();

        return redirect('nacionalidad');
    }
}
