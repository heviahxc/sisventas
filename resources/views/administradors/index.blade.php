@extends('layouts.app')


@section('content')
@if (session()->has('msj'))
<div class="alert alert-danger" role="alert">
  {{session('msj')}}
  @endif
</div>
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
              <th>Estado</th>
              <th>&nbsp;</th>
              

          </tr>
         </thead>
         <tbody>
            @foreach ($users as $user)
            @if ($user->tipo_usuario == 'EMPLEADO')
            <tr>
                <td>{{$user->rut}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->apellidos}}</td>
                <td>{{$user->fono}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->tipo_usuario}}</td>
                <td>{{$user->estado}}</td>
                <td><form action="/administradors/{{$user->id}}/edit" method="GET">
                    <button type="submit" class="btn btn-primary">Modificar</button></form></td>
                </tr>
            @else
                
            @endif
             
            @endforeach

         </tbody>
         
         </table>
         <h1><button type="button" class="btn btn-out line-primary" style="margin: 5%"><a href="/administradors/create">Agregar Nuevo Empleado</a></button></h1>
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
  