@extends('layouts.master')

@section('title', 'Listado de Doctores')

@section('content')
    <h2>Listado de Doctores</h2>
    <a href="{{ route('doctors.create') }}" class="btn btn-primary mb-3">Nuevo Doctor</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Especialidad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>{{ $doctor->specialty }}</td>
                    <td>
                        <a href="{{ route('doctors.edit', $doctor) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('doctors.destroy', $doctor) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
