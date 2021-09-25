@extends('layout')
@section('title',"Detalle del user {$user->id}")

@section('content')
    <h1>Mostrar usuarios {{ $user->id }}</h1>
    <p>Nombre: {{ $user->name }}</p>
    <p>Email: {{ $user->email}}</p>
@endsection

