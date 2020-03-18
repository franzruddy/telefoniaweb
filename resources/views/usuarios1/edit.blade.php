@extends('layouts.app')

@section('content')

<div class="container">

<form action="{{url('/usuarios1/'.$usuarios1->id)}}" 
    method="POST" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    @include('usuarios1.from',['Modo'=>'editar'])

</form>
</div>

@endsection