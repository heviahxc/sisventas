@extends('layouts.app')


@section('content')

    <head>
     
      
       
       <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">

       <title>DataTable</title>

   </head>
   <body>
       <div class="container" STYLE="BACKGROUND-COLOR: WHITE">
       <table id="users">
         <thead>
          <tr>
              <th>Rut</th>
              <th>Nombre</th>
              <th>Apellidos</th>
              <th>Fono</th>
              <th>email</th>
              <th>Tipo</th>
          </tr>
         </thead>
         <tbody>
            @foreach ($users as $user)
            @if ($user->tipo_usuario == 'CLIENTE')
            <tr>
                <td>{{$user->rut}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->fono}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tipo_usuario}}</td>
                </tr>
            @else
                
            @endif
             
            @endforeach

         </tbody>
         </table>
         </div>
         <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
         <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
         <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

     <script>
        $(document).ready(function() {
          $('#users').DataTable();
        } );</script>
   </body>


   @endsection