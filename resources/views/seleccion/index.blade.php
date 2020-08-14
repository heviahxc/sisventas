@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Productos</div>
                <a href="/carrito" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Carrito de compra</a>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--Agregar productos--}}

<div class="row">
   @foreach ($productos as $producto)
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
  <input  type="number" class="form-control" id="cantidad" name="cantidad" placeholder="Ej: 1" required><br>
 

  <input class="btn btn-outline-primary" type="submit" value="Agregar a Carrito" >
  
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

{{$productos->links()}}
@endsection
