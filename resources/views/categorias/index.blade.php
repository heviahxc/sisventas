@foreach ($categorias as $categoria)
    => <b>{{$categoria->nombre_categoria}}</b> <br>
    <br>
    <br>
@endforeach

<a href="/categorias/create">Agregar Nueva Categoria</a>