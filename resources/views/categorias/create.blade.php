@extends('layouts.app')

@section('content')



<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>
<div class="container">

  <div class="card">
    <div class="card-header" style="background: #bd362f; color: white;"> Agregar Categoria del Producto</div>
    <div class="card-body">
      <form method="POST" action="/categorias" style="margin: 5%">
        {{ csrf_field() }}

        <label for="nombre_categoria">Nombre categoria:</label><br>
        <input type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Ej: Gasfitería" required><br>

        <input type="hidden" name="estado" id="estado" value="ACTIVO">

        <input class="btn btn-primary" type="submit" value="Agregar Categoria">
      </form>

    </div>
  </div>
</div>
</div>

@endsection