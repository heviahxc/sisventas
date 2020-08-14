@extends('layouts.app')

@section('content')



<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>
<div class="container">
  
  <div class="card; Light card">
 <form method="POST" action="/categorias" style="margin: 5%">
    {{ csrf_field() }}

  <label for="nombre_categoria">Nombre categoria:</label><br>
  <input  type="text" class="form-control" id="nombre_categoria" name="nombre_categoria" placeholder="Ej: Gasfitería" required><br>

  <input type="hidden" name="estado" id="estado" value="ACTIVO">

  <input class="btn btn-outline-primary" type="submit" value="Agregar Categoria">
</form> 

</div>
</div>

@endsection