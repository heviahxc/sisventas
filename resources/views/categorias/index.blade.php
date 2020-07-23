@extends('layout.master')

@section('content')

@foreach ($categorias as $categoria)
    
<x-card-categoria
    :nombre="$categoria->nombre_categoria"
    :id="$categoria->id"
/>
@endforeach

<a href="/categorias/create">Agregar Nueva Categoria</a>

@endsection