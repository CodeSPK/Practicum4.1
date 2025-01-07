<?php



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AdministrativoController;
use App\Http\Controllers\Auth\RegisterController;

// Ruta principal para la página de inicio
Route::get('/', function () {
    return view('home'); // Carga la vista 'home.blade.php'
})->name('home');

// Rutas RESTful para pacientes
Route::resource('patients', PatientController::class);

// Rutas RESTful para doctores
Route::resource('doctors', DoctorController::class);

Route::resource('administrativos', AdministrativoController::class);

Route::get('/login', function () {
    return view('auth.login');
})->name('login');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login.process');




// Ruta para el formulario de registro
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Ruta para procesar el registro
Route::post('/register', [RegisterController::class, 'register']);
