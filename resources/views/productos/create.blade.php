@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>
<div class="container">
  
  <div class="card; Light card">
<form action="/productos" style="margin: 5%" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}

  <label for="nombre">Nombre producto:</label><br>
  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ej: Martillo" required><br>

  <label for="precio">Precio:</label><br>
  <input type="number" class="form-control" id="precio" name="precio" min="1" placeholder="Ej: 35000" required><br>

  <label for="stock">Stock:</label><br>
  <input type="number" class="form-control" id="stock" name="stock" min="1" placeholder="Ej: 20" required><br>

  <label for="categoria">Categoria:</label><br>
  <select class="form-control form-control-lg" id="id_categoria" name="id_categoria" size="1">
    @foreach ($categorias as $categoria)
        <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
    @endforeach

  </select>
  <br>
  <input type="hidden" name="estado" id="estado" value="ACTIVO">
  
  <label for="imagen">Imagen:</label><br>
  <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*"><br>
<br>
<br>
  <input class="btn btn-outline-primary" type="submit" value="Agregar Producto">
</form> 

</div>
</div>
@endsection