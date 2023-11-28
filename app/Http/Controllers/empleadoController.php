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

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $emple=new empleado(); //Agente es la que dice el modelo 
        $emple->tipo_especialidad=$request->get('tipo');
        $emple->descripcion=$request->get('descripcion');
        $emple-> save();
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
