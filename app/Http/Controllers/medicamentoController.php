<?php

namespace App\Http\Controllers;
use App\Models\medicamento;
use App\Models\proveedore;
use Illuminate\Http\Request;

class medicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosmedicamento=medicamento::all();
        return view('medicamento.index')->with('medicamento',$datosmedicamento);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pro=proveedore::all();
        return view('medicamento.create')->with('pro',$pro);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $medicamento=new medicamento();
        $medicamento->nombremed=$request->get('nombremed');
        $medicamento->proveedor=$request->get('pro');
        $medicamento->descripcion=$request->get('descripcion');
        $medicamento->lote=$request->get('lote');
        $medicamento->vencimiento=$request->get('vencimiento');
        $medicamento->cantidad=$request->get('cantidad');
        $medicamento-> save();
        return redirect('medicamento');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $medicamentoEliminar=medicamento::find($id);
        return view('medicamento.delete')->with('medicamentoEliminar',$medicamentoEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $medicamentoEditar=medicamento::find($id);
        $pro=proveedore::all();
        return view('medicamento.edit')->with('medicamentoEditar',$medicamentoEditar)->with('pro',$pro);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $medicamento=medicamento::find($id);
        $medicamento->nombremed=$request->get('nombremed');
        $medicamento->proveedor=$request->get('pro');
        $medicamento->descripcion=$request->get('descripcion');
        $medicamento->lote=$request->get('lote');
        $medicamento->vencimiento=$request->get('vencimiento');
        $medicamento->cantidad=$request->get('cantidad');
        $medicamento-> save();
        return redirect('medicamento');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $eliminado=medicamento::find($id);
        $eliminado->delete();

        return redirect('medicamento');
    }
}
