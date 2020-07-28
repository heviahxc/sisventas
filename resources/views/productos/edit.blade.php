@extends('layout.master')

@section('content')


<form method="POST" action="/productos/{{$producto->id}}" style="margin: 5%">
    @method('PUT')
    {{ csrf_field() }}

  <label for="nombre">Nombre producto:</label><br>
  <input type="text" class="form-control" id="nombre" name="nombre" value="{{$producto->nombre}}"><br>

  <label for="precio">Precio:</label><br>
  <input type="text" class="form-control" id="precio" name="precio" value="{{$producto->precio}}"><br>

  <label for="stock">Stock:</label><br>
  <input type="text" class="form-control" id="stock" name="stock" value="{{$producto->stock}}"><br>

  <label for="stock">Categoria:</label><br>
  <select class="form-control form-control-lg" id="id_categoria" name="id_categoria" size="1">
    @foreach ($categorias as $categoria)
        <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
    @endforeach

  </select>


  <br>
  
  <input class="btn btn-outline-primary" type="submit" value="Editar Producto">
</form> 

@endsection