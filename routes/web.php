<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;

// Ruta principal para la página de inicio
Route::get('/', function () {
    return view('home'); // Carga la vista 'home.blade.php'
})->name('home');

// Rutas para los pacientes
Route::resource('patients', PatientController::class);

// Rutas para los doctores
Route::resource('doctors', DoctorController::class);
