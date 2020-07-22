 <form method="POST" action="/categorias">
    {{ csrf_field() }}

  <label for="nombre_categoria">Nombre categoria:</label><br>
  <input type="text" id="nombre_categoria" name="nombre_categoria" placeholder="Ej: Gasfitería"><br>
  
  <input type="submit" value="Agregar Categoria">
</form> 



