@extends('layouts.master')

@section('title', 'Crear Doctor')

@section('content')
    <h2>Crear Doctor</h2>
    <form action="{{ route('doctors.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Especialidad</label>
            <input type="text" name="specialty" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
