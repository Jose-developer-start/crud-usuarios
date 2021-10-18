@extends('layout')
@section('title','CRUD Usuarios')
@section('content')
    <h1>Usuarios</h1>


    <div class="">
        <div class="my-4">
            <a href="{{ route('usuario.create') }}" class="btn btn-primary"><i class="fas fa-user-plus"></i></a>
        </div>
        <table class="table table-responsive-md table-hover" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Profesion</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php( $i = 0 )
                @foreach ($users as $user)
                <tr>
                    <td scope="row">{{ $i += 1 }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profesion->name }}</td>
                    <td>
                        <a href="{{ route('usuario.show',$user) }}" class="btn btn-success"><i class="far fa-eye "></i></a>
                        <a href="{{ route('usuario.edit',$user) }}" class="btn btn-info"><i class="fas fa-user-edit"></i></a>

                        <a class="btn btn-danger" href="{{ route('usuario.destroy',$user) }}"
                        onclick="event.preventDefault();
                                    document.getElementById('deleteUser').submit();"><i class="far fa-trash-alt"></i></a>

                        <form id="deleteUser" style="display: none" action="{{ route('usuario.destroy',$user) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection