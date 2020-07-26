<form method="POST" action="/usuarios/{{$usuario->rut}}">
    @method('PUT')
    {{ csrf_field() }}

  <label for="contrasena">contraseña:</label><br>
<input type="text" id="contrasena" name="contrasena" value="{{$usuario->contrasena}}"><br>
  
<label for="nombre">nombre:</label><br>
<input type="text" id="nombre" name="nombre" value="{{$usuario->nombre}}"><br>

<label for="apellidos">apellidos:</label><br>
<input type="text" id="apellidos" name="apellidos" value="{{$usuario->apellidos}}"><br>

<label for="correo">correo:</label><br>
<input type="text" id="correo" name="correo" value="{{$usuario->correo}}"><br>

<label for="fono">fono:</label><br>
<input type="text" id="fono" name="fono" value="{{$usuario->fono}}"><br>

  <input type="submit" value="editar usuario">
</form> 