@foreach ($productos as $producto)
    => <b>{{$producto->nombre}}</b> <br>
        {{$producto->precio}} <br>
        {{$producto->stock}} <br>
      
        @foreach ($categorias as $categoria)
            @if ($producto->id_categoria == $categoria->id)
                {{$categoria->nombre_categoria}}
            @endif
            
        @endforeach

        <form action="/productos/{{$producto->id}}/edit" method="GET">
            <button type="submit">Editar</button>
        </form>    


    <br>
    <br>
@endforeach

<a href="/productos/create">Agregar Nuevo Producto</a>