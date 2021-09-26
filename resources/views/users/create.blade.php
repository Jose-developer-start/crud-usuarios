@extends('layout')
@section('title','Registrar nuevo usuario')
@section('content')
    
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card">
            <div class="card-header">
                Registrar usuario nuevo
            </div>
            <div class="card-body">
                <form action="{{ route('usuario.store') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" placeholder="Nombre de usuario">
                        {{ $errors->first("name")}}
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Email">
                        {{ $errors->first("email")}}
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" value="{{ old('password') }}" placeholder="Password">
                        {{ $errors->first("password")}}
                    </div>
                    <div class="form-group">
                        <select class="form-control"  name="profession_id" id="">
                            <option value="">Seleccionar</option>
                            <option value="1">Front-end developer</option>
                            <option value="2">Back-end developer</option>
                            <option value="3">UX designer</option>
                        </select>
                        {{ $errors->first("profession_id")}}
                    </div>
                    <input type="submit" class="btn btn-success" value="Registrar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection