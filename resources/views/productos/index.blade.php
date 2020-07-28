@extends('layout.master')

@section('content')
@foreach ($productos as $producto)
<x-card
    :nombre="$producto->nombre"
    :precio="$producto->precio"
    :stock="$producto->stock"
    :id="$producto->id"
    :idcategoria="$producto->id_categoria"
    :categorias="$categorias"
/>
@endforeach
<h1> <button type="button" class="btn btn-outline-primary" style="margin: 5%"><a href="/productos/create">Agregar Nuevo Producto</a></button></h1>
 
@endsection
