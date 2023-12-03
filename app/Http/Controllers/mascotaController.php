<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\especialidades;
use App\Models\mascota;
use App\Models\tipo_mascota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datosmascota=DB::table('mascotas')
        ->join('tipo_mascotas', 'mascotas.tipomas', '=', 'tipo_mascotas.id')
        ->select('mascotas.*', 'tipo_mascotas.tipo_mascota as tipo_mascotas_nombre')
        ->get();
        
        
        return view('mascotas.index')->with('mascota',$datosmascota);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()


    {
        $clie=cliente::all();
        $tipo=tipo_mascota::all();
        $espe=especialidades::all();
        return view('mascotas.create')->with("cli",$clie)->with("ti",$tipo)->with("es",$espe);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $mascota=new mascota(); //Agente es la que dice el modelo 
        $mascota->nombre_mascota=$request->get('nombre_mascota');
        $mascota->id_especialidad=$request->get('espe');
        $mascota->tipomas=$request->get('tipo');
        $mascota->id_generomas=$request->get('id_generomas');
        $mascota->fecha_nac=$request->get('fecha_nac');
        $mascota->id_cli=$request->get('cli');
        $mascota-> save();
        return redirect('mascota');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        
        $MascotaEliminar=mascota::find($id);
        return view('mascotas.delete')->with('MascotaEliminar',$MascotaEliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar=mascota::find($id);
        $clie=cliente::all();
        $tipo=tipo_mascota::all();
        $espe=especialidades::all();
        return view('mascotas.edit')->with('editarmascota',$editar)->with("cli",$clie)->with("ti",$tipo)->with("es",$espe);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $mascota=mascota::find($id);
        $mascota->nombre_mascota=$request->get('nombre_mascota');
        $mascota->id_especialidad=$request->get('espe');
        $mascota->fecha_nac=$request->get('fecha_nac');
        $mascota->id_generomas=$request->get('id_generomas');
        $mascota->id_cli=$request->get('cli');
        $mascota->tipomas=$request->get('tipo');

        $mascota-> save();
        return redirect('mascota');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminado=mascota::find($id);
        $eliminado->delete();

        return redirect('mascota');
    }
}
