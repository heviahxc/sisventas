@extends('layouts.app')

@section('content')
<head>
  <link rel="stylesheet" type="text/css" href="/css/fondo.css">
</head>

<div class="container">
  
  <div class="card; Light card">

<form method="POST" action="/categorias/{{$categoria->id}}" style="margin: 5%"> 
    @method('PUT')
    {{ csrf_field() }}

  <label for="nombre_categoria">Nombre categoria:</label><br>
<input type="text" class="form-control"  id="nombre_categoria" name="nombre_categoria"  value="{{$categoria->nombre_categoria}}"><br>
  
  <input type="submit" class="btn btn-outline-primary" value="Editar Categoria">
</form> 
</div>
</div>
@endsection