<form method="POST" action="/usuarios">
{{ csrf_field() }}

<label for="rut">rut:</lavel><br>
<input type="text" id="rut" name="rut"><br>

<label for="contrasena">contraseña:</lavel><br>
<input type="text" id="contrasena" name="contrasena"><br>


<label for="tipo_usuario">Tipo de usuario:</label><br>
<select name="tipo_usuario" id="tipo_usuario">
  <option value="Administrador">Administrador</option>
  <option value="Empleado">Empleado</option>
  <option value="Cliente">Cliente</option>
</select>
<br>

<label for="nombre">nombre:</lavel><br>
<input type="text" id="nombre" name="nombre"><br>

<label for="apellidos">apellidos:</lavel><br>
<input type="text" id="apellidos" name="apellidos"><br>

<label for="correo">correo:</lavel><br>
<input type="text" id="correo" name="correo"><br>

<label for="fono">fono:</lavel><br>
<input type="text" id="fono" name="fono"><br>
<br><br>

<input type="submit"  value="agregra usuario">

</form>
