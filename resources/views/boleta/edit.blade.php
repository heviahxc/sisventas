@canany('reporte_productos','darbaja_productos','modificar_productos','crear_productos')




@extends('layouts.app')
@section('content')

<head>
     
      
       
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

    <title>DataTable</title>

</head>
<body>
    <div class="container" STYLE="BACKGROUND-COLOR: WHITE">
        
    <table id="boletas">
      <thead>
       <tr>
           <th>Cliente</th>
           <th>Total Pagado</th>
           <th>Estado</th>
           <th>&nbsp;</th>
           

       </tr>
      </thead>
      
      <tbody>
         
         @foreach ($boletas as $boleta)
         <tr>
            @if($boleta->estado == 'VIJENTE')
             <td>{{$boleta->rut_cliente}}</td>
             <td>{{$producto->total}}</td>
             <td>{{$producto->estado}}</td>
            @endif
             @endforeach
             <td><form action="/boleta/{{$boleta->id}}/edit" method="GET">
                 <button type="submit" class="btn btn-primary">Despachar</button></form></td>
             </tr>
         
          
         @endforeach

      </tbody>
      </table>
      <h1> <button type="button" class="btn btn-outline-primary" style="margin: 5%"><a href="/productos/create">Agregar Nuevo producto</a></button></h1>

      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

  <script>
     $(document).ready(function() {
       $('#boletas').DataTable();
     } );</script>
</body>




@endsection
@endcan