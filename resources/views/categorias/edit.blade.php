@extends('layout.master')

@section('content')
 



<form method="POST" action="/categorias/{{$categoria->id}}" style="margin: 5%"> 
    @method('PUT')
    {{ csrf_field() }}

  <label for="nombre_categoria">Nombre categoria:</label><br>
<input type="text" class="form-control"  id="nombre_categoria" name="nombre_categoria" value="{{$categoria->nombre_categoria}}"><br>
  
  <input type="submit" class="btn btn-outline-primary" value="Editar Categoria">
</form> 

@endsection