<?php

namespace App\Http\Controllers;

use App\Models\departamento;
use Illuminate\Http\Request;

class departamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datodepa=departamento::all();
        return view('departamento.index')->with('depa',$datodepa);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('departamento.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $depa=new departamento(); //Agente es la que dice el modelo 
        $depa->nombre=$request->get('nombre');
       
      
        $depa -> save();

        return redirect('departamento');
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
        $editar= departamento::find($id);
        return view('departamento.edit')->with('editarcli',$editar);
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

        $depa=departamento::find($id);
        $depa->nombre=$request->get('nombre');
        
       
        $depa -> save();
       return redirect('departamento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=departamento::find($id);
        $eliminado->delete();

        return redirect('departamento');
    }
}
