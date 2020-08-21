@canany('reporte_productos','darbaja_productos','modificar_productos','crear_productos')



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
  <div class="alert alert-success" role="alert">
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
            <div class="card-header" style="background: #bd362f; color: white;">Productos</div>
            <div class="card-body">
                <table id="productos">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>precio</th>
                            <th>stok</th>
                            <th>categoria</th>
                            <th>estado</th>
                            <th>imagen</th>
                            <th>&nbsp;</th>


                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($productos as $producto)
                        <tr>
                            <td>{{$producto->nombre}}</td>
                            <td>{{$producto->precio}}</td>
                            <td>{{$producto->stock}}</td>
                            @foreach ($categorias as $categoria)
                            @if ($producto->id_categoria == $categoria->id)
                            <td>{{$categoria->nombre_categoria}}</td>
                            <td>{{$producto->estado}}</td>
                            @endif
                            @endforeach

                            <td><img src="{{asset('storage').'/'.$producto->imagen}}" alt="producto" width="50"></td>

                            <td>
                                <form action="/productos/{{$producto->id}}/edit" method="GET">
                                    <button type="submit" class="btn btn-primary">Modificar</button></form>
                            </td>
                        </tr>


                        @endforeach

                    </tbody>
                </table>
                <a href="/productos/create" class="btn btn-primary">Agregar Nuevo producto</a>

            </div>
        </div>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#productos').DataTable();
        });
    </script>
</body>




@endsection
@endcan