<form method="POST" action="/categorias/{{$categoria->id}}">
    @method('PUT')
    {{ csrf_field() }}

  <label for="nombre_categoria">Nombre categoria:</label><br>
<input type="text" id="nombre_categoria" name="nombre_categoria" value="{{$categoria->nombre_categoria}}"><br>
  
  <input type="submit" value="editar Categoria">
</form> 