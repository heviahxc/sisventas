@extends('layouts.app')

@section('content')

    
<head>
     
      
       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>

</head>
<body>
    <div class="container" STYLE="BACKGROUND-COLOR: WHITE">
    <table id="categorias">
      <thead>
       <tr>
           <th>nombre</th>
           <th>&nbsp;</th>
           <th>&nbsp;</th>

       </tr>
      </thead>
      <tbody>
         @foreach ($categorias as $categoria)
         <tr>
             <td>{{$categoria->nombre_categoria}}</td>

             <td><form action="/categorias/{{$categoria->id}}/edit" method="GET">
                 <button type="submit" class="btn btn-primary">Editar</button></form></td>
             <td><form action="/categorias/{{$categoria->id}}" method="POST">
                 @csrf
                 @method('DELETE')
                 <button type="submit" class="btn btn-danger">Eliminar</button></form></td>
             </tr>
         
          
         @endforeach

      </tbody>
      </table>
      
<h1> <button type="button" class="btn btn-outline-primary" style="margin: 5%"><a href="/categorias/create"
    >Agregar Nueva Categoria</a></button></h1>
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <script>
     $(document).ready(function() {
       $('#categorias').DataTable();
     } );</script>
</body>






@endsection
