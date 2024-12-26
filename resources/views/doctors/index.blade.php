@extends('layouts.master')

@section('title', 'Listado de Doctores')

@section('content')
    <h2>Listado de Doctores</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Specialty</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($doctors as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->specialty }}</td>
                    <td>{{ $doctor->email }}</td>
                    <td>
                        <!-- Botón para editar -->
                        <a href="{{ route('doctors.edit', $doctor->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Botón para eliminar -->
                        <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No hay doctores registrados.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <a href="{{ route('doctors.create') }}" class="btn btn-success">Agregar Doctor</a>
@endsection

