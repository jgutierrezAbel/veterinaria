<?php

namespace App\Http\Controllers;

use App\Models\especialidades;
use Illuminate\Http\Request;

class especialidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datoespe=especialidades::all();
        return view('especialidades.index')->with('espe',$datoespe);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('especialidades.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $espe=new especialidades(); //Agente es la que dice el modelo 
        $espe->tipo_especialidad=$request->get('tipo');
        $espe->descripcion=$request->get('descripcion');
        $espe-> save();
        return redirect('especialidades');
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
        $editar= especialidades::find($id);
        return view('especialidades.edit')->with('editarcli',$editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $especialidades=especialidades::find($id);
        $especialidades->tipo_especialidad=$request->get('tipo');
        $especialidades->descripcion=$request->get('descripcion');
       
        $especialidades -> save();
       return redirect('especialidades');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=especialidades::find($id);
        $eliminado->delete();

        return redirect('especialidades');
    }
}
