@extends('layouts.app')

@section('content')
@if (session()->has('msj'))
<div class="row justify-content-center">
  <div class="alert alert-danger" role="alert">
    {{session('msj')}}
    <button type="button" class="close" data-dismiss="alert">x</button>
  </div>
</div>
@endif
@if (session()->has('msje'))
<div class="row justify-content-center">
  <div class="alert alert-success" role="alert">
    {{session('msje')}}
    <button type="button" class="close" data-dismiss="alert">x</button>
  </div>
</div>
@endif

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100"  src="/css/oferta1.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/css/oferta2.jpg" >
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/css/oferta3.jpg" >
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background: #bd362f; color: white;" >Productos</div>
                <a href="/carrito" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Ver Carrito de Compras</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--Agregar productos--}}

<div class="row">
   @foreach ($productos as $producto)
   @if ($producto->estado=="ACTIVO")
    <div class="col-6" >
        <form method="POST" action="/seleccion">
            {{ csrf_field() }}
        <img src="{{asset('storage').'/'.$producto->imagen}}" width="300" height="300">
        <h4>{{$producto->nombre}}</h4>
        @foreach ($categorias as $categoria)
        @if ($producto->id_categoria == $categoria->id)
        <p><strong>Categoria:</strong></p>
        <p>{{$categoria->nombre_categoria}}</p>                       
        @endif           
        @endforeach
        <p><strong>En Stock:</strong></p>
        <p>{{$producto->stock}}</p>
        <p><strong>Precio:</strong>${{$producto->precio}}</p>
        <input type="hidden" name="id" id="id" value="{{$producto->id}}">
        @foreach ($users as $user)
        <input type="hidden" name="rut" id="rut" value="{{auth()->user()->rut}}"> 
        @endforeach
        <input type="hidden" name="precio" id="precio" value="{{$producto->precio}}">
        <p><strong>Cantidad:</strong></p>
  <input  type="number" class="form-control" id="cantidad" name="cantidad"  min="1" placeholder="Ej: 1" required><br>
 

  <input class="btn btn-primary" type="submit" value="Agregar a Carrito" >
  @endif
    <br>
</form>

    </div>

   @endforeach    
     
                </div>
                
               

            </div>

           {{$productos->links()}}
        </div>
    </div>
</div>


@endsection
