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
                        <input class="form-control" type="text" name="name" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <select class="form-control"  name="profession_id" id="">
                            <option value="1">Front-end developer</option>
                            <option value="2">Back-end developer</option>
                            <option value="3">UX designer</option>
                        </select>
                    </div>
                    <input type="submit" class="btn btn-success" value="Registrar">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection