@canany('reporte_productos','darbaja_productos','modificar_productos','crear_productos')




@extends('layouts.app')
@section('content')

<head>
     
      
       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>

</head>
<body>
    <div class="container" STYLE="BACKGROUND-COLOR: WHITE">
    <table id="productos">
      <thead>
       <tr>
           <th>nombre</th>
           <th>precio</th>
           <th>stok</th>
           <th>categoria</th>
           <th>imagen</th>
           <th>&nbsp;</th>
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
             @endif    
             @endforeach
             <td>{{$producto->imagen}}</td>
             <td><form action="/productos/{{$producto->id}}/edit" method="GET">
                 <button type="submit" class="btn btn-primary">Editar</button></form></td>
             <td><form action="/productos/{{$producto->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
             </tr>
         
          
         @endforeach

      </tbody>
      </table>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <script>
     $(document).ready(function() {
       $('#productos').DataTable();
     } );</script>
</body>

<h1> <button type="button" class="btn btn-outline-primary" style="margin: 5%"><a href="/productos/create">Agregar Nuevo producto</a></button></h1>



@endsection
@endcan