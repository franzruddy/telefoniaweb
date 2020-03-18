


<labeL for="Nombre">{{'Nombre'}}</labeL>
<input type="text" name="Nombre" id="Nombre" 
value="{{isset($usuarios1->Nombre)?$usuarios1->Nombre:''}}">

<br>
<labeL for="ApellidoPaterno">{{'Apellido Paterno'}}</labeL>
<input type="text" name="ApellidoPaterno" id="Nombre" 
value="{{isset($usuarios1->ApellidoPaterno)?$usuarios1->ApellidoPaterno:''}}">

<br>
<labeL for="ApellidoMaterno">{{'Apellido Materno'}}</labeL>
<input type="text" name="ApellidoMaterno" id="Nombre" 
value="{{isset($usuarios1->ApellidoMaterno)?$usuarios1->ApellidoMaterno:''}}">

<br>
<labeL for="Celular">{{'Celular'}}</labeL>
<input type="text" name="Celular" id="Nombre" 
value="{{isset($usuarios1->Celular)?$usuarios1->Celular:''}}">

<br>
<labeL for="Ciudad">{{'Ciudad'}}</labeL>
<input type="text" name="Ciudad" id="Nombre" 
value="{{isset($usuarios1->Ciudad)?$usuarios1->Ciudad:''}}">

<br>
<labeL for="Foto">{{'Foto'}}</labeL>

@if(isset($usuarios1->Foto))
<br>
<img src="{{ asset('storage').'/'.$usuarios1->Foto}}" alt="" width="100">
<br>
@endif



<input type="file" name="Foto" id="Nombre" 
value="">

<br>
<input type="submit" value="{{$Modo=='crear' ? 'Agregar':'Modifica'}}">
<br>
<a href="{{url('usuarios1')}} ">Regresar</a>
<br>
