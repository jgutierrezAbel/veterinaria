<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tratamiento;
use App\Models\medicamento;
use App\Models\cita;

class tratamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datotratamiento=tratamiento::all();
        return view('tratamiento.index')->with('tratamiento',$datotratamiento);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cita=cita::all();
        $med=medicamento::all();
        return view('tratamiento.create')->with('cita',$cita)->with('med',$med);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $tratamiento = new tratamiento();
    $tratamiento->nombretratamiento = $request->input('nombretratamiento');
    $tratamiento->descripcion = $request->input('descripcion');
    $tratamiento->id_cita = $request->input('cita');
    $tratamiento->medicamento = $request->input('med');
    $tratamiento->save();

    return redirect('tratamiento');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $tratamientoEliminar=tratamiento::find($id);
        return view('tratamiento.delete')->with('tratamientoEliminar',$tratamientoEliminar);
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $tratamientoEditar= tratamiento::find($id);
        $cita=cita::all();
        $med=medicamento::all();
        return view('tratamiento.edit')->with('tratamientoEditar',$tratamientoEditar)->with('cita',$cita)->with('med',$med);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $tratamiento=tratamiento::find($id);
        $tratamiento->nombretratamiento=$request->get('nombretratamiento');
        $tratamiento->descripcion=$request->get('descripcion');
        $tratamiento->id_cita=$request->get('cita');
        $tratamiento->medicamento=$request->get('med');
        $tratamiento -> save();
       return redirect('tratamiento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=tratamiento::find($id);
        $eliminado->delete();

        return redirect('tratamiento');
    }
}