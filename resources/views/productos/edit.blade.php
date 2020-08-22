@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>
<div class="container">

  <div class="card">
    <div class="card-header" style="background: #bd362f; color: white;">Editar Producto</div>
    <div class="card-body">
      <form method="POST" action="/productos/{{$producto->id}}" style="margin: 5%">
        @method('PUT')
        {{ csrf_field() }}

        <label for="nombre">Nombre producto:</label><br>
        <input type="text" class="form-control" id="nombre" name="nombre" maxlength="50" value="{{$producto->nombre}}"><br>

        <label for="precio">Precio:</label><br>
        <input type="number" class="form-control" id="precio" name="precio" min="1" value="{{$producto->precio}}"><br>

        <label for="stock">Stock:</label><br>
        <input type="number" class="form-control" id="stock" name="stock" min="1" value="{{$producto->stock}}"><br>

        <label for="categoria">Categoria:</label><br>
        <select class="form-control form-control-lg" id="id_categoria" name="id_categoria" size="1">
          @foreach ($categorias as $categoria)
          <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
          @endforeach

        </select>
        <br>

        <label for="categoria">Estado:</label><br>
        <select class="form-control form-control-lg" id="estado" name="estado" size="1" value="{{$producto->estado}}">
          <option value="ACTIVO">ACTIVO</option>
          <option value="INACTIVO">INACTIVO</option>
        </select>
        <br>

        <input class="btn btn-primary" type="submit" value="Editar Producto">
      </form>
    </div>
  </div>
</div>
</div>
@endsection