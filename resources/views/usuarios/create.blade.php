<form method="POST" action="/usuarios">
{{ csrf_field() }}



<h1 class="h3 mb-3 font-weight-normal">Creacion de cuenta</h1>

<br><br>

<label for="rut">rut:</lavel><br>
<input type="text" id="rut" name="rut"><br>

<label for="contrasena">contraseña:</lavel><br>
<input type="text" id="contrasena" name="contrasena"><br>


<input type="hidden" name="tipo_usuario" id="tipo_usuario" value="Cliente">

<label for="nombre">nombre:</lavel><br>
<input type="text" id="nombre" name="nombre"><br>

<label for="apellidos">apellidos:</lavel><br>
<input type="text" id="apellidos" name="apellidos"><br>

<label for="correo">correo:</lavel><br>
<input type="text" id="correo" name="correo"><br>

<label for="fono">fono:</lavel><br>
<input type="text" id="fono" name="fono"><br>
<br><br>

<input type="hidden" name="estado" id="estado" value="vigente">

<input type="submit"  value="Crear Usuario">

</form>

