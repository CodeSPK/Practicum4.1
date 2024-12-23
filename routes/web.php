<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/appointments', function () {
    return view('appointments');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/citas', function () {
    return view('citas');
});

Route::get('/nuevoUsuario', function () {
    return view('nuevoUsuario');
});

Route::get('/agendar', function () {
    return view('agendar');
});

