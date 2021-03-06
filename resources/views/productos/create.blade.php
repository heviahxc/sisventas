@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>
<div class="container">
  <div class="card">
    <div class="card-header" style="background: #bd362f; color: white;">Agregar Producto</div>
    <div class="card-body">
      <form action="/productos" style="margin: 5%" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label for="nombre">Nombre producto:</label><br>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" placeholder="Ej: Martillo" required><br>

        <label for="precio">Precio:</label><br>
        <input type="number" class="form-control"  id="precio" name="precio" min="1" maxlength="12" placeholder="Ej: 35000" required><br>

        <label for="stock">Stock:</label><br>
        <input type="number" class="form-control" id="stock" maxlength="10" name="stock" min="1" placeholder="Ej: 20" required><br>

        <label for="categoria">Categoria:</label><br>
        <select class="form-control form-control-lg" id="id_categoria" name="id_categoria" size="1">
          @foreach ($categorias as $categoria)
          @if ($categoria->estado=="ACTIVO")
          <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
          @endif

          @endforeach

        </select>
        <br>
        <input type="hidden" name="estado" id="estado" value="ACTIVO">

        <label for="imagen">Imagen:</label><br>
        <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*"><br>
        <br>
        <br>
        <input class="btn btn-primary" type="submit" value="Agregar Producto">
      </form>

    </div>
  </div>
</div>
</div>
@endsection