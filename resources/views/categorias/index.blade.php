@extends('layout.master')

@section('content')

@foreach ($categorias as $categoria)
    
<x-card-categoria
    :nombre="$categoria->nombre_categoria"
    :id="$categoria->id"
/>
@endforeach

<h1> <button type="button" class="btn btn-outline-primary" style="margin: 5%"><a href="/categorias/create"
>Agregar Nueva Categoria</a></button></h1>

@endsection
