@extends('layoutinicio.master')

@section('content')
    
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

<body class="text-center">
<form class="form-signin" action="/mantenedores" style="margin: 5%">
<h1 class="h3 mb-3 font-weight-normal">Iniciar session</h1>
<label for="inputEmail" class="form-text text-muted">Ingresa email</label>
<input type="email"  class="form-control" placeholder="Ingresa Email">
<br>
<label for="inputPassword" class="sr-only">Password</label>
<input type="password" id="inputPassword" class="form-control" placeholder="Contraseña">
</div>
<br>
<button class="btn btn-outline-primary" type="submit">Iniciar sesion</button>
<p class="mt-5 mb-3 text-muted">&copy;2020</p>



</form>



  
  @endsection