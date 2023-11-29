<?php

namespace App\Http\Controllers;
use App\Models\empleado;
use Illuminate\Http\Request;

class empleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datoemple=empleado::all();
        return view('empleado.index')->with('espe',$datoemple);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empleado.create');
    }

    public function store(Request $request)
    {
    $emple = new empleado();
    $emple->nombre = $request->input('nombre');
    $emple->apellido = $request->input('apellido');
    $emple->fecha_nac = $request->input('fecha_nac');
    $emple->id_genero = $request->input('id_genero');
    $emple->id_departamento = $request->input('id_departamento');
    $emple->save();
    return redirect('/empleado');
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
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
