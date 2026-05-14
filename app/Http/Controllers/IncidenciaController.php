<?php

namespace App\Http\Controllers;

use App\Models\Incidencia;
use Illuminate\Http\Request;

class IncidenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $incidencias = Incidencia::latest()->get();
        return view('incidencias.index', compact('incidencias'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('incidencias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'titulo' => 'required|max:255',
        'descripcion' => 'required',
        'tipo' => 'required',
        'ubicacion' => 'required|max:255',
        'prioridad' => 'required',
    ]);

    Incidencia::create([
        'titulo' => $validated['titulo'],
        'descripcion' => $validated['descripcion'],
        'tipo' => $validated['tipo'],
        'ubicacion' => $validated['ubicacion'],
        'prioridad' => $validated['prioridad'],
        'estado' => 'pendiente',
    ]);

    return redirect()
        ->route('incidencias.index')
        ->with('success', 'Incidencia creada correctamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(Incidencia $incidencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Incidencia $incidencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Incidencia $incidencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Incidencia $incidencia)
    {
        //
    }
}
