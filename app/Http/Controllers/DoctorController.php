<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los doctores
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('doctors.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validar los datos ingresados
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors',
            'specialty' => 'required',
        ]);

        // Crear un nuevo doctor
        Doctor::create($validated);
        return redirect()->route('doctors.index')->with('success', 'Doctor creado con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Doctor $doctor)
    {
        return view('doctors.show', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Doctor $doctor)
    {
        return view('doctors.edit', compact('doctor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Doctor $doctor)
    {
        // Validar los datos ingresados
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:doctors,email,' . $doctor->id,
            'specialty' => 'required',
        ]);

        // Actualizar el doctor
        $doctor->update($validated);
        return redirect()->route('doctors.index')->with('success', 'Doctor actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Doctor $doctor)
    {
        // Eliminar el doctor
        $doctor->delete();
        return redirect()->route('doctors.index')->with('success', 'Doctor eliminado con éxito.');
    }
}
