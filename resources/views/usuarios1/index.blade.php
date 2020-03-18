@extends('layouts.app')

@section('content')

<div class="container">

    @if (Session::has('Mensaje')){{
    (Session::get('Mensaje'))
 
 }}
    @endif

    <br>
    <a href="{{url('usuarios1/create')}}" class="btn btn-dark">Agregar Usuarios</a>
    <br>
    <br>

    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Nombre</th>
                <th>Celular</th>
                <th>Ciudad</th>
                <th>Acciones</th>
            </tr>
        </thead>

        @foreach ($usuarios1 as $usuarios1)

        <tbody>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>

                    <img src="{{ asset('storage').'/'.$usuarios1->Foto}}" class="img-thumbnail img-fluid" alt="" width="100">
                </td>
                <td>{{$usuarios1->Nombre}} {{$usuarios1->ApellidoPaterno}} {{$usuarios1->ApellidoMaterno}} </td>
                <td>{{$usuarios1->Celular}}</td>
                <td>{{$usuarios1->Ciudad}}</td>
                <td>
                    <a class="btn btn-dark" href="{{url('/usuarios1/'.$usuarios1->id.'/edit')}}"> Editar </a>
                    
                    <form method="POST" action="{{ url('/usuarios1/'.$usuarios1->id) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-dark" type="submit" onclick="return confirm('¿Borrar?') ">Borrar </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection