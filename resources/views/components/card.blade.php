
<div class="card mb-3" style="max-width: 540px;"  >
    <div class="row no-gutters">
        <div class="col-md-4">
        

    <img src="{{asset('storage').'/'.$imagen}}" alt="producto" width="200">

  


        <b>{{$nombre}}</b>
    </div>
    <div class="col-md-8">
    <div class="card-body">
        <b><label for="precio">Precio:</label></b><br>
        {{$precio}} <br>
        <br>
        <b> <label for="stock">Stock:</label></b><br>
        {{$stock}} <br>
        <br>
        <b><label for="categoria">Categoria:</label></b><br>
        @foreach ($categorias as $categoria)
            @if ($idcategoria == $categoria->id)
                {{$categoria->nombre_categoria}}
            @endif
            
        @endforeach
        <br>
        <br>
        <div class="btn-group" role="group" aria-label="Basic example">
            <form action="/productos/{{$id}}/edit" method="GET">
                <button type="submit" class="btn btn-primary">Editar</button>
            </form> 
            <form method="POST" action="/productos/{{$id}}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>    
          </div>


        </div>
    </div>
  </div>

    </div>
  




