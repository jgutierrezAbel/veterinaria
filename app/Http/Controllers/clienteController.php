<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\empleado;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $cliente=cliente::all();
        return view('cliente.index')->with('cliente', $cliente);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cliente.create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $cliente = new cliente();
        $cliente->nombre = $request ->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->fecha_naci = $request->get('fecha_nac');
        $cliente->id_genero = $request->get('id_genero');
        $cliente->save();

        return redirect('/cliente');
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
        $editar=cliente::find($id);
        return view('cliente.edit')->with('editarcli',$editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $cliente= cliente::find($id);
        $cliente->nombre = $request->get('nombre');
        $cliente->apellido = $request->get('apellido');
        $cliente->fecha_naci = $request->get('fecha_nac');
        $cliente->id_genero = $request->get('id_genero');
        
        $cliente->save();
        return redirect('cliente');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=cliente::find($id);
        $eliminado->delete();

        return redirect('cliente');
    }
}
