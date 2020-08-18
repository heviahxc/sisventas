@extends('layouts.app')

@section('content')

@if (session()->has('msj'))
<div class="row justify-content-center">
  <div class="alert alert-success" role="alert">
    {{session('msj')}}
    <button type="button" class="close" data-dismiss="alert">x</button>
  </div>
</div>
@endif
@if (session()->has('msje'))
<div class="row justify-content-center">
  <div class="alert alert-danger" role="alert">
    {{session('msje')}}
    <button type="button" class="close" data-dismiss="alert">x</button>
  </div>
</div>
@endif

<head>



  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

  <title>DataTable</title>

</head>

<body>
  <div class="container">
    <div class="card">
      <div class="card-header" style="background: #bd362f; color: white;">Categoria del Producto</div>
      <div class="card-body">
        <table id="categorias">
          <thead>
            <tr>
              <th>nombre</th>
              <th>estado</th>
              <th>&nbsp;</th>


            </tr>
          </thead>
          <tbody>
            @foreach ($categorias as $categoria)
            <tr>
              <td>{{$categoria->nombre_categoria}}</td>
              <td>{{$categoria->estado}}</td>

              <td>
                <form action="/categorias/{{$categoria->id}}/edit" method="GET">
                  <button type="submit" class="btn btn-primary">Modificar</button></form>
              </td>
            </tr>


            @endforeach

          </tbody>
        </table>

        <a href="/categorias/create" class="btn btn-primary">Agregar Nueva Categoria</a>
      </div>
    </div>
  </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#categorias').DataTable();
    });
  </script>
</body>






@endsection