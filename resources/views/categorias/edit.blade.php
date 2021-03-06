@extends('layouts.app')

@section('content')

<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>

<div class="container">

  <div class="card">
    <div class="card-header" style="background: #bd362f; color: white;">Editar Categoria del Producto</div>
    <div class="card-body">

      <form method="POST" action="/categorias/{{$categoria->id}}" style="margin: 5%">
        @method('PUT')
        {{ csrf_field() }}

        <label for="nombre_categoria">Nombre categoria:</label><br>
        <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" value="{{$categoria->nombre_categoria}}"><br>

        <select class="form-control form-control-lg" id="estado" name="estado" size="1" value="{{$categoria->estado}}">
          <option value="ACTIVO">ACTIVO</option>
          <option value="INACTIVO">INACTIVO</option>
        </select>
        <br>

        <input type="submit" class="btn btn-primary" value="Editar Categoria">
      </form>

    </div>
  </div>
</div>
</div>
@endsection