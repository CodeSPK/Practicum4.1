@extends('layouts.master')

@section('title', 'Editar Doctor')

@section('content')
    <h2>Editar Doctor</h2>
    <form action="{{ route('doctors.update', $doctor) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" value="{{ $doctor->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico</label>
            <input type="email" name="email" class="form-control" value="{{ $doctor->email }}" required>
        </div>
        <div class="mb-3">
            <label for="specialty" class="form-label">Especialidad</label>
            <input type="text" name="specialty" class="form-control" value="{{ $doctor->specialty }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
@endsection
