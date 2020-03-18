@extends('layouts.app')

@section('content')

<div class="container">


seccion para crear empleados
<br>
<form action="{{url('/usuarios1')}}  " method="post" enctype="multipart/form-data">

    @csrf
    @include('usuarios1.from',['Modo'=>'crear'])

</form>
</div>

@endsection