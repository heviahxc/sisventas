@extends('layout.master')

@section('content')
 
 
 <form method="POST" action="/categorias" style="margin: 5%">
    {{ csrf_field() }}

  <label for="nombre_categoria">Nombre categoria:</label><br>
  <input  type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Ej: Gasfitería"><br>
  
  <input class="btn btn-outline-primary" type="submit" value="Agregar Categoria">
</form> 



@endsection