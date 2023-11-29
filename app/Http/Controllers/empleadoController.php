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
        return view('empleado.index')->with('emple',$datoemple);
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
        $editar= empleado::find($id);
        return view('empleado.edit')->with('editaremp',$editar);
        return view('editar_empleado');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $emple=empleado::find($id);
        $emple->nombre = $request->input('nombre');
        $emple->apellido = $request->input('apellido');
        $emple->fecha_nac = $request->input('fecha_nac');
        $emple->id_genero = $request->input('id_genero');
        $emple->id_departamento = $request->input('id_departamento');
        $emple->save();
       return redirect('empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

            //
            $eliminado=empleado::find($id);
            $eliminado->delete();
    
            return redirect('empleado');
    }
}
