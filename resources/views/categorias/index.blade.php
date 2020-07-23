@foreach ($categorias as $categoria)
    => <b>{{$categoria->nombre_categoria}}</b> <br>

    <form action="/categorias/{{$categoria->id}}/edit" method="GET">
        <button type="submit">editar</button>
    </form>

    <form method="POST" action="/categorias/{{$categoria->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">eliminar</button>
    </form>

    <br>
    <br>
@endforeach

<a href="/categorias/create">Agregar Nueva Categoria</a>

