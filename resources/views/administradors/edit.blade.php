<form method="POST" action="/administradors/{{$users->id}}">
    @method('PUT')
    {{ csrf_field() }}

  
<label for="name">nombre:</label><br>
<input type="text" id="name" name="name" value="{{$users->name}}"><br>

<label for="apellidos">apellidos:</label><br>
<input type="text" id="apellidos" name="apellidos" value="{{$users->apellidos}}"><br>

<label for="fono">fono:</label><br>
<input type="text" id="fono" name="fono" value="{{$users->fono}}"><br>

<label for="email">email:</label><br>
<input type="text" id="email" name="email" value="{{$users->correo}}"><br>

  <input type="submit" value="editar usuario">
</form> 