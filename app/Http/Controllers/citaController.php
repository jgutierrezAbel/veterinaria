<?php

namespace App\Http\Controllers;
use App\Models\cliente;
use App\Models\cita;
use App\Models\mascota;
use App\Models\veterinario;
use Illuminate\Http\Request;

class citaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datocita=cita::all();
        return view('cita.index')->with('cita',$datocita);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $cli=cliente::all();
        $vet=veterinario::all();
        $mas=mascota::all();
        return view('cita.create')->with('cli',$cli)->with('vet',$vet)->with('mas',$mas);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cita=new cita(); //Agente es la que dice el modelo 
        $cita->fechacita=$request->get('fechacita');
        $cita->horacita=$request->get('horacita');
        $cita->id_cli=$request->get('cli');
        $cita->id_vet=$request->get('vet');
        $cita->id_mas=$request->get('mas');
        $cita->descripcion=$request->get('descripcion');
        $cita-> save();
        return redirect('cita');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $citaEliminar=cita::find($id);
        return view('cita.delete')->with('citaEliminar',$citaEliminar);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $citaEditar= cita::find($id);
        $cli=cliente::all();
        $vet=veterinario::all();
        $mas=mascota::all();
        return view('cita.edit')->with('citaEditar',$citaEditar)->with('cli',$cli)->with('vet',$vet)->with('mas',$mas);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cita=cita::find($id);
        $cita->fechacita=$request->get('fechacita');
        $cita->horacita=$request->get('horacita');
        $cita->id_cli=$request->get('cli');
        $cita->id_vet=$request->get('vet');
        $cita->id_mas=$request->get('mas');
        $cita->descripcion=$request->get('descripcion');
        $cita-> save();
        return redirect('cita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=cita::find($id);
        $eliminado->delete();

        return redirect('cita');
    }
}