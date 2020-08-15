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
       <div class="container">
            <div class="card" >
                <div class="card-header" style = "background: #bd362f; color: white;">Empleados</div>
                    <div class="card-body">
       <table id="users">
         <thead style="display: inline-block; padding: 5px;">
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
                <td style="display: inline-block; padding: 5px;">{{$user->rut}}</td>
                <td style="display: inline-block; padding: 5px;">{{$user->name}}</td>
                <td style="display: inline-block; padding: 5px;">{{$user->apellidos}}</td>
                <td style="display: inline-block; padding: 5px;">{{$user->fono}}</td>
                <td style="display: inline-block; padding: 5px;">{{$user->email}}</td>
                <td style="display: inline-block; padding: 5px;">{{$user->tipo_usuario}}</td>
                <td style="display: inline-block; padding: 5px;">{{$user->estado}}</td>
                <td style="display: inline-block; padding: 5px;"><form action="/administradors/{{$user->id}}/edit" method="GET">
                    <button type="submit" class="btn btn-primary">Modificar</button></form></td>
                </tr>
            @else
                
            @endif
             
            @endforeach

         </tbody>
         
         </table>
         <a href="/administradors/create" class="btn btn-primary">Agregar Nuevo Empleado</a>
         </div>
         </div>
         </div>
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
  