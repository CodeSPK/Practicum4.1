<?php

namespace App\Http\Controllers;

use App\Models\Patient; // Asegúrate de importar el modelo Patient
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtén todos los pacientes desde la base de datos
        $patients = Patient::all();

        // Envía los datos a la vista 'patients.index'
        return view('patients.index', compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    return view('patients.create');
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:patients',
        'phone' => 'required',
        'address' => 'required',
    ]);

    Patient::create($validated);
    return redirect()->route('patients.index')->with('success', 'Paciente creado con éxito.');
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
    public function edit(Patient $patient)
{
    return view('patients.edit', compact('patient'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Patient $patient)
{
    $validated = $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:patients,email,' . $patient->id,
        'phone' => 'required',
        'address' => 'required',
    ]);

    $patient->update($validated);
    return redirect()->route('patients.index')->with('success', 'Paciente actualizado con éxito.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Patient $patient)
{
    $patient->delete();
    return redirect()->route('patients.index')->with('success', 'Paciente eliminado con éxito.');
}

}
