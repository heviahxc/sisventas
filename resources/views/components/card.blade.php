<div class="card">
    <div class="card-header">
        => <b>{{$nombre}}</b>
    </div>
    <div class="card-body">
        {{$precio}} <br>
        {{$stock}} <br>
      
        @foreach ($categorias as $categoria)
            @if ($idcategoria == $categoria->id)
                {{$categoria->nombre_categoria}}
            @endif
            
        @endforeach

        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <form action="/productos/{{$id}}/edit" method="GET">
                <button type="submit">Editar</button>
            </form> 
            <form method="POST" action="/productos/{{$id}}">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>    
          </div>




    </div>
  </div>




