@extends('layout.master')

@section('content')
<form method="POST" action="/productos">
    {{ csrf_field() }}

  <label for="nombre">Nombre producto:</label><br>
  <input type="text" id="nombre" name="nombre" placeholder="Ej: Martillo"><br>

  <label for="precio">Precio:</label><br>
  <input type="text" id="precio" name="precio" placeholder="Ej: 35000"><br>

  <label for="stock">Stock:</label><br>
  <input type="text" id="stock" name="stock" placeholder="Ej: 20"><br>

  <label for="stock">Categoria:</label><br>
  <select id="id_categoria" name="id_categoria" size="1">
    @foreach ($categorias as $categoria)
        <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
    @endforeach

  </select>


  <input type="submit" value="Agregar Producto">
</form> 
@endsection