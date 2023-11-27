<?php

namespace App\Http\Controllers;

use App\Models\proveedore;
use Illuminate\Http\Request;

class proveedoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datosprove=proveedore::all();
        return view('proveedores.index')->with('proveedores',$datosprove);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $prove=new proveedore(); //Agente es la que dice el modelo 
        $prove->nombre=$request->get('nombre');
        $prove->descripcion=$request->get('descripcion');
      
        $prove -> save();

        return redirect('proveedores');
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
