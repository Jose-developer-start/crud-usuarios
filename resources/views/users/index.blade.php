@extends('layout')
@section('title','CRUD Usuarios')
@section('content')
    <h1>Usuarios</h1>
    <a href="{{ route('usuario.create') }}">Crear usuarios</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Profesión</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td scope="row">{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->profession->name }}</td>
                <td>
                    <a href="{{ route('usuario.show',$user->id) }}" class="btn btn-success">Ver</a>
                    <a href="" class="btn btn-info">Editar</a>
                    <form action="">
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection