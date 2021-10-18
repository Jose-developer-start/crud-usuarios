@extends('layout')
@section('title','CRUD professions')
@section('content')
    <h1>professions</h1>

    <div class="">
        <div class="mb-4">
            <a href="{{ route('profession.create') }}" class="btn btn-primary">Agregar <i class="far fa-plus-square"></i></a>
        </div>
        <table class="table table-responsive-md table-hover" id="myTable">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Profesión</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @php( $i = 0 )
                @foreach ($professions as $profession)
                <tr>
                    <td scope="row">{{ $i += 1 }}</td>
                    <td>{{ $profession->name }}</td>
                    <td>
                        <a href="{{ route('profession.edit',$profession) }}" class="btn btn-info"><i class="far fa-edit"></i></a>
                        <a href="{{ route('profession.destroy',$profession) }}" onclick="event.preventDefault(); document.getElementById('deleteProfession').submit()" class="btn btn-danger"><i class="far fa-trash-alt"></i></a>


                        <form id="deleteProfession" style="display: none" action="{{ route('profession.destroy',$profession) }}" method="POST">
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