@extends('layoutinicio.master')

@section('content')


<form method="POST" action="/usuarios" style="margin: 5%">
{{ csrf_field() }}

<h1 class="text-center" class="h3 mb-3 font-weight-normal">Registrarse!</h1>

<label for="rut">Rut:</label><br>
<input type="text" class="form-control" id="rut" name="rut"><br>

<label for="contrasena">Contraseña:</label><br>
<input type="text" class="form-control" id="contrasena" name="contrasena"><br>


<input type="hidden" name="tipo_usuario" id="tipo_usuario" value="CLIENTE">

<label for="nombre">Nombre:</label><br>
<input type="text" class="form-control" id="nombre" name="nombre"><br>

<label for="apellidos">Apellidos:</label><br>
<input type="text" class="form-control" id="apellidos" name="apellidos"><br>

<label for="correo">Correo:</label><br>
<input type="text" class="form-control" id="correo" name="correo"><br>

<label for="fono">Fono:</label><br>
<input type="text" class="form-control" id="fono" name="fono"><br>
<br><br>

<input type="hidden" name="estado" id="estado" value="VIGENTE">

<input type="submit" class="btn btn-outline-primary"  value="Crear Usuario">

</form>

@endsection
