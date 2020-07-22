<form method="POST" action="/productos/{{$producto->id}}">
    @method('PUT')
    {{ csrf_field() }}

  <label for="nombre">Nombre producto:</label><br>
  <input type="text" id="nombre" name="nombre" value="{{$producto->nombre}}"><br>

  <label for="precio">Precio:</label><br>
  <input type="text" id="precio" name="precio" value="{{$producto->precio}}"><br>

  <label for="stock">Stock:</label><br>
  <input type="text" id="stock" name="stock" value="{{$producto->stock}}"><br>

  <label for="stock">Categoria:</label><br>
  <select id="id_categoria" name="id_categoria" size="1">
    @foreach ($categorias as $categoria)
        <option value={{$categoria->id}}>{{$categoria->nombre_categoria}}</option>
    @endforeach

  </select>



  
  <input type="submit" value="Editar Producto">
</form> 
