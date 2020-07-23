@extends('layout.master')

@section('content')
@foreach ($productos as $producto)
<x-card
    :nombre="$producto->nombre"
    :precio="$producto->precio"
    :stock="$producto->stock"
    :idcategoria="$producto->id_categoria"
    :categorias="$categorias"
/>
@endforeach

<a href="/productos/create">Agregar Nuevo Producto</a> 
@endsection
