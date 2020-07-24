@foreach ($usuarios as $usuario)
    ->{{$usuario->rut}}<br>
      {{$usuario->contrasena}}<br>
      {{$usuario->tipo_usuario}}<br>
      {{$usuario->nombre}}<br>
      {{$usuario->apellidos}}<br>
      {{$usuario->correo}}<br>
      {{$usuario->fono}}<br>

      <br>
      <br>
@endforeach

<a href="/usuarios/create">ingresar usuario</a>