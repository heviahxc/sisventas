<div class="card" style="margin: 5%">
    <div class="card-header">
        <b>{{$nombre}}</b> <br>
    </div>
    <div class="card-body">
        <div class="btn-group" role="group" aria-label="Basic example">
        <form action="/categorias/{{$id}}/edit" method="GET">
            <button type="submit" class="btn btn-primary">editar</button>
        </form>
    
        <form method="POST" action="/categorias/{{$id}}">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">eliminar</button>
        </form>
        </div>
        <br>
        <br>
    </div>
  </div>