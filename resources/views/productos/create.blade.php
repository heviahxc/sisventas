@extends('layout.master')

@section('content')
<form action="/productos" style="margin: 5%" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

  <label for="nombre">Nombre producto:</label><br>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Martillo"><br>

  <label for="precio">Precio:</label><br>
  <input type="text" class="form-control" id="precio" name="precio" placeholder="Ej: 35000"><br>

  <label for="stock">Stock:</label><br>
  <input type="text" class="form-control" id="stock" name="stock" placeholder="Ej: 20"><br>

  <label for="stock">Categoria:</label><br>
  <select class="form-control form-control-lg" id="id_categoria" name="id_categoria" size="1">
    @foreach ($categorias as $categoria)
        <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
    @endforeach

  </select>
  <br>
  <label for="imagen">Imagen:</label><br>
  <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*"><br>
<br>
<br>
  <input class="btn btn-outline-primary" type="submit" value="Agregar Producto">
</form> 
@endsection