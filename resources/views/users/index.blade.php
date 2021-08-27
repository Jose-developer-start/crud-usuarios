@extends('layout')
@section('title','CRUD Usuarios')
@section('content')
    <h1>Usuarios</h1>
    <ul>
    @foreach ($users as $user)
        
        <li>{{ $user }}</li>
        
    @endforeach
    </ul>

@endsection