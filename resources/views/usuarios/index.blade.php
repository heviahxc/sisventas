@foreach ($usuarios as $usuario)
    ->{{$usuario->rut}}<br>
      {{$usuario->contrasena}}<br>
      {{$usuario->tipo_usuario}}<br>
      {{$usuario->nombre}}<br>
      {{$usuario->apellidos}}<br>
      {{$usuario->correo}}<br>
      {{$usuario->fono}}<br>

      <br>
<form action="/usuarios/{{$usuario->rut}}/edit" method="GET">
  <button type="submit">editar</button>

  <form method="POST" action="/usuarios/{{$usuario->rut}}">
    @csrf
    @method('DELETE')
    <button type="submit">eliminar</button>
       <br>
       <br>
      
@endforeach

<a href="/usuarios/create">ingresar usuario</a>